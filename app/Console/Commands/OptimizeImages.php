<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Laravel\Facades\Image;
use Spatie\ImageOptimizer\OptimizerChain;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class OptimizeImages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'images:optimize 
                            {--resize : Resize large images to max 1920px width}
                            {--webp : Generate WebP versions}
                            {--quality=85 : JPEG quality (1-100)}
                            {--force : Force re-optimization of all images}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Optimize all images in public/images directory';

    protected $optimizerChain;
    protected $stats = [
        'processed' => 0,
        'original_size' => 0,
        'optimized_size' => 0,
        'webp_created' => 0,
        'errors' => 0
    ];

    public function __construct(OptimizerChain $optimizerChain)
    {
        parent::__construct();
        $this->optimizerChain = $optimizerChain;
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('🖼️  Starting image optimization...');
        $this->newLine();

        $imagesPath = public_path('images');
        
        if (!File::exists($imagesPath)) {
            $this->error('Images directory not found!');
            return 1;
        }

        // Get all image files recursively
        $images = File::allFiles($imagesPath);
        $imageFiles = collect($images)->filter(function ($file) {
            return in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif']);
        });

        $total = $imageFiles->count();
        $this->info("Found {$total} images to process");
        $this->newLine();

        $progressBar = $this->output->createProgressBar($total);
        $progressBar->setFormat(' %current%/%max% [%bar%] %percent:3s%% %message%');

        foreach ($imageFiles as $file) {
            $progressBar->setMessage("Processing: {$file->getFilename()}");
            
            try {
                $this->processImage($file->getPathname());
            } catch (\Exception $e) {
                $this->stats['errors']++;
                $this->newLine();
                $this->error("Error processing {$file->getFilename()}: " . $e->getMessage());
            }
            
            $progressBar->advance();
        }

        $progressBar->finish();
        $this->newLine(2);

        $this->displayStats();

        return 0;
    }

    protected function processImage(string $path)
    {
        $originalSize = filesize($path);
        $this->stats['original_size'] += $originalSize;

        // Step 1: Resize if needed
        if ($this->option('resize')) {
            $this->resizeImage($path);
        }

        // Step 2: Optimize with lossless compression
        $this->optimizeImage($path);

        // Step 3: Generate WebP version
        if ($this->option('webp')) {
            $this->generateWebP($path);
        }

        $optimizedSize = filesize($path);
        $this->stats['optimized_size'] += $optimizedSize;
        $this->stats['processed']++;
    }

    protected function resizeImage(string $path)
    {
        try {
            $image = Image::read($path);
            
            // Get current dimensions
            $width = $image->width();
            $height = $image->height();
            
            $maxWidth = 1920;
            
            // Only resize if image is larger than max width
            if ($width > $maxWidth) {
                $image->scale(width: $maxWidth);
                
                // Save with quality setting
                $quality = (int) $this->option('quality');
                
                if (str_ends_with(strtolower($path), '.jpg') || str_ends_with(strtolower($path), '.jpeg')) {
                    $image->toJpeg($quality)->save($path);
                } elseif (str_ends_with(strtolower($path), '.png')) {
                    $image->toPng()->save($path);
                } else {
                    $image->save($path);
                }
            }
        } catch (\Exception $e) {
            // Log but don't fail
            $this->warn("Could not resize {$path}: " . $e->getMessage());
        }
    }

    protected function optimizeImage(string $path)
    {
        try {
            $this->optimizerChain->optimize($path);
        } catch (\Exception $e) {
            // Optimization tools might not be installed, that's okay
            $this->warn("Could not optimize {$path}: " . $e->getMessage());
        }
    }

    protected function generateWebP(string $path)
    {
        try {
            $webpPath = preg_replace('/\.(jpe?g|png|gif)$/i', '.webp', $path);
            
            // Skip if WebP already exists and not forcing
            if (file_exists($webpPath) && !$this->option('force')) {
                return;
            }

            $image = Image::read($path);
            $image->toWebp(90)->save($webpPath);
            
            $this->stats['webp_created']++;
        } catch (\Exception $e) {
            $this->warn("Could not create WebP for {$path}: " . $e->getMessage());
        }
    }

    protected function displayStats()
    {
        $this->info('✅ Image optimization complete!');
        $this->newLine();

        $savedBytes = $this->stats['original_size'] - $this->stats['optimized_size'];
        $savedPercentage = $this->stats['original_size'] > 0 
            ? round(($savedBytes / $this->stats['original_size']) * 100, 2) 
            : 0;

        $this->table(
            ['Metric', 'Value'],
            [
                ['Images Processed', number_format($this->stats['processed'])],
                ['Original Size', $this->formatBytes($this->stats['original_size'])],
                ['Optimized Size', $this->formatBytes($this->stats['optimized_size'])],
                ['Space Saved', $this->formatBytes($savedBytes) . " ({$savedPercentage}%)"],
                ['WebP Files Created', number_format($this->stats['webp_created'])],
                ['Errors', number_format($this->stats['errors'])],
            ]
        );
    }

    protected function formatBytes(int $bytes): string
    {
        if ($bytes >= 1073741824) {
            return number_format($bytes / 1073741824, 2) . ' GB';
        } elseif ($bytes >= 1048576) {
            return number_format($bytes / 1048576, 2) . ' MB';
        } elseif ($bytes >= 1024) {
            return number_format($bytes / 1024, 2) . ' KB';
        }
        return $bytes . ' B';
    }
}

@props(['src', 'alt', 'class' => '', 'loading' => 'lazy'])

@php
    // Try WebP first, fallback to original if WebP doesn't exist
    $webpPath = preg_replace('/\.(jpe?g|png|gif)$/i', '.webp', $src);
    $publicPath = public_path($webpPath);
    
    // If webp doesn't exist, use original image
    if (!file_exists($publicPath)) {
        $webpPath = $src;
    }
@endphp

<img 
    src="{{ asset($webpPath) }}" 
    alt="{{ $alt }}"
    class="{{ $class }}"
    loading="{{ $loading }}"
    decoding="async"
>

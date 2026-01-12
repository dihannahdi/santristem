<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed with existing documentation photos from Dec 12, 2024 event
        $baseDir = 'images/dokumentasi/20241212 PkM Strategi Peningkatan Kemampuan Numerasi Santri Sekolah Pondok Pesantren Tingkat SLTA/';
        
        // Selected best photos with descriptions
        $photos = [
            [
                'file' => 'DSC04036.webp',
                'title' => 'Pembukaan Sarasehan Guru Matematika',
                'description' => 'Suasana pembukaan acara Sarasehan Guru Matematika Pesantren DIY di FMIPA UGM',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04041.webp',
                'title' => 'Sambutan Pembukaan',
                'description' => 'Penyampaian sambutan dan penjelasan program santriSTEM kepada peserta',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04048.webp',
                'title' => 'Peserta Sarasehan',
                'description' => 'Para guru matematika dari berbagai pesantren di DIY mengikuti sarasehan dengan antusias',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04050.webp',
                'title' => 'Sesi Diskusi Kelompok',
                'description' => 'Guru-guru berdiskusi mengenai tantangan pembelajaran matematika di pesantren',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04055.webp',
                'title' => 'Presentasi Narasumber',
                'description' => 'Narasumber memaparkan strategi peningkatan kemampuan numerasi santri',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04059.webp',
                'title' => 'Focus Group Discussion',
                'description' => 'FGD intensif membahas kendala dan solusi pembelajaran STEM di pesantren',
                'is_featured' => true
            ],
            [
                'file' => 'DSC04062.webp',
                'title' => 'Diskusi Interaktif',
                'description' => 'Peserta aktif bertanya dan berbagi pengalaman mengajar matematika',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04066.webp',
                'title' => 'Materi Workshop',
                'description' => 'Penyampaian materi workshop tentang metode pembelajaran inovatif',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04073.webp',
                'title' => 'Kerja Kelompok',
                'description' => 'Guru-guru bekerja sama dalam kelompok memecahkan studi kasus',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04076.webp',
                'title' => 'Dokumentasi Bersama',
                'description' => 'Foto bersama peserta dan tim santriSTEM di akhir acara',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04080.webp',
                'title' => 'Networking Session',
                'description' => 'Peserta saling bertukar kontak dan membangun jejaring antar pesantren',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04085.webp',
                'title' => 'Evaluasi Program',
                'description' => 'Sesi evaluasi dan masukan untuk program santriSTEM ke depan',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04091.webp',
                'title' => 'Praktik Mengajar',
                'description' => 'Simulasi praktik mengajar dengan metode pembelajaran aktif',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04095.webp',
                'title' => 'Sharing Session',
                'description' => 'Guru berbagi best practices pembelajaran matematika di kelasnya',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04098.webp',
                'title' => 'Tanya Jawab',
                'description' => 'Sesi tanya jawab seputar implementasi program di sekolah masing-masing',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04102.webp',
                'title' => 'Coffee Break',
                'description' => 'Suasana santai saat coffee break, peserta networking dan berbagi cerita',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04106.webp',
                'title' => 'Presentasi Kelompok',
                'description' => 'Kelompok mempresentasikan hasil diskusi dan rencana tindak lanjut',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04110.webp',
                'title' => 'Pemaparan Hasil FGD',
                'description' => 'Pemaparan kesimpulan dan rekomendasi dari Focus Group Discussion',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04115.webp',
                'title' => 'Pemberian Sertifikat',
                'description' => 'Penyerahan sertifikat kepada peserta sarasehan',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04120.webp',
                'title' => 'Penutupan Acara',
                'description' => 'Foto bersama seluruh peserta dan panitia di akhir acara',
                'is_featured' => false
            ],
            // Additional quality photos
            [
                'file' => 'DSC04037.webp',
                'title' => 'Registrasi Peserta',
                'description' => 'Proses registrasi peserta di meja pendaftaran',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04044.webp',
                'title' => 'Suasana Auditorium',
                'description' => 'Suasana auditorium FMIPA UGM yang penuh dengan peserta',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04051.webp',
                'title' => 'Antusiasme Peserta',
                'description' => 'Peserta mendengarkan pemaparan dengan antusias',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04069.webp',
                'title' => 'Diskusi Antar Kelompok',
                'description' => 'Berbagi hasil diskusi antar kelompok',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04082.webp',
                'title' => 'Workshop Interaktif',
                'description' => 'Workshop interaktif tentang media pembelajaran digital',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04089.webp',
                'title' => 'Materi Pelatihan',
                'description' => 'Penyampaian materi pelatihan metode pembelajaran STEM',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04096.webp',
                'title' => 'Sesi Konsultasi',
                'description' => 'Konsultasi individual dengan narasumber',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04105.webp',
                'title' => 'Brainstorming Session',
                'description' => 'Sesi brainstorming solusi untuk tantangan pembelajaran',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04112.webp',
                'title' => 'Foto Dokumentasi',
                'description' => 'Dokumentasi aktivitas peserta selama acara berlangsung',
                'is_featured' => false
            ],
            [
                'file' => 'DSC04123.webp',
                'title' => 'Kenang-kenangan',
                'description' => 'Momen terakhir acara, peserta berfoto sebagai kenang-kenangan',
                'is_featured' => false
            ],
        ];

        foreach ($photos as $index => $photo) {
            \App\Models\Gallery::create([
                'event_id' => 1, // Sarasehan 2024
                'title' => $photo['title'],
                'description' => $photo['description'],
                'image_path' => $baseDir . $photo['file'],
                'category' => 'event',
                'order' => $index,
                'is_featured' => $photo['is_featured'],
            ]);
        }

        // 2025 PKM Pesantren Photos
        $baseDir2025 = 'PKM Pesantren/';
        $photos2025 = [
            ['file' => 'DSC08739.JPG', 'title' => 'Kegiatan PKM Pesantren 2025', 'description' => 'Dokumentasi kegiatan Program Kemitraan Masyarakat dengan Pesantren tahun 2025', 'featured' => true],
            ['file' => 'DSC08740.JPG', 'title' => 'Sesi Pembelajaran', 'description' => 'Peserta santri mengikuti sesi pembelajaran dengan antusias', 'featured' => true],
            ['file' => 'DSC08741.JPG', 'title' => 'Interaksi Pengajar dan Santri', 'description' => 'Momen interaksi pengajar dengan para santri peserta program', 'featured' => true],
            ['file' => 'DSC08742.JPG', 'title' => 'Aktivitas Belajar', 'description' => 'Suasana belajar yang kondusif di lingkungan pesantren', 'featured' => false],
            ['file' => 'DSC08744.JPG', 'title' => 'Diskusi Kelompok', 'description' => 'Santri berdiskusi dalam kelompok kecil', 'featured' => false],
            ['file' => 'DSC08747.JPG', 'title' => 'Praktik Pembelajaran', 'description' => 'Pelaksanaan praktik pembelajaran interaktif', 'featured' => false],
            ['file' => 'DSC08749.JPG', 'title' => 'Presentasi Materi', 'description' => 'Penyampaian materi oleh fasilitator', 'featured' => false],
            ['file' => 'DSC08750.JPG', 'title' => 'Kegiatan Workshop', 'description' => 'Workshop peningkatan kemampuan STEM santri', 'featured' => false],
            ['file' => 'DSC08751.JPG', 'title' => 'Santri Berkonsentrasi', 'description' => 'Para santri fokus mengikuti materi pembelajaran', 'featured' => false],
            ['file' => 'DSC08752.JPG', 'title' => 'Sesi Tanya Jawab', 'description' => 'Santri aktif bertanya dan berdiskusi', 'featured' => false],
            ['file' => 'DSC08753.JPG', 'title' => 'Pendampingan Belajar', 'description' => 'Pendampingan intensif untuk santri', 'featured' => false],
            ['file' => 'DSC08755.JPG', 'title' => 'Aktivitas Kelompok', 'description' => 'Kerja sama dalam menyelesaikan tugas kelompok', 'featured' => false],
            ['file' => 'DSC08758.JPG', 'title' => 'Suasana Kelas', 'description' => 'Suasana kelas yang penuh semangat belajar', 'featured' => false],
            ['file' => 'DSC08760.JPG', 'title' => 'Metode Pembelajaran Aktif', 'description' => 'Penerapan metode pembelajaran yang aktif dan menyenangkan', 'featured' => false],
            ['file' => 'DSC08761.JPG', 'title' => 'Interaksi Peserta', 'description' => 'Interaksi positif antar peserta program', 'featured' => false],
        ];

        foreach ($photos2025 as $index => $photo) {
            \App\Models\Gallery::create([
                'event_id' => 2, // Sarasehan 2025
                'title' => $photo['title'],
                'description' => $photo['description'],
                'image_path' => $baseDir2025 . $photo['file'],
                'category' => 'event',
                'order' => $index,
                'is_featured' => $photo['featured'],
            ]);
        }
    }
}

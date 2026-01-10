<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            [
                'title' => 'Sarasehan Guru Matematika',
                'slug' => 'sarasehan-guru-matematika',
                'description' => 'Forum diskusi dan pelatihan untuk meningkatkan kapasitas guru matematika di pesantren dalam menyajikan materi secara menarik dan efektif.',
                'long_description' => 'Program pelatihan intensif bagi guru matematika tingkat MA/SMA di pondok pesantren. Fokus pada pemahaman mendalam konsep matematika, strategi pembelajaran yang engaging, dan integrasi matematika dengan mata pelajaran lain. Guru akan dibekali dengan metode pengajaran modern yang tetap sesuai dengan nilai-nilai pesantren.',
                'target_audience' => 'Guru Matematika MA/SMA Pesantren',
                'image' => 'programs/sarasehan-guru.jpg',
                'is_active' => true,
                'order' => 1,
            ],
            [
                'title' => 'Kuliah Sehari di UGM',
                'slug' => 'kuliah-sehari-ugm',
                'description' => 'Program one-day university life untuk santri merasakan langsung suasana perkuliahan di FMIPA UGM dengan kegiatan interaktif dan games matematika.',
                'long_description' => 'Santri diajak merasakan pengalaman kuliah di Universitas Gadjah Mada, khususnya di FMIPA. Program ini dirancang untuk menumbuhkan minat santri terhadap STEM melalui aktivitas menarik, kuliah singkat, eksperimen sains, dan games matematika. Santri akan berinteraksi dengan mahasiswa dan dosen, serta mendapat insight tentang kehidupan kampus.',
                'target_audience' => 'Santri MA/SMA (Semua Minat)',
                'image' => 'programs/kuliah-sehari.jpg',
                'is_active' => true,
                'order' => 2,
            ],
            [
                'title' => 'Kunjungan Sekolah (School Visit)',
                'slug' => 'kunjungan-sekolah',
                'description' => 'Tim santriSTEM berkunjung ke pesantren untuk memberikan motivasi, sharing session, dan workshop matematika interaktif.',
                'long_description' => 'Program kunjungan langsung tim santriSTEM ke pondok pesantren mitra. Dalam kunjungan ini, mahasiswa yang berasal dari pesantren akan berbagi pengalaman mereka dalam menempuh pendidikan STEM di perguruan tinggi. Dilengkapi dengan workshop matematika fun dan sesi tanya jawab untuk memotivasi santri.',
                'target_audience' => 'Santri & Guru MA/SMA Pesantren',
                'image' => 'programs/school-visit.jpg',
                'is_active' => true,
                'order' => 3,
            ],
            [
                'title' => 'Pembinaan Olimpiade Matematika',
                'slug' => 'pembinaan-olimpiade',
                'description' => 'Program pembinaan khusus untuk santri yang tertarik mengikuti kompetisi olimpiade matematika tingkat regional dan nasional.',
                'long_description' => 'Program pembinaan intensif bagi santri yang memiliki potensi dan minat di bidang olimpiade matematika. Materi mencakup problem solving tingkat lanjut, strategi kompetisi, dan latihan soal olimpiade. Dibimbing oleh mahasiswa dan dosen berpengalaman dalam olimpiade matematika.',
                'target_audience' => 'Santri Berbakat Matematika',
                'image' => 'programs/olimpiade.jpg',
                'is_active' => true,
                'order' => 4,
            ],
        ];

        foreach ($programs as $program) {
            \App\Models\Program::create($program);
        }
    }
}

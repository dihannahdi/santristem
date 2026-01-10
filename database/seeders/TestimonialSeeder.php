<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'name' => 'Ustadz Ahmad Fauzi',
                'role' => 'teacher',
                'school' => 'MA Al-Hikmah Yogyakarta',
                'content' => 'Program sarasehan ini sangat membantu saya memahami cara menjelaskan konsep matematika secara lebih mendalam kepada santri. Saya jadi lebih percaya diri dalam mengajar.',
                'photo' => null,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'role' => 'student',
                'school' => 'MA Nurul Huda Sleman',
                'content' => 'Alhamdulillah, setelah mengikuti kuliah sehari di UGM, saya jadi lebih termotivasi belajar matematika. Ternyata matematika itu seru kalau dipelajari dengan cara yang menyenangkan!',
                'photo' => null,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'name' => 'Devi Athiratun',
                'role' => 'volunteer',
                'school' => 'Ilmu Aktuaria UGM 2020',
                'content' => 'Menjadi bagian dari santriSTEM adalah cara saya mensyukuri nikmat pendidikan yang saya terima. Saya berharap bisa menginspirasi adik-adik santri untuk berani mengejar cita-cita di bidang STEM.',
                'photo' => null,
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'name' => 'Ustadzah Fatimah Zahra',
                'role' => 'teacher',
                'school' => 'MA Raudlatul Muta\'allimin',
                'content' => 'Sangat terbantu dengan materi dan metode yang diajarkan. Sekarang saya bisa mengintegrasikan pelajaran matematika dengan nilai-nilai agama Islam.',
                'photo' => null,
                'is_featured' => false,
                'order' => 4,
            ],
            [
                'name' => 'Muhammad Rizki',
                'role' => 'student',
                'school' => 'MA Darul Ulum Bantul',
                'content' => 'Saya yang awalnya tidak suka matematika, sekarang mulai tertarik. Kakak-kakak volunteer yang dari pesantren juga membuktikan bahwa santri bisa sukses di perguruan tinggi!',
                'photo' => null,
                'is_featured' => false,
                'order' => 5,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            \App\Models\Testimonial::create($testimonial);
        }
    }
}

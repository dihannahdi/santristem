<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'program_id' => 1, // Sarasehan Guru
                'title' => 'Sarasehan Guru Matematika Pesantren DIY 2024',
                'slug' => 'sarasehan-guru-2024',
                'description' => 'FGD dan workshop strategi peningkatan kemampuan numerasi santri sekolah pondok pesantren tingkat SLTA.',
                'long_description' => 'Forum Group Discussion bersama guru-guru matematika dari berbagai pesantren di DIY. Membahas tantangan pembelajaran matematika di pesantren dan mencari solusi bersama. Acara ini didukung oleh Departemen Matematika UGM, Pergunu, dan RMI NU.',
                'event_date' => '2024-12-12 08:00:00',
                'location' => 'FMIPA UGM, Yogyakarta',
                'max_participants' => 50,
                'registration_deadline' => '2024-12-10 23:59:59',
                'status' => 'completed',
                'featured_image' => 'events/fgd-2024.jpg',
            ],
            [
                'program_id' => 1, // Sarasehan Guru
                'title' => 'Sarasehan Guru Matematika Pesantren DIY 2025',
                'slug' => 'sarasehan-guru-2025',
                'description' => 'Pelatihan guru matematika pesantren dengan fokus pada deep dive konsep matematika dan metode pengajaran inovatif.',
                'long_description' => 'Workshop intensif untuk guru matematika di pesantren. Materi mencakup penjelasan detail setiap step perhitungan matematika tingkat SMA, strategi mengintegrasikan matematika dengan mata pelajaran lain, dan teknologi dalam pembelajaran matematika.',
                'event_date' => '2025-11-15 08:00:00',
                'location' => 'FMIPA UGM, Yogyakarta',
                'max_participants' => 60,
                'registration_deadline' => '2025-11-13 23:59:59',
                'status' => 'upcoming',
                'featured_image' => 'events/workshop-2025.jpg',
            ],
            [
                'program_id' => 2, // Kuliah Sehari
                'title' => 'Kuliah Sehari di UGM untuk Santri 2025',
                'slug' => 'kuliah-sehari-2025',
                'description' => 'Pengalaman kuliah sehari penuh di FMIPA UGM dengan kegiatan seru dan edukatif untuk santri.',
                'long_description' => 'Santri akan merasakan atmosfer kampus UGM, mengikuti kuliah singkat, eksperimen sains, games matematika, dan campus tour. Konsep acara dibuat seru seperti PPSMB dengan cofass/pembimbing kelompok.',
                'event_date' => '2025-11-02 07:00:00',
                'location' => 'FMIPA UGM (Auditorium lt.7 & Kelas-kelas)',
                'max_participants' => 100,
                'registration_deadline' => '2025-10-31 23:59:59',
                'status' => 'upcoming',
                'featured_image' => 'events/kuliah-sehari-2025.jpg',
            ],
        ];

        foreach ($events as $event) {
            \App\Models\Event::create($event);
        }
    }
}

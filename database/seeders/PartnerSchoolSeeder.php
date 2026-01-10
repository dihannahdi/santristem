<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            [
                'name' => 'MA Al-Hikmah Yogyakarta',
                'address' => 'Jl. Parangtritis No.123, Yogyakarta',
                'contact_person' => 'Ustadz Ahmad Fauzi',
                'phone' => '0274-123456',
                'email' => 'ma.alhikmah@gmail.com',
                'partnership_date' => '2024-01-15',
                'logo' => null,
                'is_active' => true,
            ],
            [
                'name' => 'MA Nurul Huda Sleman',
                'address' => 'Jl. Kaliurang Km.12, Sleman',
                'contact_person' => 'Ustadzah Siti Aminah',
                'phone' => '0274-234567',
                'email' => 'nurulhuda.sleman@gmail.com',
                'partnership_date' => '2024-03-20',
                'logo' => null,
                'is_active' => true,
            ],
            [
                'name' => 'MA Darul Ulum Bantul',
                'address' => 'Jl. Imogiri Timur Km.8, Bantul',
                'contact_person' => 'Ustadz Muhammad Amin',
                'phone' => '0274-345678',
                'email' => 'darululum.bantul@gmail.com',
                'partnership_date' => '2024-06-10',
                'logo' => null,
                'is_active' => true,
            ],
            [
                'name' => 'MA Raudlatul Muta\'allimin',
                'address' => 'Jl. Wates Km.5, Yogyakarta',
                'contact_person' => 'Ustadzah Fatimah Zahra',
                'phone' => '0274-456789',
                'email' => 'raudlatul.mutaallimin@gmail.com',
                'partnership_date' => '2024-08-05',
                'logo' => null,
                'is_active' => true,
            ],
        ];

        foreach ($schools as $school) {
            \App\Models\PartnerSchool::create($school);
        }
    }
}

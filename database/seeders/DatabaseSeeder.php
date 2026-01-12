<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Run all seeders (skip test user creation for production)
        $this->call([
            ProgramSeeder::class,
            EventSeeder::class,
            TestimonialSeeder::class,
            PartnerSchoolSeeder::class,
            GallerySeeder::class,
            PostSeeder::class,
        ]);
    }
}

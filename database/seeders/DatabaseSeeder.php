<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminSeeder::class,
            TeacherSeeder::class,
            AboutSeeder::class,
            SliderSeeder::class,
            MessageSeeder::class,
        ]);
    }
}

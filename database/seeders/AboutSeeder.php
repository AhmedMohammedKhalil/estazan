<?php

namespace Database\Seeders;

use App\Models\Abouts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA');

        Abouts::create([
            'title' => 'من نحن',
            'heading' => 'من نحن',
            'content' => $faker->paragraph,
        ]);
    }
}

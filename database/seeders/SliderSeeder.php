<?php

namespace Database\Seeders;

use App\Models\Sliders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA');
        Sliders::create([
            'title' => 'عنوان 1',
            'content' => $faker->sentence(10),
        ]);

        Sliders::create([
            'title' => 'عنوان 2',
            'content' => $faker->sentence(10),
        ]);

        Sliders::create([
            'title' => 'عنوان 3',
            'content' => $faker->sentence(10),
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('ar_SA');

        Teacher::create([
            'name' => $faker->name,
            'email' => 'Teacher1@estethan.com',
            'phone' => $faker->numerify('965#####'),
            'civil_number' => $faker->numerify('############'),
            'password' => Hash::make('password'),

        ]);

        Teacher::create([
            'name' => $faker->name,
            'email' => 'Teacher2@estethan.com',
            'phone' => $faker->numerify('965#####'),
            'civil_number' => $faker->numerify('############'),
            'password' => Hash::make('password'),

        ]);


        Teacher::create([
            'name' => $faker->name,
            'email' => 'Teacher3@estethan.com',
            'phone' => $faker->numerify('965#####'),
            'civil_number' => $faker->numerify('############'),
            'password' => Hash::make('password'),

        ]);
    }
}

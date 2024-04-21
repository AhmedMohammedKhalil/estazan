<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('ar_SA');

        Admin::create([
            'name' => 'ادمن',
            'email' => 'admin@estezan.com',
            'civil_number' => $faker->numerify('############'),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password

        ]);

    }
}

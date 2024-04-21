<?php

namespace Database\Seeders;

use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('ar_SA');
        Message::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->text,
        ]);

        Message::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->text,
        ]);

        Message::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->text,
        ]);

        Message::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->text,
        ]);

        Message::create([
            'name' => $faker->name,
            'email' => $faker->email,
            'message' => $faker->text,
        ]);
    }
}

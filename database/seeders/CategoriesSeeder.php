<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            \DB::table('categories')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->paragraph,
                'created_at' => now(),
            ]);
        }
    }
}

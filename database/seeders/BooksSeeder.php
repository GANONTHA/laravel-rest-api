<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'description' => $faker->paragraph,
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::table('products')->truncate();

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence(2);
            DB::table("products")->insert([
                'title' => Str::title($title),
                'slug' => Str::slug($title),
                'description' => $faker->sentence(20),
                'price' => $faker->randomFloat(3,1,10)
            ]);
        }


    }
}

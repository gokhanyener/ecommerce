<?php

namespace Database\Seeders;

use App\Models\ProductDetail;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
         DB::table('products')->truncate();
        ProductDetail::truncate();

        for ($i = 0; $i < 50; $i++) {
            $title = $faker->sentence(2);
            $product = Product::create([
                'title' => Str::title($title),
                'slug' => Str::slug($title),
                'description' => $faker->sentence(20),
                'price' => $faker->randomFloat(3, 1, 10)
            ]);

            $product->productDetail()->create([
                'featured_product' => (string)rand(0,1),
                'latest_product' => (string)rand(0,1),
                'slider_product' => (string)rand(0,1),
                'opportunity_product' => (string)rand(0,1),
            ]);

        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}

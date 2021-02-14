<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = DB::table("categories")->insertGetId(['title' => 'ELECTRONICS', 'slug' => 'electronics']);
        DB::table("categories")->insert(['title' => 'Cameras', 'slug' => 'cameras', 'up_id' => $id]);
        DB::table("categories")->insert(['title' => 'Computers & Tablets & Laptop', 'slug' => 'computer', 'up_id' => $id]);
        DB::table("categories")->insert(['title' => 'Mobile Phone', 'slug' => 'mobile-phone', 'up_id' => $id]);
        DB::table("categories")->insert(['title' => 'Sound & Vision', 'slug' => 'sound-vision', 'up_id' => $id]);
        $id_clothes = DB::table("categories")->insertGetId(['title' => 'CLOTHES ', 'slug' => 'clothes']);
        DB::table("categories")->insert(['title' => 'Womens Clothing', 'slug' => 'women-clothing', 'up_id' => $id_clothes]);
        DB::table("categories")->insert(['title' => 'Mans Clothing', 'slug' => 'man-clothing', 'up_id' => $id_clothes]);
        $id_food = DB::table("categories")->insertGetId(['title' => 'FOOD AND BEVERAGES ', 'slug' => 'food-and-beverages']);
        DB::table("categories")->insert(['title' => 'FOODs ', 'slug' => 'food-and-bev', 'up_id' => $id_food]);
        DB::table("categories")->insert(['title' => 'HEALTHY & BEAUTY ', 'slug' => 'healthy-beauty']);
        DB::table("categories")->insert(['title' => 'SPORTS & LEISURE', 'slug' => 'sports-leisure']);
        DB::table("categories")->insert(['title' => 'BOOKS & ENTERTAINMENTS', 'slug' => 'books-entertainments']);
    }
}

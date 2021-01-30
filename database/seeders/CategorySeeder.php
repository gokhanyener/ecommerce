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
        DB::table("categories")->insert(['title'=>'ELECTRONICS','slug'=>'electronics']);
        DB::table("categories")->insert(['title'=>'CLOTHES ','slug'=>'clothes']);
        DB::table("categories")->insert(['title'=>'FOOD AND BEVERAGES ','slug'=>'food-and-beverages']);
        DB::table("categories")->insert(['title'=>'HEALTHY & BEAUTY ','slug'=>'healthy-beauty']);
        DB::table("categories")->insert(['title'=>'SPORTS & LEISURE','slug'=>'sports-leisure']);
        DB::table("categories")->insert(['title'=>'BOOKS & ENTERTAINMENTS','slug'=>'books-entertainments']);
    }
}

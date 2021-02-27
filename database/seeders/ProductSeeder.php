<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $title = Str::random(10).' '. Str::random(10) ;
        DB::table("products")->insert([
            'title'=> Str::title($title),
            'slug'=> Str::slug($title),
            'content'=>'lorem ipsum',
            'price'=> rand(10,1000)/10,
        ]);
    }
}

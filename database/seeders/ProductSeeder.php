<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        DB::table("products")->insert([
            'title'=>'Gömlek',
            'slug'=>'gomlek',
            'content'=>'lorem ipsum',
            'price'=>'50',
        ]);
    }
}

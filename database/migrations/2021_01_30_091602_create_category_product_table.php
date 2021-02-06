<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id')->index();
            $table->bigInteger('product_id');
           // $table->timestamps();

      //      $table->foreign('category_id')->references('id')->on('category')->cascadeOnDelete();
      //      $table->foreign('product_id')->references('id')->on('product')->cascadeOnDelete();
        });
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}

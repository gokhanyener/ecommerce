<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('slug',255);
           // $table->unsignedInteger('stock');
            $table->unsignedDouble('price')->nullable();
           // $table->enum('is_active',[0,1])->default(1);
            $table->timestamps();


          //  $table->timestamp('olusturma_tarihi');
          //  $table->timestamp('guncelleme_tarihi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');


Route::view('/category','category')->name('category');;
Route::view('/product','product')->name('product');
Route::view('/basket','basket')->name('basket');



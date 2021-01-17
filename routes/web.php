<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');


Route::view('/category','front.category')->name('category');
Route::view('/product','front.product')->name('product');
Route::view('/product/{id}/{slug}','front.product-detail')->name('product_detail');
Route::view('/basket','front.basket')->name('basket');
Route::view('/login','front.auth.login')->name('login');



<?php

use App\Http\Controllers\front\BasketController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\MainController;
use App\Http\Controllers\front\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');
Route::get('/product',[ProductController::class,'product'])->name('product');
Route::get('/category',[CategoryController::class,'category'])->name('category');

Route::get('/basket',[BasketController::class,'basket'])->name('basket');


Route::view('/login','front.auth.login')->name('login');
Route::view('/product/{slug}','front.product-detail')->name('product_detail');





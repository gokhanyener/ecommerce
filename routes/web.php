<?php

use App\Http\Controllers\front\MainController;
use App\Http\Controllers\front\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('', [MainController::class, 'index'])->name('homepage');
Route::get('/product',[ProductController::class,'index'])->name('product');



Route::view('/category','front.category')->name('category');
Route::view('/product/{slug}','front.product-detail')->name('product_detail');
Route::view('/basket','front.basket')->name('basket');
Route::view('/login','front.auth.login')->name('login');
Route::view('/register','front.auth.register')->name('register');
Route::view('/contact','front.contact')->name('contact');



Route::view('/admin/dashboard','admin.layouts.master')->name('admin.master');

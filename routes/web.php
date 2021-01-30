<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\HomePageController;
use App\Http\Controllers\front\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('', [HomePageController::class, 'index'])->name('homepage');
Route::get('/category/{slug}',[CategoryController::class,'index'])->name('category');


Route::get('/product/{slug}',[ProductController::class,'index'])->name('product-detail');


//Route::view('/product/{slug}','front.product-detail')->name('product_detail');

Route::view('/basket','front.basket')->name('basket');
Route::view('/login','front.auth.login')->name('login');
Route::view('/register','front.auth.register')->name('register');
Route::view('/contact','front.contact')->name('contact');



/*Route::view('/admin/dashboard','admin.dashboard')->name('admin.dashboard');
Route::view('/admin/category','admin.category')->name('admin.category');*/

Route::get('/admin/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin.category');

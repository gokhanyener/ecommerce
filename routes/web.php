<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\front\HomePageController;
use App\Http\Controllers\front\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomePageController::class, 'index'])->name('homepage');
Route::get('/category/{slug}', [CategoryController::class, 'index'])->name('category');


Route::get('/product/{slug}', [ProductController::class, 'index'])->name('product-detail');
Route::post('/search', [ProductController::class, 'search'])->name('search');
Route::get('/search', [ProductController::class, 'search'])->name('get.search');
// Route::any('/search',[ProductController::class,'search'])->name('search');


//Route::view('/product/{slug}','front.product-detail')->name('product_detail');

//Route::get('/register',[AuthController::class,'register'])->name('register');
Route::match(['post', 'get'], '/register', [AuthController::class, 'register'])->name('register');
Route::get( '/logout', [AuthController::class, 'logout'])->name('logout');


Route::view('/basket', 'front.basket')->name('basket');
Route::view('/login', 'front.auth.login')->name('login');

Route::view('/contact', 'front.contact')->name('contact');


/*Route::view('/admin/dashboard','admin.dashboard')->name('admin.dashboard');
Route::view('/admin/category','admin.category')->name('admin.category');*/

Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/urun', function () {
    return "Urunadı: " ;
})->name("urun");
Route::get('/urun/{urunadı}', function ($urunadı) {
    return "Urunadı: $urunadı" ;
})->name("urun1");

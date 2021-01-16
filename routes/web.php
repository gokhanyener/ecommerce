<?php

use App\Http\Controllers\IndexController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get('/urun', function () {
    return ['urun' => 'portakal'];
})->name('urun');

Route::get('/urun/{urunadi}/{id}', function ($urunadi, $id) {
    return "Ürün sayısı : $id $urunadi";
})->name('urunSayisi');

Route::get('/urun/{urunadi}/{id?}', function ($urunadi, $id = 1) {
    return "Ürün sayısı : $id $urunadi";
});

Route::get('yonlendir', function () {
    return redirect()->route('urun');
});
Route::get('yonlendir2', function () {
    return redirect()->route('urunSayisi', ['urunadi' => 'Muz', 'id' => 5]);
});

Route::get('page', [IndexController::class, 'index'])->name('page_route');
Route::get('show', [IndexController::class, 'show'])->name('show_route');

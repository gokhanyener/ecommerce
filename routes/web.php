<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\AuthController;

//use App\Http\Controllers\admin\AuthController as AdminController;
use App\Http\Controllers\front\CategoryController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\front\HomePageController;
use App\Http\Controllers\front\ProductController;
use App\Mail\UserRegisterMail;
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
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register-confirm/{activation_code}', [AuthController::class, 'registerConfirm'])
    ->name('register-confirmation');
Route::match(['post', 'get'], 'login', [AuthController::class, 'login'])->name('login');


Route::view('/basket', 'front.basket')->name('basket');
Route::view('/contact', 'front.contact')->name('contact');


/*Route::view('/admin/dashboard','admin.dashboard')->name('admin.dashboard');
Route::view('/admin/category','admin.category')->name('admin.category');*/

Route::group(['prefix' => 'admin', 'namespace' => 'admin'], function () {
    // Route::get('login',[AdminController::class,'login']);
    Route::match(['post', 'get'], 'login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    /* ->middleware('admin');;*/

    Route::group(['prefix' => 'categories'], function () {
        Route::match(['post', 'get'], '/', [AdminCategoryController::class, 'index'])->name('admin.category');
        Route::get('new', [AdminCategoryController::class, 'form'])->name('admin.category.new');
        Route::post('create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
        Route::get('edit/{id}', [AdminCategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('update/{id}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
        Route::get('delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin.category.delete');
    });


});



//Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
/*Route::get('/test-mail', function () {
    return new UserRegisterMail();
});*/

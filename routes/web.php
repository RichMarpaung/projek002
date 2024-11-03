<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MustAdmin;
use App\Models\Product;
use Illuminate\Support\Facades\Route;





Route::get('/', function () {
    return view('landingpage');
})->name('landing');


Route::get('/order/confirmation', [PaymentController::class, 'confirmBooking'])->name('order.confirmation');
Route::post('/order/confirmation', [PaymentController::class, 'confirmBooking'])->name('order.confirmation');


Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authlogin'])->name('authlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', function () {return view('login.registerpage');})->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerstore');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth',Mustadmin::class]);
    //Product Part
    Route::get('/rental',[AdminController::class, 'productlist'])->name('product.list');
    Route::get('/create-rental',[AdminController::class, 'productcreate'])->name('product.create');
    Route::post('/create-rental',[ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}/product',[ProductController::class, 'edit'])->name('product.edit');
    Route::post('/update/{id}/product',[ProductController::class, 'update'])->name('product.update');
    Route::post('/delete/{id}/product',[ProductController::class, 'destroy'])->name('product.delete');
    // USER PART
    Route::get('/user',[UserController::class, 'show'])->name('user.list');
    Route::get('/edit/{id}/user',[UserController::class, 'edit'])->name('user.edit');
    Route::post('/update/{id}/user',[UserController::class, 'update'])->name('user.update');
    Route::post('/delete/{id}/user',[UserController::class, 'destroy'])->name('user.delete');
    Route::get('/create-user',[UserController::class, 'create'])->name('user.create');
    // Route::post('/create-user',[UserController::class, 'storeFromAdmin'])->name('user.upload');
    Route::post('/create-user',[AdminController::class, 'upload'])->name('user.upload');

    //Category Part
    Route::get('/category',[CategoryController::class, 'show'])->name('category.list');
    Route::get('/edit/{id}/category',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}/category',[CategoryController::class, 'update'])->name('category.update');
    Route::post('/delete/{id}/category',[CategoryController::class, 'destroy'])->name('category.delete');
    Route::get('/create-category',[CategoryController::class, 'create'])->name('category.create');
    Route::post('/create-category',[CategoryController::class, 'store'])->name('category.store');
})->middleware(['auth','must_admin']);

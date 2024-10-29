<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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


// Route::get('/cek', function () {
//     return view('paymentpage');
// })->name('order.confirmation');

Route::post('/order/confirmation', [PaymentController::class, 'show'])->name('order.confirmation');



Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authlogin'])->name('authlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', function () {return view('login.registerpage');})->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerstore');
Route::post('/delete/{$id}', [Product::class, 'store'])->name('delete');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth',Mustadmin::class]);
    Route::get('/rental',[AdminController::class, 'productlist'])->name('product.list');
    Route::get('/create-rental',[AdminController::class, 'productcreate'])->name('product.create');
    Route::post('/create-rental',[ProductController::class, 'store'])->name('product.store');
})->middleware(['auth',Mustadmin::class]);

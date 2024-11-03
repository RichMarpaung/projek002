<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\MustAdmin;
use App\Models\Product;
use Illuminate\Support\Facades\Route;




//Landing
Route::get('/', function () {
    return view('landingpage');
})->name('landing');

//Order Part
Route::get('/order/confirmation', [PaymentController::class, 'confirmBooking'])->name('order.confirmation')->middleware(['auth']);
Route::post('/order/confirmation', [PaymentController::class, 'confirmBooking'])->name('order.confirmation')->middleware(['auth']);
Route::post('/order/process', [PaymentController::class, 'store'])->name('order.process')->middleware(['auth']);

//Review Part
Route::get('/rental',[RentalController::class, 'list'])->name('product.list');
Route::get('/detail/{id}', [ProductController::class, 'show'])->name('product.show');

//Auth Part
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authlogin'])->name('authlogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/register', function () {return view('login.registerpage');})->name('register');
Route::post('/register', [UserController::class, 'store'])->name('registerstore');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard')->middleware(['auth','must_admin']);
    //Product Part
    Route::get('/rental',[AdminController::class, 'productlist'])->name('product.list')->middleware(['auth','must_admin']);;
    Route::get('/create-rental',[AdminController::class, 'productcreate'])->name('product.create')->middleware(['auth','must_admin']);
    Route::post('/create-rental',[ProductController::class, 'store'])->name('product.store')->middleware(['auth','must_admin']);
    Route::get('/edit/{id}/product',[ProductController::class, 'edit'])->name('product.edit')->middleware(['auth','must_admin']);
    Route::post('/update/{id}/product',[ProductController::class, 'update'])->name('product.update')->middleware(['auth','must_admin']);
    Route::post('/delete/{id}/product',[ProductController::class, 'destroy'])->name('product.delete')->middleware(['auth','must_admin']);
    // USER PART
    Route::get('/user',[UserController::class, 'show'])->name('user.list')->middleware(['auth','must_admin']);
    Route::get('/edit/{id}/user',[UserController::class, 'edit'])->name('user.edit')->middleware(['auth','must_admin']);
    Route::post('/update/{id}/user',[UserController::class, 'update'])->name('user.update')->middleware(['auth','must_admin']);
    Route::post('/delete/{id}/user',[UserController::class, 'destroy'])->name('user.delete')->middleware(['auth','must_admin']);
    Route::get('/create-user',[UserController::class, 'create'])->name('user.create')->middleware(['auth','must_admin']);
    // Route::post('/create-user',[UserController::class, 'storeFromAdmin'])->name('user.upload');
    Route::post('/create-user',[AdminController::class, 'upload'])->name('user.upload')->middleware(['auth','must_admin']);

    //Category Part
    Route::get('/category',[CategoryController::class, 'show'])->name('category.list')->middleware(['auth','must_admin']);
    Route::get('/edit/{id}/category',[CategoryController::class, 'edit'])->name('category.edit')->middleware(['auth','must_admin']);
    Route::post('/update/{id}/category',[CategoryController::class, 'update'])->name('category.update')->middleware(['auth','must_admin']);
    Route::post('/delete/{id}/category',[CategoryController::class, 'destroy'])->name('category.delete')->middleware(['auth','must_admin']);
    Route::get('/create-category',[CategoryController::class, 'create'])->name('category.create')->middleware(['auth','must_admin']);
    Route::post('/create-category',[CategoryController::class, 'store'])->name('category.store')->middleware(['auth','must_admin']);

    //Reservasi Part
    Route::get('/reservasi',[ReservationController::class, 'show'])->name('reservasi.list')->middleware(['auth','must_admin']);
    Route::get('/edit/{id}/reservation',[ReservationController::class, 'edit'])->name('reservation.edit')->middleware(['auth','must_admin']);
    Route::post('/update/{id}/reservation',[ReservationController::class, 'update'])->name('reservation.update')->middleware(['auth','must_admin']);
    Route::post('/delete/{id}/reservation',[ReservationController::class, 'destroy'])->name('reservation.delete')->middleware(['auth','must_admin']);

    //Peyment Part
    Route::get('/payment',[PaymentController::class, 'show'])->name('payment.show')->middleware(['auth','must_admin']);
})->middleware(['auth','must_admin']);

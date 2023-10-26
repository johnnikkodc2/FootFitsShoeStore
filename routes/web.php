<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootFitsController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/', [FootFitsController::class, 'index'])->name('index');
Route::get('/about', [FootFitsController::class, 'aboutus'])->name('about');
Route::get('/login', [FootFitsController::class, 'login'])->name('login');
Route::get('/bestseller', [FootFitsController::class, 'bestSeller'])->name('bestSeller');
Route::get('/manage-account', [FootFitsController::class, 'manageAccount'])->name('manageAccount');
Route::get('/manage-customers', [FootFitsController::class, 'manageCustomers'])->name('manageCustomers');
Route::get('/manage-orders', [FootFitsController::class, 'manageOrders'])->name('manageOrders');
Route::get('/manage-products', [FootFitsController::class, 'manageProducts'])->name('manageProducts');
Route::get('/manage-product-list', [FootFitsController::class, 'manageProductList'])->name('manageProductList');
Route::get('/order', [FootFitsController::class, 'order'])->name('order');
Route::get('/register', [FootFitsController::class, 'register'])->name('register');
Route::get('/shop', [FootFitsController::class, 'shop'])->name('shop');

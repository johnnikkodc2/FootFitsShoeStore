<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootFitsController;
use App\Http\Controllers\ProductsController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [FootFitsController::class, 'index'])->name('index');
});
Route::get('/', [FootFitsController::class, 'index'])->name('index');
Route::get('/about', [FootFitsController::class, 'about'])->name('about');
Route::get('/login', [FootFitsController::class, 'login'])->name('login');
Route::get('/register', [FootFitsController::class, 'register'])->name('register');
Route::get('/bestseller', [FootFitsController::class, 'bestSeller'])->name('bestSeller');
Route::get('/order', [FootFitsController::class, 'order'])->name('order');
Route::get('/register', [FootFitsController::class, 'register'])->name('register');
Route::get('/shop', [FootFitsController::class, 'shop'])->name('shop');
Route::get('/shop', [ProductsController::class, 'index2'])->name('shop');

Route::get('/admin', [FootFitsController::class, 'admin'])->name('admin');
Route::get('/adminLogin', [FootFitsController::class, 'adminLogin'])->name('adminLogin');
Route::get('/manageaccount', [FootFitsController::class, 'manageAccount'])->name('manageAccount');
Route::get('/manageCustomers', [FootFitsController::class, 'manageCustomers'])->name('manageCustomers');
Route::get('/manageOrders', [FootFitsController::class, 'manageOrders'])->name('manageOrders');
Route::get('/manageProductList', [FootFitsController::class, 'manageProductList'])->name('manageProductList');

Route::get('/manageproducts', [ProductsController::class, 'index'])->name('AllProducts');
Route::post('/manageproducts', [ProductsController::class, 'store'])->name('AllProducts');
Route::get('/manageproducts/delete/{id}', [ProductsController::class, 'Delete'])->name('delete.category');
Route::get('/editproducts/edit/{id}', [ProductsController::class, 'Edit']);
Route::post('/editProducts/update/{id}', [ProductsController::class, 'Update'])->name('update.category');
Route::get('/productDetails/details/{id}', [ProductsController::class, 'Details']);




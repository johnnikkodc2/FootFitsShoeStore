<?php

use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FootFitsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductsController;
use App\Http\Controllers\ProductsController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::check() && Auth::user()->type == "customer") {
            return app(FootFitsController::class)->index();
        } elseif (Auth::check() && Auth::user()->type == "admin") {
            return app(FootFitsController::class)->admin();
        }
    })->name('dashboard');
});
Route::get('/', [FootFitsController::class, 'index'])->name('index');
Route::get('/about', [FootFitsController::class, 'about'])->name('about');
Route::get('/faq', [FootFitsController::class, 'faq'])->name('faq');
Route::get('/login', [FootFitsController::class, 'login'])->name('login');
Route::get('/register', [FootFitsController::class, 'register'])->name('register');
Route::get('/bestseller', [FootFitsController::class, 'bestSeller'])->name('bestSeller');
Route::get('/order', [FootFitsController::class, 'order'])->name('order');
Route::get('/register', [FootFitsController::class, 'register'])->name('register');
Route::get('/shop', [FootFitsController::class, 'shop'])->name('shop');
Route::get('/shop', [ProductsController::class, 'index2'])->name('shop');
Route::get('/cart', [FootFitsController::class, 'cart'])->name('cart');
Route::get('/checkout', [FootFitsController::class, 'checkout'])->name('checkout');
Route::get('/receipt/{id}', [FootFitsController::class, 'receipt'])->name('receipt');
Route::get('/myorders', [FootFitsController::class, 'myorders'])->name('myorders');
Route::get('/profile', [FootFitsController::class, 'profile'])->name('profile');

Route::get('/admin', [FootFitsController::class, 'admin'])->name('admin');
Route::get('/adminLogin', [FootFitsController::class, 'adminLogin'])->name('adminLogin');
Route::get('/adminRegister', [FootFitsController::class, 'adminRegister'])->name('adminRegister');
Route::get('/manageaccount', [FootFitsController::class, 'manageAccount'])->name('manageAccount');
Route::get('/manageCustomers', [FootFitsController::class, 'manageCustomers'])->name('manageCustomers');
Route::get('/manageOrders', [FootFitsController::class, 'manageOrders'])->name('manageOrders');
Route::get('/manageProductList', [FootFitsController::class, 'manageProductList'])->name('manageProductList');

Route::get('/manageproducts', [ProductsController::class, 'index'])->name('AllProducts');
Route::post('/manageproducts', [ProductsController::class, 'store'])->name('AllProducts');

Route::get('/manageproducts/delete/{id}', [ProductsController::class, 'Delete'])->name('delete.product');
Route::get('/editproducts/edit/{id}', [ProductsController::class, 'Edit']);
Route::post('/editProducts/update/{id}', [ProductsController::class, 'Update'])->name('update.product');
Route::get('/productDetails/details/{id}', [ProductsController::class, 'Details']);
Route::get('/cart/restore/{id}', [CartController::class, 'restore'])->name('cart.restore');
Route::get('/cart/forceDelete/{id}', [CartController::class, 'ForceDelete'])->name('forceDelete.cart');

Route::post('/productDetails/add_cart/{id}', [CartController::class, 'AddCart'])->name('add.cart');
Route::get('/productDetails/delete_cart/{id}', [CartController::class, 'DeleteCart']);
Route::get('/productDetails/edit_cart/{id}', [CartController::class, 'EditCart']);
Route::get('/productDetails/update_cart/{id}/{quantity}', [CartController::class, 'UpdateCart']);
Route::post('/productDetails/checkout_cart', [CartController::class, 'Checkout'])->name('checkout.update_cart');

Route::post('/checkout/create_order', [OrderController::class, 'CreateOrder'])->name('create_order');
Route::get('/myorders/delete_order/{id}', [OrderController::class, 'DeleteOrder']);
Route::get('/editorderstatus/edit/{id}', [OrderController::class, 'EditOrder']);
Route::post('editOrders/update/{id}', [OrderController::class, 'UpdateOrder']);


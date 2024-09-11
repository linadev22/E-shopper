<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Category.index');
});

Route::get('/index', [CategoryController::class, 'index'])->name('index');
Route::get('/login', [CategoryController::class, 'login'])->name('login');
Route::get('/cart', [CategoryController::class, 'cart'])->name('cart');
Route::get('/checkout', [CategoryController::class, 'checkout'])->name('checkout');
Route::get('/product', [CategoryController::class, 'product'])->name('product');
Route::get('/product_detail', [CategoryController::class, 'product_detail'])->name('product_detail');
Route::get('/contact_us', [CategoryController::class, 'contact_us'])->name('contact_us');
Route::get('/blog', [CategoryController::class, 'blog'])->name('blog');








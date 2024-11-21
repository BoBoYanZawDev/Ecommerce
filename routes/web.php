<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class ,'index']);

Route::get('/products/{productId}', [ProductDetailController::class,'detail']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/productCreate', function () {
    return view('productCreate');
});
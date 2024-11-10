<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/productDetail', function () {
    return view('productDetail');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/productCreate', function () {
    return view('productCreate');
});
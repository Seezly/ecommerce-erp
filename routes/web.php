<?php

use Illuminate\Support\Facades\Route;

Route::domain('admin.localhost')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.home');

    Route::get('/login', function () {
        return view('admin.index');
    })->name('admin.home');

    Route::get('/register', function () {
        return view('admin.index');
    })->name('admin.home');
});

Route::domain('{business}.localhost')->group(function () {
    Route::get('/', function () {
        return view('business.index');
    })->name('business.home');

    Route::view('/login', function () {
        return view('livewire.auth.login');
    })->name('business.login');

    Route::view('/register', function () {
        return view('livewire.auth.register');
    })->name('business.register');

    Route::view('/products', function () {
        return view('business.products.index');
    })->name('business.products');

    Route::view('/checkout', function () {
        return view('business.checkout.index');
    })->name('business.checkout');

    Route::view('/product/{product}', function () {
        return view('business.products.single-product');
    })->name('business.product');

    Route::view('/dashboard', function () {
        return view('business.user.dashboard');
    })->name('business.dashboard');

    Route::view('/favorites', function () {
        return view('business.user.favorites');
    })->name('business.favorites');

    Route::view('/accounts', function () {
        return view('business.user.accounts');
    })->name('business.accounts');

    Route::view('/orders', function () {
        return view('business.user.orders');
    })->name('business.orders');

    Route::view('/user-info', function () {
        return view('business.user.settings.user-info');
    })->name('business.user-info');
    Route::view('/user-security', function () {
        return view('business.user.settings.user-security');
    })->name('business.user-security');
});

require __DIR__ . '/settings.php';

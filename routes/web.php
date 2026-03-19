<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/products', 'products')->name('products');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/product/{product}', 'product')->name('product');

Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/favorites', 'favorites')->name('favorites');
Route::view('/accounts', 'accounts')->name('accounts');
Route::view('/orders', 'orders')->name('orders');
Route::view('/user-info', 'user-info')->name('user-info');
Route::view('/user-security', 'user-security')->name('user-security');

Route::view('/admin', 'admin.index')->name('admin');

require __DIR__ . '/settings.php';

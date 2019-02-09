<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.home');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/login-register', function () {
    return view('layouts.login-register');
});
Route::get('/wishlist', function () {
    return view('layouts.wishlist');
});
Route::get('/product-details', function () {
    return view('layouts.product-details');
});
Route::get('/cart', function () {
    return view('layouts.cart');
});
Route::get('/checkout', function () {
    return view('layouts.checkout');
});
Route::get('/blog-details', function () {
    return view('layouts.blog-details');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

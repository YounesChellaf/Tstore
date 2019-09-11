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
Route::group(['prefix' => '/'], function () {
    Route::get('','ProductController@index');
    Route::get('all-products','ProductController@getAllProducts');
    Route::get('{type}-products','ProductController@getProducts');
    Route::get('{type}-delivering','ProductController@getDeliveringProducts');
    Route::get('{type}-payment','PaymentController@PaymentView');
    Route::get('filter-price-{type}','PriceController@PriceFilterView');
});

Route::group(['prefix' => '/blog-details/'], function () {
    Route::get('{id}','BlogController@show');
    Route::post('{id}','BlogController@create');
    Route::post('reply/{id}','BlogController@reply');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/checkout','HomeController@Checkout');
Route::get('/contact','HomeController@Contact');
Route::get('/about','HomeController@About');
Route::post('/message','HomeController@SendMessage');
Route::get('/wishlist','CartController@WishlistIndex');
Route::get('/wishlist/{id}','CartController@AddWishlist');
Route::get('/product-details/{id}','ProductController@product_details');
Route::get('/category/{id}','ProductController@category_product');
Route::get('/cart/{id}','CartController@AddProductList');

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/{service}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{service}/callback', 'Auth\LoginController@handleProviderCallback');

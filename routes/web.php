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
    Route::get('', function () {
        $Product= App\Product::orderBy('created_at','desc')->take(12)->get();
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('all-products', function () {
        $Product= App\Product::all();
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('new-products', function () {
        $Product= App\Product::all()->where('state','option1');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('used-products', function () {
        $Product= App\Product::all()->where('state','option2');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('selling-products', function () {
        $Product= App\Product::all()->where('state','option3');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('exchange-products', function () {
        $Product= App\Product::all()->where('state','option4');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('express-delivering', function () {
        $Product= App\Product::all()->where('delivery_method','option1');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('normal-delivering', function () {
        $Product= App\Product::all()->where('delivery_method','option2');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('cash-payment', function () {
        $Product= App\Product::all()->where('payment_method','option1');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('e-payment', function () {
        $Product= App\Product::all()->where('payment_method','option2');
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('filter-price-one', function () {
        $Product= App\Product::all()->where('price','<',50);
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('filter-price-two', function () {
        $Product= App\Product::all()->where('price','>=',50)->where('price','<',200);
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('filter-price-three', function () {
        $Product= App\Product::all()->where('price','>=',200)->where('price','<',500);
        return view('layouts.home')->with('Product',$Product);
    });
    Route::get('filter-price-four', function () {
        $Product= App\Product::all()->where('price','>=',500);
        return view('layouts.home')->with('Product',$Product);
    });

});
Route::get('/contact', function () {
    $info = App\Info::find(1);
    return view('layouts.contact')->with('info',$info);
});

Route::get('/wishlist', function () {
    return view('layouts.wishlist');
});
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/product-details/{id}','ProductController@product_details');
Route::get('/category/{id}','ProductController@category_product');
Route::get('/cart', function () {
    return view('layouts.cart');
});
Route::get('/checkout', function () {
    return view('layouts.checkout');
});
Route::get('/blog-details/{id}','BlogController@show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleProviderCallback');

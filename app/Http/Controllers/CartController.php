<?php

namespace App\Http\Controllers;
use App\Product;
use Symfony\Component\HttpFoundation\Cookie;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddProductList($id){
        $product = Product::find($id);
        session(['product'=>$product]);
    }
    public function AddWishlist($id){
        $product = Product::find($id);
        Cookie('product','sdfdsfds',10);
        dd(Cookie('product'));
    }
}

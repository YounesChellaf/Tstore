<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Cookie;

use Illuminate\Http\Request;

class CartController extends Controller
{

    public function WishlistIndex(){
        return view('layouts.wishlist');
    }
    public function AddProductList($id){
        $product = Product::find($id);
        session(['product'=>$product]);
    }
    public function AddWishlist($id,Request $request){
        $product = Product::find($id);
        $request->cookie('name', 'your cookie', 100);
        dd($request->cookie('name')) ;
     }
}

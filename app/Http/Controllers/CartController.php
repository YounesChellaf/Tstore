<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function AddProductList($id){
        $product = Product::find($id);
        session(['product'=>$product]);
    }
}

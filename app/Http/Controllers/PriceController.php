<?php

namespace App\Http\Controllers;


use App\Product;

class PriceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PriceFilterView($type){
        switch ($type){
            case 'one':
                $Product= Product::all()->where('price','<',50);
                break;
            case 'two':
                $Product= Product::all()->where('price','>=',50)->where('price','<',200);
                break;
            case 'three':
                $Product= Product::all()->where('price','>=',200)->where('price','<',500);
                break;
            case 'four':
                $Product= Product::all()->where('price','>=',500);
             break;
        }
        return view('layouts.home')->with('Product',$Product);

    }
}

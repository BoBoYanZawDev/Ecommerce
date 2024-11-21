<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    function detail($productId) {
        $latestProducts = Product::orderBy('created_at','desc')->take(3)->get();
        return view('productDetail',[
            'product'=> Product::find($productId),
            'latestProducts'=>$latestProducts
        ]);
    }
}

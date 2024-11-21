<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index() {
        $products = Product::where('name','LIKE', '%'.request('search').'%')->get();
        return view('home' ,[
            'products'=> $products
        ]);
    }
}

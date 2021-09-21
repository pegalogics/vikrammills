<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function index($id){
        $product = Product::find($id)->first();
        return view('productDetails', ['product' => $product]);
        // new line
        
    }
}

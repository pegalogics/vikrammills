<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Testimonial;
class UserController extends Controller
{
    public function index(){
        
        $products = Product::all();
        $testimonials = Testimonial::all();
        return view('index2',['products' => $products,'testimonials' => $testimonials]);
    }
}

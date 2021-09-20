<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $products = Product::all();
        $testimonials = Testimonial::all();
        $home = Home::first();
        $return = [
            'slider1' => $home->slider1,
            'slider2' => $home->slider2,
            'slider3' => $home->slider3,
            'about_content' => $home->about_content,
            'product_title' => $home->product_title,
            'product_description' => $home->product_description,
            'benefits_description' => $home->benefits_description,
            'testimonial_description' => $home->testimonial_description,
            'products' => Product::all(),
            'testimonials' => testimonial::all(),
        ];
        return view('index2',$return);
    }
}

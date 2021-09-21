<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{    
    public function adminlogout(Request $request) {
        Session::forget('admin');
        return back();
    }
}

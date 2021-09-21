<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $return = [
            'count_orders' => Order::count(),
            'count_products' => Product::count(),
            'count_categories' => Category::count(),
            'count_customers' => User::count(),
        ];
        return view('admin.dashboard',$return);
    }
}

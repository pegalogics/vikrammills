<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{    
    public function addProducts(Request $request){
        if ($request->isMethod('post')) {
            $Product = new Product();
            
            //save file
            $file = $request->file('file');
            
            $file_path = $file->move(public_path('uploads/products'), $file->getClientOriginalName());

            $Product->pic = $file->getClientOriginalName();
            $Product->name = $request->name;
            $Product->description = $request->description;
            $Product->more_description = $request->more_description;
            $Product->quantity = $request->quantity;
            $Product->price = $request->price;
            $Product->category = $request->category;
            $Product->weight = $request->weight;
            $Product->discount = $request->discount;
            $Product->status = $request->status;
            $Product->save();

        } 
        return view('admin.products.add-new',['products' => Product::all(), 'categories' => Category::all()]);

    }
    
    public function products(Request $request){
        if ($request->isMethod('post')) {
            $Product = new Product();
            
            //save file
            $file = $request->file('file');
            $file_path = $file->move(public_path('uploads/products'), $file->getClientOriginalName());

            $Product->pic = $file->getClientOriginalName();
            $Product->name = $request->name;
            $Product->description = $request->description;
                     
            $Product->more_description = $request->more_description;
            $Product->quantity = $request->quantity;
            $Product->price = $request->price;
            $Product->category = $request->category;
            $Product->weight = $request->weight;
            $Product->discount = $request->discount;
            $Product->status = $request->status;
            $Product->save();

        } 
        return view('admin.products.index',['products' => Product::all(), 'categories' => Category::all()]);

    }
    public function productEdit(Request $request, $id){
        $file = $request->file('file');
        if ($file !== null) {
            $file_path = $file->move(public_path('uploads/products'), $file->getClientOriginalName());
        }
        $product = Product::findOrNew($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->more_description = $request->more_description;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->category = $request->category;
        $product->weight = $request->weight;
        $product->discount = $request->discount;
        $product->status = $request->status;
        if (!empty($file_path)) {
                $product->pic = $file->getClientOriginalName();        
            
        }
        $product->save();

        Session::flash('success', 'Product updated successfully');
        return view('admin.products.index',['products' => Product::all(), 'categories' => Category::all()]);


    }
    public function productDelete($id){
        //delete product
        $product = Product::find($id);
        $product->delete();
        Session::flash('success', 'Product deleted successfully');
        return view('admin.products.index',['products' => Product::all(), 'categories' => Category::all()]);


    }

    

    public function adminlogout(Request $request) {
        Session::forget('admin');
        return back();
    }
}

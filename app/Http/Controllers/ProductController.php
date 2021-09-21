<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Session;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //  view product
    public function index()
    {
        return view('admin.products.index',['products' => Product::all(), 'categories' => Category::all()]);

    }

    // add product 
    public function add_view(){
        return view('admin.products.add-new',['products' => Product::all(), 'categories' => Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->isMethod('post')) {
            $Product = new Product();
            
            //when new product added
            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $file_path = $file->move(public_path('uploads/products'), $file->getClientOriginalName());
                 $Product->pic = $file->getClientOriginalName();
            }

            //when versoin of product store 
            // when product edited
            else{
                $Product->pic  = $request->pic;
            }
           
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('success', 'Product deleted successfully');
        return back();
    }
}

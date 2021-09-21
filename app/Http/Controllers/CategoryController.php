<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use DB;
use Session;
class CategoryController extends Controller
{
    public function view(){
        return view('admin.category',['categories'=> Category::all()]);
    }
    
    public function create(Request $request){
        //insert into category
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'Category created successfully');
        return redirect('/admin/category');
    }

    public function edit(Request $request, $id){
        $category = Category::find($id);
        $category->name = $request->name;
        $category->save();
        Session::flash('success', 'Category Edit Successfully');
        return redirect('admin/category');
    }
    public function delete($id){
        $category = Category::find($id);
        $category->delete();
        Session::flash('success', 'Category deleted successfully');
        return redirect('/admin/category');      
    }
}

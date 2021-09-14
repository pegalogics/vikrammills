<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Session;    
class TestimonialController extends Controller
{
    public function view(){
        return view('admin.testimonial',['testimonials'=> Testimonial::all()]);
    }
    
    public function create(Request $request){
        //insert into testimonial

        $testimonial = new Testimonial;
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->save();
        Session::flash('success', 'Testimonial created successfully');
        return redirect('/admin/testimonial');
    }

    public function edit(Request $request, $id){
        $testimonial = Testimonial::find($id);
        $testimonial->name = $request->name;
        $testimonial->message = $request->message;
        $testimonial->save();
        Session::flash('success', 'Testimonial Edit Successfully');
        return redirect('admin/testimonial');
    }
    public function delete($id){
        $testimonial = Testimonial::find($id);
        $testimonial->delete();
        Session::flash('success', 'Testimonial deleted successfully');
        return redirect('/admin/testimonial');      
    }
}

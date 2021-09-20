<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\About;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        ];
        return view('admin.pages.home', $return);
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
        $home = Home::updateOrCreate(['id' => 1], $request->all());
        $home = $this->saveFiles($request, $home);
        $home->save();
        // redirect with message
        return redirect()->route('home.index')->with('success','home page updated');   
    }
     public function saveFiles($request, $home) {
        if ($request->hasFile('slider1')) {
            $file = $request->file('slider1');
            $filename = 'slider1.jpg';
            $file->move(public_path('uploads/slider'), $filename);
            $home->slider1 = $filename;
        }
        if ($request->hasFile('slider2')) {
            $file = $request->file('slider2');
            $filename = 'slider2.jpg';
            $file->move(public_path('uploads/slider'), $filename);
            $home->slider2 = $filename;
        }
        if ($request->hasFile('slider3')) {
            $file = $request->file('slider3');
            $filename = 'slider3.jpg';
            $file->move(public_path('uploads/slider'), $filename);
            $home->slider3 = $filename;
        }
        return $home;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}

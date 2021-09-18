<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_customers()
    {
            $about = About::first();
            return view('about', ['about' => $about]);
    }
    // admin panel index
    public function index()
    {
        $about = About::first();
        return view('admin.pages.about', ['about' => $about]);
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
        $about = About::updateOrCreate(['id' => 1], $request->all());
        $about = $this->saveFiles($request, $about);
        $about->save();
        // redirect with message
        return redirect()->route('about.index')->with('success','About page updated');

    }

    public function saveFiles($request, $about) {
        //save file 
        if ($request->hasFile('about_banner')) {
            $file = $request->file('about_banner');
            $filename = 'about_banner.jpg';
            $file->move('public/img/about', $filename);
            $about->about_banner = $filename;
            
        }
        if($request->hasFile('about_pic')){
            $file = $request->file('about_pic');
            $filename = 'about_pic.jpg';
            $file->move('public/img/about', $filename);
            $about->about_pic = $filename;
        }
        if ($request->hasFile('our_history_pic')) {
            $file = $request->file('our_history_pic');
            $filename = 'our_history_pic.jpg';
            $file->move('public/img/about', $filename);
            $about->our_history_pic = $filename;
        }
        if ($request->hasFile('brand_pic')) {
            $file = $request->file('brand_pic');
            $filename = 'brand_pic.jpg';
            $file->move('public/img/about', $filename);
            $about->brand_pic = $filename;
        }
        if ($request->hasFile('pic_after_why_choose_us_content')) {
            $file = $request->file('pic_after_why_choose_us_content');
            $filename = 'pic_after_why_choose_us_content.jpg';
            $file->move('public/img/about', $filename);
            $about->pic_after_why_choose_us_content = $filename;
        }
        if ($request->hasFile('our_vision_background')) {
            $file = $request->file('our_vision_background');
            $filename = 'our_vision_background.jpg';
            $file->move('public/img/about', $filename);
            $about->our_vision_background = $filename;
        }
        if ($request->hasFile('our_mission_background')) {
            $file = $request->file('our_mission_background');
            $filename = 'our_mission_background.jpg';
            $file->move('public/img/about', $filename);
            $about->our_mission_background = $filename;
        }
        if ($request->hasFile('our_management_pic')) {
            $file = $request->file('our_management_pic');
            $filename = 'our_management_pic.jpg';
            $file->move('public/img/about', $filename);
            $about->our_management_pic = $filename;
        }
        return $about;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

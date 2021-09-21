<?php

namespace App\Http\Controllers;

use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Models\ContactSubmits;

class ContactPageController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        
    public function index_customer()
    {
        return view('contact',['contactPage' => ContactPage::first()]);
    }
    public function index()
    {
        return view('admin.pages.contact', ['contactPage' => ContactPage::first()]);
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
        $contactPage = ContactPage::updateOrCreate(['id' => 1], $request->all());
        $contactPage->save();
        return back()->with('success', 'Successfully updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactPage $contactPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactPage $contactPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  $id
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContactPage  $contactPage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactPage $contactPage)
    {
        //
    }
}

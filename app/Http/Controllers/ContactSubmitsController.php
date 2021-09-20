<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactSubmits;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Session;
class ContactSubmitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //sent mail and save to contact_submits table
    public function mail(Request $request){
         
          Mail::to($request->email)
                    ->send(new ContactMail());  
         
         $contact = new ContactSubmits();
         $contact->fill($request->all());
         $contact->save();

         Session::flash('success','Mail sent successfully');
         
         return back();
    }

    // admin( view contact record submitted by customers) 
    public function index(){
        return view('admin.contact',['contacts' => ContactSubmits::all()]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  $id
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
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $contactSubmits = ContactSubmits::find($id);
        $contactSubmits->fill($request->all());
        $contactSubmits->save();
        Session::flash('success', 'Contact updated');
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        //delete 
        $contactSubmits = ContactSubmits::find($id);
        $contactSubmits->delete();
        Session::flash('success', 'Contact deleted');
        return back();
    }
}

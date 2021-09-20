<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // for viewing on admin panel
    public function index()
    {
        return view('admin.customer',['customers' => User::all()]);

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
        if(isset($request->firstname)){
            $request->name = $request->firstname . ' ' . $request->lastname;
        }

        //validation 
        $user = User::find($id);
        $current_email = $user->email;
        if ($request->email != $current_email) {
            $this->validate($request, [
            'email' => 'unique:users',
        ]);
        }

        //update customer
        $customer = User::find($id);
        //upload file(photo)
        if ($request->file('file') != null) {
            $request->file('file')
                ->move(public_path('uploads'), $request->file('file')
                ->getClientOriginalName());
            $customer->pic = $request->file('file')->getClientOriginalName();
        }

        $customer->name = $request->name;
        if ($request->email != $current_email) {
            $customer->email = $request->email;
        }
        else{
            $customer->email = $current_email;
        }
        
        $customer->name = $request->name;
        $customer->mobile = $request->mobile;
        $customer->address = $request->address;
        $customer->city  = $request->city;
        $customer->state = $request->state;
        $customer->country = $request->country;
        $customer->zip = $request->zip;
        $customer->ip =  $request->ip;
        $customer->status = $request->status;
        $customer->save();
        return back()->with('success','Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete customer
        $customer = User::find($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success','Customer deleted successfully');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Session;
class AuthenticationController extends Controller
{
    //User 
    public function login(Request $request)
    {
        if($request->method() == 'POST'){
             $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]); 
            $user = User::where('email', $request->email)->first();
            if ($user) {

                if (md5($request->password) ==  $user->password) {
                    $token = $user->createToken('MyApp')->accessToken;
                    Session::put('user', $user);
                    return redirect('index');
                }
                else{
                    return redirect('login')->with('error', 'Invalid Password');
                }
            }
            else{
                return redirect('login')->with('error', 'Invalid Email');
            }
        }
        return view('auth.login2');
    }
    public function signup(Request $request)
    {
        if ($request->method() == 'POST') {
            //validation
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);

            //create user
            $User = new User();
            $User->name = $request->first_name . ' ' . $request->last_name;
            $User->email = $request->email;
            $User->password = md5($request->password);
            $User->save();
            Session::flash('success','Register successfully');
            return redirect('login');
        }

        return view('auth.register2');
    }
    public function logout(Request $request)
    {
        Session::forget('user');
        return back();
    }

    //Admin 
    public function adminlogin(Request $request){
    
        if ($request->method() == 'POST') {
            $this->validate($request, [
                'email' => 'required|email',
                'password' => 'required'
            ]);
            $admin = Admin::where('email', $request->email)->first();
            if ($admin) {
                if ($request->password ==  $admin->password) {
                    Session::put('admin', $admin);
                    return redirect('admin/dashboard');
                } else {
                    return redirect('admin/login')->with('error', 'Invalid Password');
                }
            } else {
                return redirect('admin/login')->with('error', 'Invalid Email');
            }
        }
        return view('admin.login');
    }
    public function adminsingup(Request $request) {
        if ($request->method() == 'POST') {
            //validation
            $request->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required'
            ]);

            //create user
            $Admin = new Admin();
            $Admin->name = $request->first_name . ' ' . $request->last_name;
            $Admin->email = $request->email;
            $Admin->password = md5($request->password);
            $Admin->save();
            Session::flash('success', 'Register successfully');
            return redirect('admin/login');
        }
    }
    public function adminlogout(Request $request) {
        Session::forget('user');
        return back();
    }
}



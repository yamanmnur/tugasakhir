<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;


class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('adminLogout');
    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
 
    public function login(Request $request){
        //validate form data
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);
        //Attempt to log the user in
        if (Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) {
            return redirect()->intended(route('admin.dashboard'));
        } else {
            # code...
            return redirect()->back()->withInput($request->only('email','remember'));
        }
        
        //if succesfulm then redirect to their intended location

        //if unsuccess full 
    }

    public function adminLogout()
    {
        Auth::guard('admin')->logout();

       
        return redirect('/');
    }
}

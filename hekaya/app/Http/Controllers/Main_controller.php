<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;


class Main_controller extends Controller
{
    function index()
    {
        return view('auth.login');
    }
    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
     ]);

     $userdata = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );
     
     if(Auth::attempt($userdata))
     {
         if(Auth::user()->active==1)
         {
               return redirect('home');
         }
         else
         {
             return redirect('login')->with('error', 'Please active account');     }

      }
     else
     {
     return back()->with('error', 'خطأ في اسم المستخدم أو كلمة المرور');
     }

    }
    function logout()
    {
     Auth::logout();
     return redirect('login');
    }

}

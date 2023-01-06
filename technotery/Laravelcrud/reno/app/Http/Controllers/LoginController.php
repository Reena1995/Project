<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use session;

class LoginController extends Controller
{
    

    public function login()
    {
       
		return view('Backend.login');
    }


    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];


        if (Auth::attempt($credentials)) {
            if(auth()->user()->role_id == 1){
                return redirect()->route('index');
            }else{
                return redirect()->route('frontend.home');
            }
        }
        return 'Failure';
    }
    public function logout()
    {
       Auth::logout();
	    return  redirect()->route('login-page');  
    }

    
}




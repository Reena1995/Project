<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use session;
use Validate;

class LoginController extends Controller
{
    public function create()
    {
        return view('role.login');
    }

    public function login(Request $request)
    {
        $login = $request->validate([
            'email'=>'required',
            'password' => 'required'
            

        ]); 

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];


        if (Auth::attempt($credentials)) {
            if(auth()->user()->role_id == 1){
                return redirect()->route('admin.dashboard');
            }else{
                return redirect()->route('employee.dashboard');
            }
        }
        return 'Failure';
    }


    public function logout()
    {
        
            Auth::logout();
            return  redirect()->route('login');  
              
	    
    }
   
    public function index()
    {
        //
    }

   
    

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

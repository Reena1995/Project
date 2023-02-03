<?php

namespace App\Http\Controllers;
use App\Models\Register;
use DB;
use Log;
use Auth;
use Validator;
use Hash;


use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function index()
    {
        //
    }

    public function login(Request $request)
    {
        Log::info($request);
        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
        
        if (Auth::attempt($credentials)) { 
            if(auth()->user()){
                return redirect()->route('home');
            }else{
                return redirect()->back();
            }
        }
        return 'Failure';


        
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

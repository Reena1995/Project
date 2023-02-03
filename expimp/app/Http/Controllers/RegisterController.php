<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use DB;
use Log;
use Validator;
use Hash;
use Auth;


class RegisterController extends Controller
{
  
    public function index()
    {
        //
    }

   
    public function create()
    {
       return view('Registration');
    }

    
    public function store(Request $request)
    {
        $register = $request->validate([
            'name'=>'required|alpha',
            'email'=>'required|email|unique:registers,email',
            'password'=>'min:6',
            'confirmpwd'=>'required_with:password|same:password|min:6',

        ]); 
    
        
        try{
			$register = new Register;
            $register->name = $request->name;
            $register->email = $request->email;
            $register->password =Hash::make($request->password);


            $res = $register->save();
            \Log::info($register);
          
            if(!$res)
            {
                DB::rollback();
                return redirect()->back()->witherror('Internal server error.please try again later2.');
                return redirect()->back();
            }
           
           
          

            DB::commit();
            return redirect()->back()->withSuccess('Registration succesfully');
            return redirect()->route('product.index');
         
           
        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            return redirect()->back()->witherror('Internal server error.please try again later2.');
            return redirect()->back();

        }    
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

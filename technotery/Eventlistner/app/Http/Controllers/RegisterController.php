<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use Validator;
use DB;
use Event;
use App\Events\RegisterMailEvent;


class RegisterController extends Controller
{
   
    public function index()
    {
        //
    }

    public function create()
    {
        return view('registration');
    }

   
    public function store(Request $request)
    {
        

        DB::beginTransaction();
        try{
            $register = new Register();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->mobile = $request->mobile;
            $register->password = $request->password;

            $res = $register->save();
          
            if(!$res)
            {
                DB::rollback();   
                return redirect()->back()->witherror('Internal server error.please try again later1.');
            } 
           
            Event::dispatch(new RegisterMailEvent($register->id));
            DB::commit();
            return redirect()->back()->withSuccess('register successfully');
           
            



        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                dd($exception->getMessage());
                return redirect()->back()->witherror('Internal server error.please try again later2.');
               
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

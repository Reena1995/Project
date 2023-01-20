<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\welcomeMail;
use App\Jobs\sendEmailJob;
use App\Models\User;
use DB;
use Log;
use Validator;

class RegisterController extends Controller
{
   
    public function index()
    {
        //
    }

    public function mail()
    {
        $usermail='reena.technotery@gmail.com';

        dispatch(new sendEmailJob($usermail));

        
        dd('send mail successfully!');
    }

  
    public function create()
    {
        return view('registration');
    }

   
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|alpha',
           // 'email'=>'required|email|unique:users,email',
            'mobile'=>'required|min:11|numeric',
            'pwd'=>'required'
        ]);
        
        if ($validator->fails()) {

            // return response()->json(['success'=>'Added new records.']);
            return response()->json(['success'=>false,'message'=>$validator->errors()->first()],422);
            
        }

        DB::beginTransaction();
        try{
            $register = new User;
            $register->name = $request->name;
            $register->email = $request->email;
            $register->mobile = $request->mobile;
            $register->pwd = $request->pwd;


            $res = $register->save();
            \Log::info($register);

            if(!$res)
            {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
               
            } 
            dispatch(new sendEmailJob($register));
            
            DB::commit();
            return response()->json(['success'=>false,'message'=>'data successfully saved'],200);
           
            


        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                return response()->json(['message'=>'Internal server error.please try again later.'],500);

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

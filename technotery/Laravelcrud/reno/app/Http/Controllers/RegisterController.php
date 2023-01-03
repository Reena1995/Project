<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use DB;
use Log;
use Validator;

class RegisterController extends Controller
{
    
    public function index()
    {
        
        $register=DB::table('registers')->get() ;
       
        // dd($register);
        return view('Backend.Register.index',compact('register'));
       
    }

    
    public function create()
    {
        return view('Backend.Register.register');
    }

    public function store(Request $request)
    {
                // //    echo "<pre>";
                // //    print_r($request->post());
                // //    die();
                //    $name=$request->post('name');
                //    $email=$request->post('email');
                //    $mobile=$request->post('mobile');
                //    $pwd=$request->post('pwd');
                //    DB::table('registers')->insert(array(['name'=>$name,'email'=>$email,'mobile'=>$mobile,'pwd'=>$pwd]));

                //    $msg="Data Inserted successfully";
                //    return $msg;
                // //    return redirect()->route('register.index');

        Log::info('aaaaa');
        Log::info($request->all());


        $validator = Validator::make($request->all(), [
            'name'=>'required|alpha',
            'email'=>'required|email|unique:registers,email',
            'mobile'=>'required|min:11|numeric',
            'pwd'=>'required'
        ]);
        
        if ($validator->fails()) {

            // return response()->json(['success'=>'Added new records.']);
            return response()->json(['success'=>false,'message'=>$validator->errors()->first()],422);
            
        }

        DB::beginTransaction();
        try{
            $register = new Register;
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

    public function fetchstudent()
    {
        $regis = Register::all();
       \Log::info("called");
       \Log::info($regis);
        return response()->json([
            'regis'=>$regis,
        ]);
       
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
      $register=Register::find($id);
      if($register)
      {
        return  response()->json([
            'status'=>200,
            'register'=>$register,
        ]);
      }
      else
      {
        return  response()->json([
            'status'=>404,
            'message'=>'student not fount',
        ]);
      }
     
    }

    
    public function update(Request $request, $id)
    {
       
        $validator = Validator::make($request->all(), [
            'name'=>'required|alpha',
            'email'=>'required|email|unique:registers,email',
            'mobile'=>'required|min:11|numeric',
            'pwd'=>'required'
        ]);
        if ($validator->fails()) {            
            return response()->json([
                'status'=>400,
                'error'=>$validator->message(),
                ]);
            
        } 
            $register =Register::find($id);
            if($register)
            {
                $register->name = $request->name;
                $register->email = $request->email;
                $register->mobile = $request->mobile;
                $register->pwd = $request->pwd;
                $res = $register->update();
                return response()->json(['message'=>'data update successfully saved'],200);

                
            }
            else
            {
                return  response()->json([
                    'status'=>404,
                    'message'=>'student not fount',
                ]);
            }
           
    }

   
    public function destroy($id)
    {
        $register=Register::find($id);
      if($register)
      {
        $register->delete();
        return  response()->json([
            'status'=>200,
            'message'=>'data delete successfully',
        ]);
      }
      else
      {
        return  response()->json([
            'status'=>404,
            'message'=>'student student student not found',
        ]);
      }
     
    }
}

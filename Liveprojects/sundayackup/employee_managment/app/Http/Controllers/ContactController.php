<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmpEmergencyContact;
use App\Models\EmpFamilyDetail;
use App\Models\User;
use DB;
use Str;
use Log;
use Auth;
use Session;
use Validate;


class ContactController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function family_add(Request $request)
    {
        Log::info('aaaaaaa');
        // dd($request->all());
         $family = $request->validate([
            'name.*'=>'bail|required' ,
            'relationship.*'=>'bail|required' ,
            'profession.*'=>'bail|required' ,
            'contact_no.*'=>'bail|required' ,
            'age.*'=>'bail|required',
            
        ]); 
        // $errors = $medium->errors();
        // dd($errors);
        Log::info('bbbbbbb');
        try{
            DB::beginTransaction();
            $user = User::where('uuid',$request->user_id)->first();
            //   dd($request->all());
            foreach($request->name as $key=> $data){

                \Log::info($request->name);
                if(isset($request->family_uuid[$key]))
                {
                    \Log::info($request->family_uuid[$key]);
                    \Log::info('iffffffff');
                    $family_update =  EmpFamilyDetail::where('uuid',$request->family_uuid[$key])->first();
                    
                    \Log::info($request->family_uuid[$key]);

                    $family_update->name  = $request->name[$key];
                    $family_update->relationship  = $request->relationship[$key];
                    $family_update->profession = $request->profession[$key];
                    $family_update->age = $request->age[$key];
                    $family_update->contact_no = $request->contact_no[$key];

                    if(isset($request->is_dependent[$key])){

                        $family_update->is_dependent = $request->is_dependent[$key];
                    }
                   
                    
                   
                    
                    $family_update->updated_by = Auth::id();
                    $message = "family details update successfully";
                    $res = $family_update->update();
                  

                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                    
                    
                        return redirect()->back();
                    }

                }else{
                    \Log::info('else');
                    $family_add = new EmpFamilyDetail;

                    $family_add->name  = $request->name[$key];
                    $family_add->relationship  = $request->relationship[$key];
                    $family_add->profession = $request->profession[$key];
                    $family_add->age = $request->age[$key];
                    $family_add->contact_no = $request->contact_no[$key];

                    if(isset($request->is_dependent[$key])){

                        $family_add->is_dependent = $request->is_dependent[$key];
                    }
                   
                  
                    $family_add->user_id = $user->id;
                    $family_add->created_by = Auth::id();
                    $family_add->uuid = \Str::uuid();
                  
                    $res = $family_add->save();

                    $message = "family deatils add successfully";

                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                     
                    
                        return redirect()->back();
                    }
                }
                /* 
                */
            }
            Log::info('bbbbbbb');
            DB::commit();
            Session::flash('success',$message);
           
            return redirect()->back();
           


        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:MediumOfInstructionController function:store");
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();
        }    
        catch (\Exception $e) {
                Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
                Log::info('Error Code: ' . $e->getCode());
                Log::info('Error Message: ' . $e->getMessage());
                Session::flash('danger', "Internal server error.Please try again later.");
                return redirect()->back();

        }
    }

    public function emergency_add(Request $request)
    {
        Log::info('aaaaaaa');
        // dd($request->all());
         $professional = $request->validate([

            'name.*'=>'bail|required' ,
            'address.*'=>'bail|required' ,
            'relationship.*'=>'bail|required' ,
            'contact_no.*'=>'bail|required' ,
           
        ]); 
        // $errors = $medium->errors();
        // dd($errors);
        Log::info('bbbbbbbbb');
        try{
            DB::beginTransaction();
            $user = User::where('uuid',$request->user_id)->first();
            //   dd($request->all());
            foreach($request->name as $key=> $data){

                \Log::info($request->name);
                if(isset($request->emergency_uuid[$key]))
                {
                    \Log::info($request->emergency_uuid[$key]);
                    \Log::info('iffffffff');
                    $emergency_update =  EmpEmergencyContact::where('uuid',$request->emergency_uuid[$key])->first();
                    
                    \Log::info($request->emergency_uuid[$key]);
                    $emergency_update->name  = $request->name[$key];
                    $emergency_update->address  = $request->address[$key];
                    $emergency_update->relationship = $request->relationship[$key];
                    $emergency_update->contact_no = $request->contact_no[$key];
                    
                    
                    $emergency_update->updated_by = Auth::id();
                    $message = "employee emergency detail update successfully";
                    $res = $emergency_update->update();
                  

                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                    
                    
                        return redirect()->back();
                    }

                }else{
                    \Log::info('else');
                    $emergency_add = new EmpEmergencyContact;

                    $emergency_add->name  = $request->name[$key];
                    $emergency_add->address  = $request->address[$key];
                    $emergency_add->relationship = $request->relationship[$key];
                    $emergency_add->contact_no = $request->contact_no[$key];
                    
                   
                   
                    $emergency_add->user_id = $user->id;
                    $emergency_add->created_by = Auth::id();
                    $emergency_add->uuid = \Str::uuid();
                  
                    $res = $emergency_add->save();

                    $message = "emergency contact details  add successfully";

                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                     
                    
                        return redirect()->back();
                    }
                }
                /* 
                */
            }

            if($request->final_submit == 'true'){
                $user->onboarding_dtls = 1;
                $user->update();
            }
            Log::info('bbbbbbb');
            DB::commit();
            Session::flash('success',$message);
           
            return redirect()->back();
           


        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:MediumOfInstructionController function:store");
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();
        }    
        catch (\Exception $e) {
                Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
                Log::info('Error Code: ' . $e->getCode());
                Log::info('Error Message: ' . $e->getMessage());
                Session::flash('danger', "Internal server error.Please try again later.");
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

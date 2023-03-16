<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeePersonalDetail;
use App\Models\EmpEducationDetail;
use App\Models\EmpDocumentDetail;
use App\Models\EmpLangDetail;
use App\Models\User;
use DB;
use Str;
use Log;
use Auth;
use Session;
use Validate;

class PersonalController extends Controller
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

    public function personaldetail_add(Request $request)
    {
        Log::info('aaaaaaa');
        $personal_detail = $request->validate([
            'fathername'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'mothername'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'dob' =>'bail|required' , 
            'gender'  =>'bail|required' ,
            'bloodgroup'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'alternateno'=>'bail|required|numeric|digits:10',
            'marital_status'=>'bail|required',
            'image'=>'bail|required|mimes:jpg,png,jpeg',
            'residencetype'=>'bail|required',
            'transportationmode'=>'bail|required',
            'disabilitydtls'=>'bail|required',
            'totalexperience'=>'bail|required|numeric',
            'current_address'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'permanent_address'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'current_country'=>'bail|required',
            'permanent_country'=>'bail|required',
            'current_state'=>'bail|required',
            'permanent_state'=>'bail|required',
            'current_city'=>'bail|required',
            'permanent_city'=>'bail|required',
            'current_pincode'=>'bail|required|numeric',
            'permanent_pincode'=>'bail|required|numeric',
        ]); 
        
       
       

        try{

            Log::info('bbbbbbb');

            // dd($request->all());
            DB::beginTransaction();

            $user = User::where('uuid',$request->user_id)->first();

            $personal_detail=EmployeePersonalDetail::where('user_id',$user->id)->first();
            if (is_null($personal_detail)) 
            {             
                $personal_detailNew = new EmployeePersonalDetail;
                $personal_detailNew->fathername = $request->fathername;
                $personal_detailNew->mothername = $request->mothername;
                $personal_detailNew->dob = $request->dob;
                $personal_detailNew->gender = $request->gender;
                $personal_detailNew->blood_group = $request->bloodgroup;
                $personal_detailNew->alternate_no = $request->alternateno;
                $personal_detailNew->marital_status = $request->marital_status;
    
               
                if($request->has('image'))
                {
    
                    $file=$request->file('image');  // get file
                    $file_name=time()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
                    $file->move('console/upload/employee/profileimage',$file_name); //file name move upload in public		
                    $personal_detailNew->image=$file_name; // file name store in db
                }
                $personal_detailNew->current_residence_type_id  = $request->residencetype;
                $personal_detailNew->mode_of_transportation_id  = $request->transportationmode;
                $personal_detailNew->details_of_disability  = $request->disabilitydtls;
                $personal_detailNew->total_of_experience  = $request->totalexperience;
                $personal_detailNew->current_address  = $request->current_address;
                $personal_detailNew->permanent_address  = $request->permanent_address;
                $personal_detailNew->current_country_id  = $request->current_country;
                $personal_detailNew->permanent_country_id   = $request->permanent_country;
                $personal_detailNew->current_state_id   = $request->current_state;
                $personal_detailNew->permanent_state_id   = $request->permanent_state;
                $personal_detailNew->current_city_id   = $request->current_city;
                $personal_detailNew->permanent_city_id   = $request->permanent_city;
                $personal_detailNew->current_pincode   = $request->current_pincode;
                $personal_detailNew->permanent_pincode   = $request->permanent_pincode;
               
                $personal_detailNew->created_by = Auth::id();
               
    
                $personal_detailNew->user_id = $user->id;
                $personal_detailNew->uuid = \Str::uuid();
                $res = $personal_detailNew->save();
                $message = 'personal create successfully';
                Log::info('if');
                if(!$res)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');                
                    return redirect()->back();
                }
            }            
            else{

                $personal_detail->fathername = $request->fathername;
                $personal_detail->mothername = $request->mothername;
                $personal_detail->dob = $request->dob;
                $personal_detail->gender = $request->gender;
                $personal_detail->blood_group = $request->bloodgroup;
                $personal_detail->alternate_no = $request->alternateno;
                $personal_detail->marital_status = $request->marital_status;
    
               
                if($request->has('image'))
                {
    
                    $file=$request->file('image');  // get file
                    $file_name=time()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
                    $file->move('console/upload/employee/profileimage',$file_name); //file name move upload in public		
                    $personal_detail->image=$file_name; // file name store in db
                }
                $personal_detail->current_residence_type_id  = $request->residencetype;
                $personal_detail->mode_of_transportation_id  = $request->transportationmode;
                $personal_detail->details_of_disability  = $request->disabilitydtls;
                $personal_detail->total_of_experience  = $request->totalexperience;
                $personal_detail->current_address  = $request->current_address;
                $personal_detail->permanent_address  = $request->permanent_address;
                $personal_detail->current_country_id  = $request->current_country;
                $personal_detail->permanent_country_id   = $request->permanent_country;
                $personal_detail->current_state_id   = $request->current_state;
                $personal_detail->permanent_state_id   = $request->permanent_state;
                $personal_detail->current_city_id   = $request->current_city;
                $personal_detail->permanent_city_id   = $request->permanent_city;
                $personal_detail->current_pincode   = $request->current_pincode;
                $personal_detail->permanent_pincode   = $request->permanent_pincode;
               
                
                $personal_detail->updated_by = Auth::id();
    
                $personal_detail->user_id = $user->id;
                $result = $personal_detail->update();
                $message = 'personal Updated successfully';
                

                if(!$result)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');
                
                    return redirect()->back();
                }
            }
           
            DB::commit(); 
            
            Session::flash('success',$message);
           
            return redirect()->back();
           


        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:EmployeePersonalDetail function:personaldetail_add");
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

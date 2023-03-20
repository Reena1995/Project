<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmpProfessionalTrainingDetail;
use App\Models\EmpWorkExperienceDetail;
use App\Models\User;
use DB;
use Str;
use Log;
use Auth;
use Session;
use Validate;

class ProfessionalController extends Controller
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

    public function professional_add(Request $request)
    {
        Log::info('aaaaaaa');
        // dd($request->all());
         $professional = $request->validate([
            // 'name_of_institute.*'=>'bail|required' ,
            // 'address.*'=>'bail|required' ,
            // 'description.*'=>'bail|required' ,
            // 'to.*'=>'bail|required' ,
            // 'from.*'=>'bail|required',
            // 'from.*'=>'bail|required',
        ]); 
        // $errors = $medium->errors();
        // dd($errors);
        try{
            DB::beginTransaction();
            $user = User::where('uuid',$request->user_id)->first();
            //   dd($request->all());
            foreach($request->name_of_institute as $key=> $data){

                \Log::info($request->name_of_institute);
                if(isset($request->education_uuid[$key]))
                {
                    \Log::info($request->professional_uuid[$key]);
                    \Log::info('iffffffff');
                    $profession_update =  EmpProfessionalTrainingDetail::where('uuid',$request->professional_uuid[][$key])->first();
                    
                    \Log::info($request->professional_uuid[$key]);
                    $profession_update->name_of_institute  = $request->name_of_institute[$key];
                    $profession_update->address  = $request->address[$key];
                    $profession_update->to = $request->from[$key];
                    $profession_update->description = $request->description[$key];
                   
                    
                    if(isset($request->certificate_pdf[$key])){

                        $file = $request->certificate_pdf[$key];  // get file
                        $file_name=time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/profession_training',$file_name); //file name move upload in public		
                        $profession_update->certificate_pdf = $file_name;
                    }
                    
                    $profession_update->updated_by = Auth::id();
                
                    $res = $profession_update->update();
                    $message="professional training detail update successfully";
                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                    
                    
                        return redirect()->back();
                    }

                }else{
                    \Log::info('else');
                    $professional_add = new EmpProfessionalTrainingDetail;

                    $professional_add->name_of_institute  = $request->name_of_institute[$key];
                    $professional_add->address  = $request->address[$key];
                    $professional_add->to = $request->from[$key];
                    $professional_add->description = $request->description[$key];
                   
                    
                    if(isset($request->certificate_pdf[$key])){

                        $file = $request->certificate_pdf[$key];  // get file
                        $file_name=time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/profession_training',$file_name); //file name move upload in public		
                        $professional_add->certificate_pdf = $file_name;
                    }
                    
                    $professional_add->user_id = $user->id;
                    $professional_add->created_by = Auth::id();
                    $professional_add->uuid = \Str::uuid();
                  
                    $res = $professional_add->save();
                    $message="professional training detail add successfully";
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
            Session::flash('success','message');
           
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

    public function workexperience_add(Request $request)
    {
        Log::info('aaaaaaa');
        // dd($request->all());
         $professional = $request->validate([
            // 'name_of_institute.*'=>'bail|required' ,
            // 'address.*'=>'bail|required' ,
            // 'description.*'=>'bail|required' ,
            // 'to.*'=>'bail|required' ,
            // 'from.*'=>'bail|required',
            // 'from.*'=>'bail|required',
        ]); 
        // $errors = $medium->errors();
        // dd($errors);
        try{
            DB::beginTransaction();
            $user = User::where('uuid',$request->user_id)->first();
            //   dd($request->all());
            foreach($request->name as $key=> $data){

                \Log::info($request->name);
                if(isset($request->work_uuid[$key]))
                {
                    \Log::info($request->work_uuid[$key]);
                    \Log::info('iffffffff');
                    $workexp_update =  EmpProfessionalTrainingDetail::where('uuid',$request->work_uuid[][$key])->first();
                    
                    \Log::info($request->work_uuid[$key]);
                    $workexp_update->name  = $request->name[$key];
                    $workexp_update->address  = $request->address[$key];
                    $workexp_update->date_of_joining = $request->date_of_joining[$key];
                    $workexp_update->date_of_leaving = $request->date_of_leaving[$key];
                    $workexp_update->joining_designation  = $request->joining_designation[$key];
                    $workexp_update->leaving_designation = $request->leaving_designation[$key];
                    $workexp_update->role = $request->role[$key];
                    $workexp_update->	last_salary  = $request->last_salary[$key];
                    $workexp_update->leaving_reason  = $request->leaving_reason[$key];
                    $workexp_update->reporting_authority_name  = $request->reporting_authority_name[$key];
                    $workexp_update->reporting_authority_contact = $request->reporting_authority_contact[$key];
                    $workexp_update->reporting_authority_designation = $request->reporting_authority_designation[$key];
                   
                    
                    if(isset($request->experience_certificate[$key])){

                       
                        $file = $request->experience_certificate[$key];  // get file
                        $file_name=time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/work_experience',$file_name); //file name move upload in public		
                        $workexp_update->experience_certificate = $file_name;
                    }
                    
                    $workexp_update->updated_by = Auth::id();
                
                    $res = $workexp_update->update();
                    $message="work experiene detail update successfully";
                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                    
                    
                        return redirect()->back();
                    }

                }else{
                    \Log::info('else');
                    $workexp_add = new EmpProfessionalTrainingDetail;

                    $professional_add->name  = $request->name[$key];
                    $professional_add->address  = $request->address[$key];
                    $professional_add->date_of_joining = $request->date_of_joining[$key];
                    $professional_add->date_of_leaving = $request->date_of_leaving[$key];
                    $professional_add->joining_designation  = $request->joining_designation[$key];
                    $professional_add->leaving_designation = $request->leaving_designation[$key];
                    $professional_add->role = $request->role[$key];
                    $professional_add->	last_salary  = $request->last_salary[$key];
                    $professional_add->leaving_reason  = $request->leaving_reason[$key];
                    $professional_add->reporting_authority_name  = $request->reporting_authority_name[$key];
                    $professional_add->reporting_authority_contact = $request->reporting_authority_contact[$key];
                    $professional_add->reporting_authority_designation = $request->reporting_authority_designation[$key];
                   
                    
                   
                    
                    if(isset($request->experience_certificate[$key])){

                        $file = $request->experience_certificate[$key];  // get file
                        $file_name=time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/work_experience',$file_name); //file name move upload in public		
                        $professional_add->experience_certificate = $file_name;
                    }
                    
                    $professional_add->user_id = $user->id;
                    $professional_add->created_by = Auth::id();
                    $professional_add->uuid = \Str::uuid();
                  
                    $res = $professional_add->save();
                    $message="work experiene add successfully";
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
            Session::flash('success','message');
           
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

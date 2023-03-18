<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeJobProfileDetail;
use App\Models\User;
use App\Models\EmpBankDetail;
use App\Models\EmpEmploymentDetail;
use App\Models\EmployeeLocationHistorie;
use App\Models\EmpAssetDetail;
use DB;
use Str;
use Log;
use Auth;
use Session;
use Validate;

class OrganizationController extends Controller
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

    public function jobprofile_add(Request $request)
    {
        Log::info('aaaaaaa');
        $user = User::where('uuid',$request->user_id)->first();
        $jobprofile_detail=EmployeeJobProfileDetail::where('user_id',$user->id)->first();
        
        
        $job_profile_dtl = $request->validate([

            // 'company_employee_id'=>'bail|required',
            // 'company_emp_device_id'=>'bail|required',
            // 'department_id' =>'bail|required' , 
            // 'designation_id '  =>'bail|required' ,
            // 'organization_role_id '=>'bail|required',
           
           
        ]); 
        
       
       

        try{

            Log::info('bbbbbbb');

            // dd($request->all());
            DB::beginTransaction();

            if (is_null($jobprofile_detail)) 
            {           
                Log::info('if');  
                $jobprofile_detailNew = new EmployeeJobProfileDetail;
                $jobprofile_detailNew->company_employee_id = $request->company_employee_id;
                $jobprofile_detailNew->company_emp_device_id = $request->company_emp_device_id;
                $jobprofile_detailNew->department_id = $request->department_id;
                $jobprofile_detailNew->designation_id = $request->designation_id;
                $jobprofile_detailNew->organization_role_id = $request->organization_role_id;
                
               
                $jobprofile_detailNew->created_by = Auth::id();
                $jobprofile_detailNew->user_id = $user->id;
                $jobprofile_detailNew->uuid = \Str::uuid();

                $res = $jobprofile_detailNew->save();

                $message = 'Employee  job Profile successfully';
                Log::info('if');
                if(!$res)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');                
                    return redirect()->back();
                }
            }            
            else{

                Log::info('else');

                $jobprofile_detailNew->company_employee_id = $request->company_employee_id;
                $jobprofile_detailNew->company_emp_device_id = $request->company_emp_device_id;
                // $jobprofile_detailNew->department_id = $request->department_id;
                // $jobprofile_detailNew->designation_id = $request->designation_id;
                $jobprofile_detailNew->organization_role_id = $request->organization_role_id;
    
                
                $jobprofile_detail->updated_by = Auth::id();
                $jobprofile_detail->user_id = $user->id;
                $result = $jobprofile_detail->update();

                $message = 'Employee  job Profile successfully';
                

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
            Log::info("Exiting class:OrganizationController function:jobprofile_add");
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

    public function bank_add(Request $request)
    {
        Log::info('aaaaaaa');
        $user = User::where('uuid',$request->user_id)->first();
        $bankdeatil=EmpBankDetail::where('user_id',$user->id)->first();
        
        
        $bank_dtl = $request->validate([

            // 'ac_holder_name'=>'bail|required',
            // 'bank_name'=>'bail|required',
            // 'branch_name' =>'bail|required' , 
            // 'account_no '  =>'bail|required' ,
            // 'ifsc_code '=>'bail|required',
           
           
        ]); 
        
       
       

        try{

            Log::info('bbbbbbb');

            // dd($request->all());
            DB::beginTransaction();

            if (is_null($bankdeatil)) 
            {           
                Log::info('if');  
                $bank_detailNew = new EmpBankDetail;
                $bank_detailNew->ac_holder_name = $request->ac_holder_name;
                $bank_detailNew->bank_name = $request->bank_name;
                $bank_detailNew->branch_name = $request->branch_name;
                $bank_detailNew->account_no = $request->account_no;
                $bank_detailNew->ifsc_code = $request->ifsc_code;
                
               
                $bank_detailNew->created_by = Auth::id();
                $bank_detailNew->user_id = $user->id;
                $bank_detailNew->uuid = \Str::uuid();

                $res = $bank_detailNew->save();

                $message = 'Employee  bank detail  create successfully';
                Log::info('if');
                if(!$res)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');                
                    return redirect()->back();
                }
            }            
            else{

                Log::info('else');

                $bank_detailNew->ac_holder_name = $request->ac_holder_name;
                $bank_detailNew->bank_name = $request->bank_name;
                $bank_detailNew->branch_name = $request->branch_name;
                $bank_detailNew->account_no = $request->account_no;
                $bank_detailNew->ifsc_code = $request->ifsc_code;
    
                
                $bank_detailNew->updated_by = Auth::id();
                $bank_detailNew->user_id = $user->id;
                $result = $bank_detailNew->update();

                $message = 'Employee  jbank details update  successfully';
                

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
            Log::info("Exiting class:OrganizationController function:jobprofile_add");
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

    public function employment_add(Request $request)
    {
        Log::info('aaaaaaa');
        $user = User::where('uuid',$request->user_id)->first();
        $employment_detail=EmpEmploymentDetail::where('user_id',$user->id)->first();
        
       
        $personal_dtl = $request->validate([

            'date_of_joining'=>'bail|required',
            'date_of_resigning'=>'bail|required',
            'date_of_leaving' =>'bail|required' , 
            'reason_for_leaving'  =>'bail|required' ,
            'resign_letter_pdf'=>'bail|required',
            
            
        ]); 
        
      
        try{

            Log::info('bbbbbbb');

            // dd($request->all());
            DB::beginTransaction();

            if (is_null($employment_detail)) 
            {             
                $employment_detailNew = new EmpEmploymentDetail;
                $employment_detailNew->date_of_joining = $request->date_of_joining;
                $employment_detailNew->date_of_resigning = $request->date_of_resigning;
                $employment_detailNew->date_of_leaving = $request->date_of_leaving;
                $employment_detailNew->reason_for_leaving = $request->reason_for_leaviemployment;
    
               
                if($request->has('resign_letter_pdf'))
                {
    
                    $file=$request->file('resign_letter_pdf');  // get file
                    $file_name=time()."_image.".$request->file('resign_letter_pdf')->getClientOriginalExtension();// make file name
                    $file->move('console/upload/employee/resignletter',$file_name); //file name move upload in public		
                    $employment_detailNew->resign_letter_pdf=$file_name; // file name store in db
                }
               
                $employment_detailNew->created_by = Auth::id();
               
    
                $employment_detailNew->user_id = $user->id;
                $employment_detailNew->uuid = \Str::uuid();
                $res = $employment_detailNew->save();

                $message = 'employment  details add successfully';
                Log::info('if');
                if(!$res)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');                
                    return redirect()->back();
                }
            }            
            else{

                $employment_detailNew->date_of_joining = $request->date_of_joining;
                $employment_detailNew->date_of_resigning = $request->date_of_resigning;
                $employment_detailNew->date_of_leaving = $request->date_of_leaving;
                $employment_detailNew->reason_for_leaving = $request->reason_for_leaviemployment;
    
               
                if($request->has('resign_letter_pdf'))
                {
    
                    $file=$request->file('resign_letter_pdf');  // get file
                    $file_name=time()."_image.".$request->file('resign_letter_pdf')->getClientOriginalExtension();// make file name
                    $file->move('console/upload/employee/resignletter',$file_name); //file name move upload in public		
                    $employment_detailNew->resign_letter_pdf=$file_name; // file name store in db
                }
               

                $employment_detailNew->updated_by = Auth::id();
    
                $employment_detailNew->user_id = $user->id;
                $result = $employment_detailNew->update();
                $message = 'employment  details successfully';
                

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
   
    public function location_add(Request $request)
    {
        Log::info('aaaaaaa');

        $user = User::where('uuid',$request->user_id)->first();
        $emp_location=EmployeeLocationHistorie::where('user_id',$user->id)->first();
        
        
        $emp_location_dtl = $request->validate([

            // 'company_location_id'=>'bail|required',
            // 'company_location_type_id'=>'bail|required'
          
        ]); 
       

        try{

            Log::info('bbbbbbb');

            // dd($request->all());
            DB::beginTransaction();

            if (is_null($emp_location)) 
            {           
                Log::info('if');  
                $emp_location_detail = new EmployeeLocationHistorie;
                $emp_location_detail->company_location_id = $request->company_location_id;
                $emp_location_detail->company_location_type_id = $request->company_location_type_id;
                
            
                $emp_location_detail->created_by = Auth::id();
                $emp_location_detail->user_id = $user->id;
                $emp_location_detail->uuid = \Str::uuid();

                $res = $emp_location_detail->save();

                $message = 'Employee  location history add  successfully';
                Log::info('if');
                if(!$res)
                {
                    DB::rollback();
                    
                    Session::flash('danger','Internal server error please try again later.');                
                    return redirect()->back();
                }
            }            
            else{

                Log::info('else');

                $emp_location_detail->company_location_id = $request->company_location_id;
                $emp_location_detail->company_location_type_id = $request->company_location_type_id;
               
                $emp_location_detail->updated_by = Auth::id();
                $emp_location_detail->user_id = $user->id;
                $result = $emp_location_detail->update();

                $message = 'Employee location history update successfully';
                

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
            Log::info("Exiting class:OrganizationController function:jobprofile_add");
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

    public function asset_add(Request $request)
    {
        Log::info('aaaaaaa');
        // dd($request->all());
        
         $emp_asset_validation = $request->validate([

            // 'asset_brand_id'=>'bail|required' ,
            // 'asset_sub_type_id '=>'bail|required' ,
            // 'serial_no'=>'bail|required' ,
            // 'purchased_dn'=>'bail|required' ,
            // 'purchased_from'=>'bail|required' ,
            // 'warranty_period'=>'bail|required' ,
            // 'organization_asset_code	 '=>'bail|required' ,
            // 'invoice_no'=>'bail|required' ,
            // 'asset_image'=>'bail|required' ,
           
        
        ]); 
        
        try{
            DB::beginTransaction();
            $user = User::where('uuid',$request->user_id)->first();

            foreach($request->medium as $key=> $data){
                if(isset($request->asset_uuid[$key]))
                {
                    $emp_asset =  EmpAssetDetail::where('uuid',$request->asset_uuid[$key])->first();
                    
                    \Log::info($request->education_uuid[$key]);
                    $emp_asset->asset_brand_id  = $request->asset_brand_id[$key];
                    $emp_asset->asset_sub_type_id  = $request->asset_sub_type_id[$key];
                    $emp_asset->serial_no = $request->serial_no[$key];
                    $emp_asset->purchased_dn = $request->purchased_dn[$key];
                    $emp_asset->purchased_from = $request->purchased_from[$key];
                    $emp_asset->warranty_period = $request->warranty_period[$key];
                    $emp_asset->organization_asset_code = $request->organization_asset_code[$key];
                    $emp_asset->invoice_no = $request->invoice_no[$key];
                    
                    if(isset($request->asset_image[$key])){

                        $file = $request->asset_image[$key];  // get file
                        $file_name=time()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/assetimage',$file_name); //file name move upload in public		
                        $emp_asset->result = $file_name;
                    }
                    
                    $emp_asset->updated_by = Auth::id();
                
                    $res = $emp_asset->update();
                    if(!$res)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                    
                    
                        return redirect()->back();
                    }

                }else{

                    $emp_asset = new EmpAssetDetail;

                    $emp_asset->asset_brand_id  = $request->asset_brand_id[$key];
                    $emp_asset->asset_sub_type_id  = $request->asset_sub_type_id[$key];
                    $emp_asset->serial_no = $request->serial_no[$key];
                    $emp_asset->purchased_dn = $request->purchased_dn[$key];
                    $emp_asset->purchased_from = $request->purchased_from[$key];
                    $emp_asset->warranty_period = $request->warranty_period[$key];
                    $emp_asset->organization_asset_code = $request->organization_asset_code[$key];
                    $emp_asset->invoice_no = $request->invoice_no[$key];

                    $emp_asset->user_id = $user->id;

                    if($request->asset_image[$key]){
    
                        $file = $request->asset_image[$key];  // get file
                        $file_name=time()."_image.".$file->getClientOriginalExtension();// make file name
                        $file->move('console/upload/employee/assetimage',$file_name); //file name move upload in public		
                        $emp_asset->result = $file_name;
                    }

                   
                    $emp_asset->created_by = Auth::id();
                    $emp_asset->uuid = \Str::uuid();
                  
                    $res = $emp_asset->save();
        
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
            Session::flash('success','Education created successfully');
           
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

<?php

namespace App\Http\Controllers;
use App\Models\Designation;
use App\Models\Department;
use App\Models\OrganizationRole;

use Illuminate\Http\Request;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class OrganizationRoleController extends Controller
{
    public function create()
    {  
        $department=Department::where('is_active',1)->orderBy('name', 'ASC')->get();
        $designation=Designation::where('is_active',1)->orderBy('name', 'ASC')->get();
       return view('admin.modules.organization_role.add',compact('department','designation'));
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $department = $request->validate([
            'name'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'department_id' =>'required',
            'designation_id' =>'required'

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $org_role = new OrganizationRole;
            $org_role->name = $request->name;
            $org_role->department_id = $request->department_id;
            $org_role->designation_id = $request->designation_id;
            $org_role->created_by = Auth::id();
            $org_role->uuid = \Str::uuid();
          
            $res = $org_role->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','organization role create successfully');
            return redirect()->route('organization_role.index');
           


        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server error please try again later.');
            return redirect()->back();

        }
    }

   
    public function index()
    {
        $org_role = OrganizationRole::where('is_active',1)->paginate(5);
        return view('admin.modules.organization_role.index',compact('org_role'));
    }   


    public function show($id)
    {
        $department=Department::where('is_active',1)->orderBy('name', 'ASC')->first();
        $designation=Designation::where('is_active',1)->orderBy('name', 'ASC')->first();
        $org_role = OrganizationRole::where('uuid',$id)->first();
        return view('admin.modules.organization_role.show',compact('department','designation','org_role'));
    }
   
    

    
    public function edit($id)
    {
        $department=Department::where('is_active',1)->orderBy('name', 'ASC')->get();
        $designation=Designation::where('is_active',1)->orderBy('name', 'ASC')->get();
        $org_role = OrganizationRole::where('uuid',$id)->first();
        return view('admin.modules.organization_role.edit',compact('department','designation','org_role'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
         $designation = $request->validate([
            'name'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'department_id'=>'required',
            'designation_id'=>'required',
            

        ]); 
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $org_role = OrganizationRole::where('uuid',$id)->first();
            $org_role->name = $request->name;
            $org_role->department_id = $request->department_id;
            $org_role->designation_id = $request->designation_id;
            $org_role->updated_by = Auth::id();
            $res = $org_role->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','organization role update  successfully');
            return redirect()->route('organization_role.index');
           


        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server error please try again later.');
            return redirect()->back();

        }
    }   
    
    public function status($id)
    {
      
       try{

           Log::info('hbjjhbdjhqw');
           DB::beginTransaction();
           $org_role = OrganizationRole::where('uuid',$id)->first();
           $org_role->is_active = 0;
           $org_role->updated_by = Auth::id();
           $res = $org_role->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','designation delete successfully');
           return redirect()->route('organization_role.index');
          


       }
       catch (\Exception $exception) {
           \Log::info("ERROR: CODE: " . $exception->getCode());
           \Log::info("ERROR: Message: " . $exception->getMessage());
           DB::rollback();
           Session::flash('error','Internal server error please try again later.');
           return redirect()->back();

       }

      

    }
    public function destroy($id)
    {
        //
    }
}

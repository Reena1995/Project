<?php

namespace App\Http\Controllers;
use App\Models\Designation;
use App\Models\Department;

use Illuminate\Http\Request;
use DB;
use Session;
use Log;
use Validate;

class DesignationController extends Controller
{
    public function create()
    {  
        $department=Department::orderBy('name', 'ASC')->get();
       return view('admin.modules.designation.add',compact('department'));
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $department = $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $designation = new Designation;
            $designation->name = $request->name;
            $designation->department_id = $request->department_id;
            $designation->uuid = \Str::uuid();
          
            $res = $designation->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','designation create successfully');
           
            return redirect()->route('designation.index');
           


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
        $designation = Designation::where('is_active',1)->get();
        return view('admin.modules.designation.index',compact('designation'));
    }   


    public function show($id)
    {
        $department=Department::orderBy('name', 'ASC')->first();
        $designation = Designation::where('uuid',$id)->first();
        return view('admin.modules.designation.show',compact('designation','department'));
    }
   
    

    
    public function edit($id)
    {
        $department=Department::orderBy('name', 'ASC')->get();
        $designation = Designation::where('uuid',$id)->first();
        return view('admin.modules.designation.edit',compact('designation','department'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
         $designation = $request->validate([
            'name'=>'required|alpha',
            'department_id'=>'required',
            

        ]); 
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $designation = Designation::where('uuid',$id)->first();
            $designation->name = $request->name;
            $designation->department_id = $request->department_id;
            $res = $designation->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','designation update  successfully');
            return redirect()->route('designation.index');
           


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
           $designation = Designation::where('uuid',$id)->first();
           $designation->is_active = 0;
           $res = $designation->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','designation delete successfully');
           return redirect()->route('designation.index');
          


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

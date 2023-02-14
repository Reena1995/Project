<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use DB;
use Session;
use Log;
use Validate;

class DepartmentController extends Controller
{
   
   
    public function create()
    {
       return view('admin.modules.department.add');
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
            $department = new Department;
            $department->name = $request->name;
            $department->uuid = \Str::uuid();
          
            $res = $department->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','department create successfully');
            return redirect()->route('department.index');
           


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
        $department = Department::where('is_active',1)->get();
        return view('admin.modules.department.index',compact('department'));
    }   


    public function show($id)
    {
        $department = Department::where('uuid',$id)->first();
        return view('admin.modules.department.show',compact('department'));
    }

    
    public function edit($id)
    {
        $department = Department::where('uuid',$id)->first();
        return view('admin.modules.department.edit',compact('department'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
         $department = $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $department = Department::where('uuid',$id)->first();
            $department->name = $request->name;
            $res = $department->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','department updatesuccessfully');
            return redirect()->route('department.index');
           


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
           $department = Department::where('uuid',$id)->first();
           $department->is_active = 0;
           $res = $department->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','department delete successfully');
           return redirect()->route('department.index');
          


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

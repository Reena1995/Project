<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveType;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class LeaveTypeController extends Controller
{
    public function create()
    {
       return view('admin.modules.leave_type.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $leavetype= $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $leavetype = new LeaveType;
            $leavetype->type = $request->type;
            $leavetype->created_by = Auth::id();
            $leavetype->uuid = \Str::uuid();
          
            $res = $leavetype->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','leave brand create successfully');
            return redirect()->route('leave_type.index');
           


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
        $leavetype = LeaveType::where('is_active',1)->get();
        return view('admin.modules.leave_type.index',compact('leavetype'));
    }   


    public function show($id)
    {
        $leavetype = LeaveType::where('uuid',$id)->first();
        return view('admin.modules.leave_type.show',compact('leavetype'));
    }

    
    public function edit($id)
    {
        $leavetype = LeaveType::where('uuid',$id)->first();
        return view('admin.modules.leave_type.edit',compact('leavetype'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $leavetype = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $leavetype = LeaveType::where('uuid',$id)->first();;
            $leavetype -> type = $request->type;
            $leavetype->updated_by = Auth::id();
            $res = $leavetype ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','leave type update successfully');
            return redirect()->route('leave_type.index');
           


        }
        catch (\Exception $exception) {
            Log::info('catch');
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
           $leavetype = LeaveType::where('uuid',$id)->first();
           $leavetype->is_active = 0;
           $leavetype->updated_by = Auth::id();
           $res = $leavetype->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','leave type  delete successfully');
           return redirect()->route('leave_type.index');
          


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

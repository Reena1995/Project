<?php

namespace App\Http\Controllers;
use App\Models\CompanyLocation;
use DB;
use Session;
use Log;
use Validate;
use Auth;

use Illuminate\Http\Request;

class CompanyLocationController extends Controller
{
    public function create()
    {
       return view('admin.modules.company_location.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $location = $request->validate([
            'name'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $location = new CompanyLocation;
            $location->name = $request->name;
            $location->created_by = Auth::id();
            $location->uuid = \Str::uuid();
          
            $res = $location->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','location create successfully');
            return redirect()->route('company_location.index');
           


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
        $location = CompanyLocation::where('is_active',1)->get();
        return view('admin.modules.company_location.index',compact('location'));
    }   


    public function show($id)
    {
        $location = CompanyLocation::where('uuid',$id)->first();
        return view('admin.modules.company_location.show',compact('location'));
    }

    
    public function edit($id)
    {
        $location = CompanyLocation::where('uuid',$id)->first();
        return view('admin.modules.company_location.edit',compact('location'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
         $location = $request->validate([
            'name'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $location = CompanyLocation::where('uuid',$id)->first();
            $location->name = $request->name;
            $location->updated_by  = Auth::id();
            $res = $location->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','location update successfully');
            return redirect()->route('company_location.index');
           


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
           $location = CompanyLocation::where('uuid',$id)->first();
           $location->is_active = 0;
           $location->updated_by  = Auth::id();
           $res = $location->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','location delete successfully');
           return redirect()->route('company_location.index');
          


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

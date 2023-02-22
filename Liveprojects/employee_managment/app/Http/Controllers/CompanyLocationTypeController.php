<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyLocationType;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class CompanyLocationTypeController extends Controller
{
    public function create()
    {
       return view('admin.modules.company_location_type.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $location_type = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $location_type = new CompanyLocationType;
            $location_type->type = $request->type;
            $location_type->created_by = Auth::id();
            $location_type->uuid = \Str::uuid();
          
            $res = $location_type->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','location type create successfully');
           
            return redirect()->route('company_location_type.index');
           


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
        $location_type = CompanyLocationType::where('is_active',1)->get();
        return view('admin.modules.company_location_type.index',compact('location_type'));
    }   


    public function show($id)
    {
        $location_type = CompanyLocationType::where('uuid',$id)->first();
        return view('admin.modules.company_location_type.show',compact('location_type'));
    }

    
    public function edit($id)
    {
        $location_type = CompanyLocationType::where('uuid',$id)->first();
        return view('admin.modules.company_location_type.edit',compact('location_type'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $location_type = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $location_type = CompanyLocationType::where('uuid',$id)->first();;
            $location_type -> type = $request->type;
            $location_type->updated_by = Auth::id();
            $res = $location_type ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','location update successfully');
            return redirect()->route('company_location_type.index');
           


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
           $location_type = CompanyLocationType::where('uuid',$id)->first();
           $location_type->is_active = 0;
           $location_type->updated_by = Auth::id();
           $res = $location_type->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','location type  delete successfully');
           return redirect()->route('company_location_type.index');
          


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

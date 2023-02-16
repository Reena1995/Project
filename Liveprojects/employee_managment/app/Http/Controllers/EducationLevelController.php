<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationLevel;
use DB;
use Session;
use Log;
use Validate;

class EducationLevelController extends Controller
{
    public function create()
    {
       return view('admin.modules.education_level.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $edulevel= $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $edulevel = new EducationLevel;
            $edulevel->name = $request->name;
            $edulevel->uuid = \Str::uuid();
          
            $res = $edulevel->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','education level  create successfully');
            return redirect()->route('education_level.index');
           


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
        $edulevel = EducationLevel::where('is_active',1)->get();
        return view('admin.modules.education_level.index',compact('edulevel'));
    }   


    public function show($id)
    {
        $edulevel = EducationLevel::where('uuid',$id)->first();
        return view('admin.modules.education_level.show',compact('edulevel'));
    }

    
    public function edit($id)
    {
        $edulevel = EducationLevel::where('uuid',$id)->first();
        return view('admin.modules.education_level.edit',compact('edulevel'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $medium = $request->validate([
            'name'=>'required|alpha',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $edulevel = EducationLevel::where('uuid',$id)->first();;
            $edulevel -> name = $request->name;
            $res = $edulevel ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','education level  update successfully');
            return redirect()->route('education_level.index');
           


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
           $edulevel = EducationLevel::where('uuid',$id)->first();
           $edulevel->is_active = 0;
           $res = $edulevel->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','education level  delete successfully');
           return redirect()->route('education_level.index');
          


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

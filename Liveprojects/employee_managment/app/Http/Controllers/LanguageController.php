<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use DB;
use Session;
use Log;
use Validate;

class LanguageController extends Controller
{
    public function create()
    {
       return view('admin.modules.language.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $language= $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $language = new Language;
            $language->name = $request->name;
            $language->uuid = \Str::uuid();
          
            $res = $language->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','Languages create successfully');
            return redirect()->route('language.index');
           


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
        $language = Language::where('is_active',1)->get();
        return view('admin.modules.language.index',compact('language'));
    }   


    public function show($id)
    {
        $language = Language::where('uuid',$id)->first();
        return view('admin.modules.language.show',compact('language'));
    }

    
    public function edit($id)
    {
        $language = Language::where('uuid',$id)->first();
        return view('admin.modules.language.edit',compact('language'));
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
            $language = Language::where('uuid',$id)->first();;
            $language -> name = $request->name;
            $res = $language ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','language update successfully');
            return redirect()->route('language.index');
           


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
           $language = Language::where('uuid',$id)->first();
           $language->is_active = 0;
           $res = $language->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','Langauge   delete successfully');
           return redirect()->route('language.index');
          


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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetType;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class AssetTypeController extends Controller
{
    public function create()
    {
       return view('admin.modules.asset_type.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $asstype= $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $asstype = new AssetType;
            $asstype->type = $request->type;
            $asstype->uuid = \Str::uuid();
            $asstype->created_by = Auth::id();
          
            $res = $asstype->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset brand create successfully');
            return redirect()->route('asset_type.index');
           


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
        $asstype = AssetType::where('is_active',1)->get();
        return view('admin.modules.asset_type.index',compact('asstype'));
    }   


    public function show($id)
    {
        $asstype = AssetType::where('uuid',$id)->first();
        return view('admin.modules.asset_type.show',compact('asstype'));
    }

    
    public function edit($id)
    {
        $asstype = AssetType::where('uuid',$id)->first();
        return view('admin.modules.asset_type.edit',compact('asstype'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $asstype = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $asstype = AssetType::where('uuid',$id)->first();;
            $asstype -> type = $request->type;
            $asstype->updated_by = Auth::id();
            $res = $asstype ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset type update successfully');
            return redirect()->route('asset_type.index');
           


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
           $asstype = AssetType::where('uuid',$id)->first();
           $asstype->is_active = 0;
           $asstype->updated_by = Auth::id();
           $res = $asstype->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','asset type  delete successfully');
           return redirect()->route('asset_type.index');
          


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

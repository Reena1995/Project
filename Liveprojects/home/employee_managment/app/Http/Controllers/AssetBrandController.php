<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssetBrand;
use DB;
use Session;
use Log;
use Validate;

class AssetBrandController extends Controller
{
    public function create()
    {
       return view('admin.modules.asset_brand.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $assbrand= $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $assbrand = new AssetBrand;
            $assbrand->name = $request->name;
            $assbrand->uuid = \Str::uuid();
          
            $res = $assbrand->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset brand create successfully');
            return redirect()->route('asset_brand.index');
           


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
        $assbrand = AssetBrand::where('is_active',1)->get();
        return view('admin.modules.asset_brand.index',compact('assbrand'));
    }   


    public function show($id)
    {
        $assbrand = AssetBrand::where('uuid',$id)->first();
        return view('admin.modules.asset_brand.show',compact('assbrand'));
    }

    
    public function edit($id)
    {
        $assbrand = AssetBrand::where('uuid',$id)->first();
        return view('admin.modules.asset_brand.edit',compact('assbrand'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $assbrand = $request->validate([
            'name'=>'required|alpha',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $assbrand = AssetBrand::where('uuid',$id)->first();;
            $assbrand -> name = $request->name;
            $res = $assbrand ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset brand update successfully');
            return redirect()->route('asset_brand.index');
           


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
           $assbrand = AssetBrand::where('uuid',$id)->first();
           $assbrand->is_active = 0;
           $res = $assbrand->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','asset brand  delete successfully');
           return redirect()->route('asset_brand.index');
          


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

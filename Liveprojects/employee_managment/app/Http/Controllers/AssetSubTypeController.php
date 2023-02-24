<?php

namespace App\Http\Controllers;
use App\Models\AssetType;
use App\Models\AssetSubType;

use Illuminate\Http\Request;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class AssetSubTypeController extends Controller
{
    public function create()
    {  
        $asstype=AssetType::where('is_active',1)->orderBy('type', 'ASC')->get();
        return view('admin.modules.asset_sub_type.add',compact('asstype'));
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $ass_sub_type = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'asset_type_id'=>'required'

        ]);
        // dd('AAAA');
        
        try{
            Log::info('bbbbbbb');
            DB::beginTransaction();
            $ass_sub_type = new AssetSubType();
            $ass_sub_type->type = $request->type;
            $ass_sub_type->asset_type_id = $request->asset_type_id;
            $ass_sub_type->uuid = \Str::uuid();
            $ass_sub_type->created_by = Auth::id();
            $res = $ass_sub_type->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset sub type create successfully');
           
            return redirect()->route('asset_sub_type.index');
           


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
        $ass_sub_type = AssetSubType::where('is_active',1)->paginate(5);
        return view('admin.modules.asset_sub_type.index',compact('ass_sub_type'));
    }   


    public function show($id)
    {
        Log::info('$id');
        Log::info($id);
        $ass_type=AssetType::where('is_active',1)->orderBy('type', 'ASC')->first();
        $ass_sub_type=AssetSubType::where('uuid',$id)->first();
        return view('admin.modules.asset_sub_type.show',compact('ass_type','ass_sub_type'));
    }
   
    

    
    public function edit($id)
    {
        $ass_type=AssetType::where('is_active',1)->orderBy('type', 'ASC')->get();
        $ass_sub_type = AssetSubType::where('uuid',$id)->first();
        return view('admin.modules.asset_sub_type.edit',compact('ass_type','ass_sub_type'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
         $designation = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'asset_type_id'=>'required',
            

        ]); 
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $ass_sub_type = AssetSubType::where('uuid',$id)->first();
            $ass_sub_type->type = $request->type;
            $ass_sub_type->asset_type_id = $request->asset_type_id;
            $ass_sub_type->updated_by  = Auth::id();
            $res = $ass_sub_type->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','asset_sub_type update  successfully');
            return redirect()->route('asset_sub_type.index');
           


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
           $ass_sub_type = AssetSubType::where('uuid',$id)->first();
           $ass_sub_type->is_active = 0;
           $ass_sub_type->updated_by  = Auth::id();
           $res = $ass_sub_type->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','asset_sub_type delete successfully');
           return redirect()->route('asset_sub_type.index');
          


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

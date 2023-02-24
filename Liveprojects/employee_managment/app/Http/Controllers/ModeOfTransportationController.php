<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModeOfTransportation;
use DB;
use Session;
use Log;
use Validate;
use Auth;


class ModeOfTransportationController extends Controller
{
    
    public function create()
    {
       return view('admin.modules.mode_of_transportation.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $modetype= $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $modetype = new ModeOfTransportation;
            $modetype->type = $request->type;
            $modetype->created_by = Auth::id();
            $modetype->uuid = \Str::uuid();
          
            $res = $modetype->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','mode of transportation create successfully');
            return redirect()->route('mode_of_transportation.index');
           


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
        $modetype = ModeOfTransportation::where('is_active',1)->paginate(5);
        return view('admin.modules.mode_of_transportation.index',compact('modetype'));
    }   


    public function show($id)
    {
        $modetype = ModeOfTransportation::where('uuid',$id)->first();
        return view('admin.modules.mode_of_transportation.show',compact('modetype'));
    }

    
    public function edit($id)
    {
        $modetype = ModeOfTransportation::where('uuid',$id)->first();
        return view('admin.modules.mode_of_transportation.edit',compact('modetype'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $modetype = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $modetype = ModeOfTransportation::where('uuid',$id)->first();;
            $modetype -> type = $request->type;
            $modetype->updated_by = Auth::id();
            $res = $modetype ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','mode of transportation update successfully');
            return redirect()->route('mode_of_transportation.index');
           


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
           $modetype = ModeOfTransportation::where('uuid',$id)->first();
           $modetype->is_active = 0;
           $modetype->updated_by = Auth::id();
           $res = $modetype->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','mode of transportation delete successfully');
           return redirect()->route('mode_of_transportation.index');
          


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

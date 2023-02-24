<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CurrentResidenceType;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class CurrentResidenceTypeController extends Controller
{
    public function create()
    {
       return view('admin.modules.current_residence_type.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $resitype= $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $resitype = new CurrentResidenceType;
            $resitype->type = $request->type;
            $resitype->created_by = Auth::id();
            $resitype->uuid = \Str::uuid();
          
            $res = $resitype->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','current_residence_type create successfully');
            return redirect()->route('current_residence_type.index');
           


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
        $resitype = CurrentResidenceType::where('is_active',1)->paginate(5);
        return view('admin.modules.current_residence_type.index',compact('resitype'));
    }   


    public function show($id)
    {
        $resitype = CurrentResidenceType::where('uuid',$id)->first();
        return view('admin.modules.current_residence_type.show',compact('resitype'));
    }

    
    public function edit($id)
    {
        $resitype = CurrentResidenceType::where('uuid',$id)->first();
        return view('admin.modules.current_residence_type.edit',compact('resitype'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $resitype = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $resitype = CurrentResidenceType::where('uuid',$id)->first();;
            $resitype -> type = $request->type;
            $resitype->updated_by = Auth::id();
            $res = $resitype ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','current_residence_type update successfully');
            return redirect()->route('current_residence_type.index');
           


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
           $resitype = CurrentResidenceType::where('uuid',$id)->first();
           $resitype->is_active = 0;
           $resitype->updated_by = Auth::id();
           $res = $resitype->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','current_residence_type delete successfully');
           return redirect()->route('current_residence_type.index');
          


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

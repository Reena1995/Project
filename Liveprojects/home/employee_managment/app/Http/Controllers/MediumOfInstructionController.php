<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MediumOfInstruction;
use DB;
use Session;
use Log;
use Validate;

class MediumOfInstructionController extends Controller
{
    public function create()
    {
       return view('admin.modules.medium_instruction.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $medium= $request->validate([
            'name'=>'required|alpha',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $medium = new MediumOfInstruction;
            $medium->name = $request->name;
            $medium->uuid = \Str::uuid();
          
            $res = $medium->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','medium instruction create successfully');
           
            return redirect()->route('medium_instruction.index');
           


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
        $medium = MediumOfInstruction::where('is_active',1)->get();
        return view('admin.modules.medium_instruction.index',compact('medium'));
    }   


    public function show($id)
    {
        $medium = MediumOfInstruction::where('uuid',$id)->first();
        return view('admin.modules.medium_instruction.show',compact('medium'));
    }

    
    public function edit($id)
    {
        $medium = MediumOfInstruction::where('uuid',$id)->first();
        return view('admin.modules.medium_instruction.edit',compact('medium'));
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
            $medium = MediumOfInstruction::where('uuid',$id)->first();;
            $medium -> name = $request->name;
            $res = $medium ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','medium instruction update successfully');
            return redirect()->route('medium_instruction.index');
           


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
           $medium = MediumOfInstruction::where('uuid',$id)->first();
           $medium->is_active = 0;
           $res = $medium->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success','medium instruction  delete successfully');
           return redirect()->route('medium_instruction.index');
          


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

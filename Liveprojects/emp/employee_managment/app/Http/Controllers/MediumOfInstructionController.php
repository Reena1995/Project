<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\MediumOfInstruction;
use DB;
use Log;
use Auth;
use Session;
use Validate;

class MediumOfInstructionController extends Controller
{
    public function index()
    {
        $medium = MediumOfInstruction::where('is_active',1)->paginate(5);
        return view('admin.modules.medium_instruction.index',compact('medium'));
    }   

    public function create()
    {
       return view('admin.modules.medium_instruction.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $medium = $request->validate([
            'medium_instruction_name'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $medium = new MediumOfInstruction;
            $medium->name = $request->medium_instruction_name;
            $medium->created_by = Auth::id();
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
           


        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:MediumOfInstructionController function:store");
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();
        }    
        catch (\Exception $e) {
                Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
                Log::info('Error Code: ' . $e->getCode());
                Log::info('Error Message: ' . $e->getMessage());
                Session::flash('danger', "Internal server error.Please try again later.");
                return redirect()->back();

        }
    }

   
    


    public function show($id)
    {
        $post =  MediumOfInstruction::where('uuid',$id)->first();

        if( is_null($post) ) {

            return abort(404);

        } else {

            $medium = MediumOfInstruction::where('uuid',$id)->first();
            return view('admin.modules.medium_instruction.show',compact('medium'));
        }
    }    

    
    public function edit($id)
    {
        $post =  MediumOfInstruction::where('uuid',$id)->first();

        if( is_null($post) ) {

            return abort(404);

        } else {

            $medium = MediumOfInstruction::where('uuid',$id)->first();
            return view('admin.modules.medium_instruction.edit',compact('medium'));
        }    
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $medium = $request->validate([
            'medium_instruction_name'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $medium = MediumOfInstruction::where('uuid',$id)->first();;
            $medium -> name = $request->medium_instruction_name;
            $medium->updated_by = Auth::id();
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
           


        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:MediumOfInstructionController function:update");
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();
        }    
        catch (\Exception $e) {
                Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
                Log::info('Error Code: ' . $e->getCode());
                Log::info('Error Message: ' . $e->getMessage());
                Session::flash('danger', "Internal server error.Please try again later.");
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
           $medium->updated_by = Auth::id();
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
          


       }catch (\Illuminate\Database\QueryException $e) {
        Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
        Log::info('Error Code: ' . $e->getCode());
        Log::info('Error Message: ' . $e->getMessage());
        Log::info("Exiting class:MediumOfInstructionController function:delete");
        Session::flash('danger', "Internal server error.Please try again later.");
        return redirect()->back();
    }    
    catch (\Exception $e) {
            Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();

    }

      

    }

    public function destroy($id)
    {
        //
    }
}

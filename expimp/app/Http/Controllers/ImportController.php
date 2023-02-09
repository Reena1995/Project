<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Import;
use DB;

class ImportController extends Controller
{
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('home');
    }

  
    public function store(Request $request)
    {
        
        try{
			DB::beginTransaction();
          
            $file=$request->file('importfile');  // get file
            $file_name=time().rand()."_csv.".$request->file('importfile')->getClientOriginalExtension();// make file name
            $file->move('Upload/',$file_name); //file name move upload in public		
            
            $fileName = public_path('Upload/'.$file_name);
            $data = [
                'fileName'=>$fileName,
            ];


            $cronedata = [];
            $cronedata = $data;

            $crone = new Import;
            $crone->name = $cronedata['0'];
            $crone->description =  $cronedata['1'];
            $crone->price =  $cronedata['2'];
           
            $res = $crone->save();

          

            DB::commit();
            return redirect()->back()->withSuccess('file upload successfully');

        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                // return response()->json(['success'=>false,'message'=>$exception->getMessage()],500);
                return redirect()->back()->witherror('Internal server error.please try again later2.');
        }
       
    }

    
   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}

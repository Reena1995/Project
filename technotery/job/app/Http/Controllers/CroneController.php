<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crone;
use App\Jobs\CroneSendJob;
use DB;

class CroneController extends Controller
{
    
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('cron');
    }

   
    public function store(Request $request)
    { 

       
        try{
			DB::beginTransaction();
          
            $file=$request->file('image');  // get file
            $file_name=time().rand()."_csv.".$request->file('image')->getClientOriginalExtension();// make file name
            $file->move('Upload/Crone',$file_name); //file name move upload in public		
            
            $fileName = public_path('Upload/Crone/'.$file_name);
            $data = [
                'fileName'=>$fileName,
            ];

            $job = (new CroneSendJob($data))
                    ->delay(
                        now()
                        ->addSeconds(5)
                    );
            dispatch($job);

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
    
    public function readfile()
    {
       $cronedata = [];
       if(($open = fopen("Upload/Crone/import.csv","r")) !== FALSE)
       {
            while(($data = fgetcsv($open,",")) !== FALSE)
            {
                $cronedata[] = $data;
                
            }
            fclose($open);
       }

       echo "<pre>";
       print_r($cronedata);
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

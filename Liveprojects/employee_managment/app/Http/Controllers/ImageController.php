<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use DB;
use Session;
use Log;
use Validate;


class ImageController extends Controller
{
   
    public function index()
    {
        //
    }

    public function gallery()
    {
        return view('admin.modules.pracone');
    }
   
    public function create()
    {
        return view('admin.modules.prac');
    }

   
    public function store(Request $request)
    {
        /* $gallery = $request->validate([
            'image'=>'required',

        ]);  */
        try{
                $res = false;
                Log::info('bbbbbbb');
                DB::beginTransaction();
                $filesarr = [];
                $deletedImage = $request->input('deletedImages') ?? '';
                $deletedImages = explode(',',$deletedImage) ?? [];
                if($request->hasfile('bannerImage')){
                    foreach($request->bannerImage as $file){
                        \Log::info($file);
                        $fileName = $file->getClientOriginalName();
                        
                        if(!in_array($fileName,$deletedImages)){
                            $gallery = new Image();
                        
                            $file_name = time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                            $file->move('console/upload/',$file_name); //file name move upload in public	
                            $gallery->images = $file_name; // file name store in db

                            $res = $gallery->save();
                        }
                    }
                }
                if(!$res)
                {
                    DB::rollback();
                    Session::flash('error','Internal server error please try again later.');
                    return redirect()->back();
                }
                DB::commit();
                Session::flash('success','upload  successfully');
                return redirect()->back();
                


            }
            catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
                return redirect()->back();

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

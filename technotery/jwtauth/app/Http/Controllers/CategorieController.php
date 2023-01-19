<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use Validator;
use DB;
use Log;
use Session;
use Str;
use Storage;
use  Auth;

class CategorieController extends Controller
{
    public function indexapi()
    { 
        
        // dd(Auth::user());
        if(auth()->user())
        {

            if(Auth::user()->role_id == 1)
            {
                $categories = Categorie::where('is_active',1)->get(); 
                return response()->json(['data'=>$categories],200);
            }
        }
        else{
            return response()->json(['msg'=>'you are not authicated'],500);
        }
        
    }

    public function addapi(Request $request)
    {
         // dd(Auth::user());
        if(auth()->user())
        {
            if(Auth::user()->role_id == 1)
            {
                $rules = [
                    "name" => "required|alpha",
                    "image" => "required",
                    
                ];
                $messages = [
                    "name.required" => "Name is required",
                    "image.required" => "Image is required",
                ];
                $validator = Validator::make($request->json()->all(),$rules, $messages);
                if ($validator->fails())
                {
                    return response()->json(['status' => false,"validation-error" => $validator->errors()],422);
                }
                else
                {
                    try{
    
                        $category = new Categorie;
                        $image = $request->input('image'); // image base64 encoded
                        $base64_str = substr($image, strpos($image, ",")+1);
                        $imageInfo = explode(";base64,", $image);
                        $imgExt = str_replace('data:image/', '', $imageInfo[0]);      
                        $image = str_replace(' ', '+', $imageInfo[1]);
                        $imageName = time().Str::random(10).".".$imgExt;
                        Storage::disk('public')->put('upload/category/'.$imageName, base64_decode($image));
                
                
                        $category->name = $request->name;
                        $category->uuid = \Str::uuid();
                        $category->image = $imageName;
                        $res = $category->save();
    
                        
                        if(!$res)
                        {
                            DB::rollback();
                            return response()->json(['msg'=>'Internal1 server error please try again later'],500);
                            
                        }
                        DB::commit();
                        return response()->json(['msg'=>'categrory add successfully'],200);
                    
                    }
                    catch (\Exception $exception) {
                        \Log::info("ERROR: CODE: " . $exception->getCode());
                        \Log::info("ERROR: Message: " . $exception->getMessage());
                        DB::rollback();
                        return response()->json(['msg'=>'Internal2 server error please try again later'],500);
                        
            
                    }
                }
            } 
        }
        else{
            return response()->json(['error'=>'you are not authicated'],500);
        }   
       
        
    }
    public function updateapi(Request $request,$id)
    { 
        // dd(Auth::user());
        if(auth()->user())
        {
            if(Auth::user()->role_id == 1)
            {
                $rules = [
                    "name" => "required|alpha",
                    "image" => "required",
                    
                ];
                $messages = [
                    "name.required" => "Name is required",
                    "image.required" => "Image is required",
                ];
                $validator = Validator::make($request->json()->all(),$rules, $messages);
                if ($validator->fails())
                {
                    return response()->json(['status' => false,"validation-error" => $validator->errors()],422);
                }
                else
                {   
                    try{
    
                        $category = Categorie::where('id',$id)->first();
                        if(is_null($category))
                        {
                            return response()->json(['msg'=>'bad request.'],400);
    
                        }
                        $image = $request->input('image'); // image base64 encoded
                        $base64_str = substr($image, strpos($image, ",")+1);
                        $imageInfo = explode(";base64,", $image);
                        $imgExt = str_replace('data:image/', '', $imageInfo[0]);      
                        $image = str_replace(' ', '+', $imageInfo[1]);
                        $imageName = time().Str::random(10).".".$imgExt;
                        Storage::disk('public')->put('upload/category/'.$imageName, base64_decode($image));
    
                
                        $category->name = $request->name;
                        $category->image = $imageName;
                        $res = $category->save();
                        
                        if(!$res)
                        {
                            DB::rollback();
                            return response()->json(['error'=>'Internal1 server error please try again later'],500);
                            
                        }
                        DB::commit();
                        return response()->json(['msg'=>'categrory update successfully'],200);
    
                    }
                    catch (\Exception $exception) {
                        \Log::info("ERROR: CODE: " . $exception->getCode());
                        \Log::info("ERROR: Message: " . $exception->getMessage());
                        DB::rollback();
                        return response()->json(['error'=>'Internal2 server error please try again later'],500);
                        
            
                    }
                        
                }
            }  
        }
        else{
            return response()->json(['error'=>'you are not authicated'],500);
        }    
   
        

    }
    public function deleteapi($id)
    { 
        // dd(Auth::user());
        if(auth()->user())
        {
            if(Auth::user()->role_id == 1)
            {
                $category = Categorie::where('id',$id)->first();
                $res = $category->delete();
                
                if($res)
                {
                return response()->json(['msg'=>'categrory delete successfully'],200);
                }
                else
                {
                return response()->json(['msg'=>'categrory not delete successfully'],500);
                }
            
            }
        }
        else
        {
            return response()->json(['error'=>'you are not authicated'],500);
        }    
    }


}

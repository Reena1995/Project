<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Validator;
use DB;
use Log;
use Session;
use Str;
use Storage;
class CategoryController extends Controller
{
    
    public function index()
    { 
        $categories = Category::where('is_active',1)->get();
        // dd( $categories);
        return view("Backend.Category.index",compact('categories'));
        
    }
    
    

    
   
    public function create()
    {
        return view('Backend.Category.category');
    }

    
    
    public function store(Request $request)
    {
        Log::info('wwwewewe');
         $category = $request->validate([
            'name'=>'required|alpha',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg',

        ]); 
        

        Log::info('aaaaa');
       
        try{
            DB::beginTransaction();
            $category = new category;
            $category->name = $request->name;
            $category->uuid = \Str::uuid();
            // $name=$category->name=$request->CategoryName;

            $file=$request->file('image');  // get file
            $file_name=time()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
            $file->move('Upload/Category',$file_name); //file name move upload in public		
            $category->image=$file_name; // file name store in db

            $res = $category->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
                // $data=['name'=>$name,'image'=>$image];
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','Category create successfully');
            return redirect()->route('category.index');


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
        $category = Category::where('uuid',$id)->first();
        
        return view('Backend.Category.show',compact('category'));
    }

    public function edit($id)
    {
        $category = Category::where('uuid',$id)->first();
        
        return view('Backend.Category.edit',compact('category'));
        
        
    }

   
    public function update(Request $request, $id)
    {
        $category = Category::where('uuid',$id)->first();
        $category->name = $request->name;
        // $name=$category->name=$request->CategoryName;

        $file=$request->file('image');  // get file
        $file_name=time()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
        $file->move('Upload/Category',$file_name); //file name move upload in public		
        $category->image=$file_name; // file name store in db

         $res = $category->save();
         if(!$res)
         {
            //  DB::rollback();
            //  Session::flash('error','Internal server error please try again later.');
            //  // $data=['name'=>$name,'image'=>$image];
         
             return redirect()->back();
         }
        //  DB::commit();
        //  Session::flash('success','Category create successfully');
         return redirect()->route('category.index');

    }

  
    public function destroy($id)
    {
        //
    }

    public function indexapi()
    { 
        $categories = Category::where('is_active',1)->get(); 
        return response()->json(['data'=>$categories],200);
    }

    public function addapi(Request $request)
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
                $category = new category;
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
    public function updateapi(Request $request,$id)
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

                $category = Category::where('id',$id)->first();
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
    public function deleteapi($id)
    { 
       
        $category = Category::where('id',$id)->first();
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

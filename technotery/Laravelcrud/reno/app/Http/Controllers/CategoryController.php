<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use DB;
use Log;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        return view("Backend.Category.index");
        
    }
    public function frontedcategory()
    {
        $cats = Category::where('is_active',1)->get(); 
        // dd($cats);
        return view("Frontend.index",compact('cats'));
        
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Category.category');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Log::info('wwwewewe');
         $category = $request->validate([
            'name'=>'required|alpha',
            'image'=>'required|mimes:jpg,png,jpeg,gif,svg',

        ]); 
        

        Log::info('aaaaa');
        DB::beginTransaction();
        try{
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::where('uuid',$id)->first();
        
        return view('Backend.Category.show',compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('uuid',$id)->first();
        
        return view('Backend.Category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    
}

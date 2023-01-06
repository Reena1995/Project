<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Product,Category,Favourite};
use Auth;
use Log;
use DB;

class FrontendProductController extends Controller
{
    
    // public function frontedproduct($id)
    // {
        
    //     return view("Frontend.productdetail");  
    // }

    public function frontedproduct($id)
    {
        
        $productts = Product::where('uuid',$id)->with(['proImages','proDetail'])->first();
        
        return view('Frontend.productdetail',compact('productts'));
    
    }
    public function frontedallproduct()
    {
        $categoryName = '';
        $allproducts = Product::where('is_active',1)->with(['proImages','proDetail'])->get();
        
        return view('Frontend.allproduct',compact('allproducts','categoryName'));
    
    }

    public function frontedfindproduct($id)
    { 
        $id = decrypt($id);
        $categoryName = Category::whereId($id)->first()->name ?? '';
        $allproducts = Product::where('category_id',$id)->where('is_active',1)->with(['proImages','proDetail'])->get();
        return view('Frontend.allproduct',compact('allproducts','categoryName'));
    }

    /*   wishlist*/ 
     public function favourite(Request $request)
    { 

        DB::beginTransaction();
        try{
            $userid=Auth::user()->id;
            // \Log::info($userid);
            

            $favourite = new Favourite;
            $favourite->user_id= $userid;
            $favourite->Product_id= $request->id;
            $favourite->uuid = \Str::uuid();
    
            $res = $favourite->save();

           
            if(!$res)
            {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
               
            } 
            DB::commit();
            return response()->json(['success'=>true,'message'=>'Add Favourite successfully'],200);
             

        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                return response()->json(['message'=>'Internal server error.please try again later.'],500);

        }
       
       
    }
    
    public function index()
    {
        //
    }

    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

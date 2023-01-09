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
            $productId = $request->id;
            // \Log::info($userid);
             
            $favourite = Favourite::where('product_id',$productId)->where('user_id',$userid)->where('is_active',1)->first();
            \Log::info($favourite);
            if(is_null($favourite))
            {
                $newFavourite = new Favourite();
                $newFavourite->user_id= $userid;
                $newFavourite->Product_id= $productId;
                $newFavourite->uuid = \Str::uuid();
                $newFavourite->is_active = 1;
               $res = $newFavourite->save();
               if(!$res)
                {
                    DB::rollback();
                    return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                
                } 
                $fav = 1;
               $msg= "add successfully";

                
            }else{
                $favourite->is_active = 0;
                $res = $favourite->update();
                if(!$res)
                {
                    DB::rollback();
                    return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                
                } 
               $fav = 0;
               $msg= "remove successfully";
            }
            \Log::info($favourite);
          /*   $fav = '1';
            $msg = 'Favourite';
            if(!empty($favourite) && !empty($favourite->id)){
                if($favourite->is_active == '1'){
                    $fav = '0';
                    $msg = 'Un-Favourite';
                 
                }
                
            }else{
                $favourite = new Favourite();
                $favourite->user_id= $userid;
                $favourite->Product_id= $productId;
                $favourite->uuid = \Str::uuid();
            }
            $favourite->is_active = $fav;
            $res = $favourite->save(); */
           
            
            DB::commit();
            // return response()->json(['success'=>true,'message'=>$msg],200);
            return response()->json(['success'=>true,'faveriot'=>$fav,'message'=>$msg],200);
            // Alert::success('Congrats', 'You\'ve Successfully Registered');
             

        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);

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

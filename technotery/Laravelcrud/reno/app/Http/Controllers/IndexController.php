<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Category,Product,Favourite};
use Auth;
use DB;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    public function frontedcategory()
     {
        // $userid=Auth::user();
        // dd($userid);
        $cats = Category::where('is_active',1)->get(); 
        // $product = Product::where('is_active',1)->get();
        $productss = Product::orderBy('id','DESC')->limit(4)->get(); 
      
        // DD($product);
    
        
        return view("Frontend.index",compact('cats','productss'));
        
        
    }

    public function wishlist()
     {
        $whishlist = Favourite::where('user_id',Auth::id())->where('is_active',1)->get(); 
        // dd($whishlist);
        return view("Frontend.wishlist",compact('whishlist'));
        
    }

    public function unwishlist(Request $request)
     {
        DB::beginTransaction();
        try{
            $wishId = $request->input('id');
            // \Log::info($userid);
             
            $favourite = Favourite::where('id',$wishId)->first();
            \Log::info(json_encode($favourite));
            $favourite->is_active = 0;
            $res = $favourite->update();
            if(!$res) {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
            }
            \Log::info($favourite);            
            DB::commit(); 
            return response()->json(['success'=>true,'message'=>"Product remove from wishlist"],200);
        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                return response()->json(['success'=>false,'message1'=>'Internal server error.please try again later.'],500);

        }
       
       
        return view("Frontend.wishlist");
        
    }
    
   
    

    



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

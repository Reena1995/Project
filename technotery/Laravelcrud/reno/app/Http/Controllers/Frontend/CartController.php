<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product,Category,Favourite,Productcart};
use Log;
use DB;
use Auth;
use Str;

class CartController extends Controller
{
    public function addtocart(Request $request)
    {
        DB::beginTransaction();
        try{
            
                $newProductcart = new Productcart();
                $userid=Auth::user()->id;
                $newProductcart->user_id= $userid;
                $newProductcart->uuid = Str::uuid();
                $newProductcart->total = 0;
                $res = $newProductcart->save();         
                \Log::info($res);
                if(!$res)
                {
                        DB::rollback();
                        return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                    
                } 
                else{
                        
                }
                
                DB::commit();
                return response()->json(['success'=>true,'message'=>'data enter succesfuuly'],200);
            
             

        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal2 server error.please try again later.'],500);

        }
       
       
        
    }
   
    public function index()
    {
        //
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
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

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{Product,Category,Favourite,Productcart,Addtocart};
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
                $productId = $request->id;
                $product = Product::where('id',$productId)->where('is_active',1)->first();
                
               
                $Qunatity = $request->quantity_val;
                $totalval=$product->proDetail->discountprice;
                $totalfinal=$totalval*$Qunatity;
                $userid=Auth::user()->id;



                    $newProductcart = new Productcart();
                    $newProductcart->user_id= $userid;
                    $newProductcart->uuid = Str::uuid();
                    $newProductcart->total =0;
                    $res = $newProductcart->save();
                
                // $checkproductcart = Productcart::where('user_id',$userid)->where('is_active',1)->first();

                // if(is_null($checkproductcart))
                // {
                //     $newProductcart = new Productcart();
                //     $newProductcart->user_id= $userid;
                //     $newProductcart->uuid = Str::uuid();
                //     $newProductcart->total =0;
                //     $result = $newProductcart->save();
                // }
                // else
                // {
                    
                //     return response()->json(['success'=>false,'message'=>'already user enter.'],500);
                // }
                        
                // // \Log::info($res);
                ///////////////////////////////
                $priceval = $product->proDetail->discountprice;
                // $productId = $request->id;
                    // $productId = $request->id;
                    $newAddcart = new Addtocart(); 
                    $newAddcart->user_id= $userid;
                    $newAddcart->product_id= $productId;
                    $newAddcart->uuid = Str::uuid();
                    $newAddcart->quantity= $Qunatity;
                    $newAddcart->price= $priceval;
                    $newAddcart->cart_id= $newProductcart->id;
                    $res =$newAddcart->save(); 

                    if(!$res)
                    {
                        DB::rollback();
                        return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                
                    } 
                    
                // $checkcart = Addtocart::where('product_id',$productId)->where('user_id',$userid)->where('is_active',1)->first();
                
                
                
                DB::commit();
                return response()->json(['success'=>true,'message'=>'add to cart successfully'],200);
            
             

        }
        catch (\Exception $exception) {
                \Log::info("ERROR: CODE: " . $exception->getCode());
                \Log::info("ERROR: Message: " . $exception->getMessage());
                DB::rollback();
                // return response()->json(['success'=>false,'message'=>'Internal2 server error.please try again later.'],500);
                return response()->json(['success'=>false,'message'=>$exception->getMessage()],500);

        }
       
       
        
    }

    public function addcartview()
    {
        $addcart = Addtocart::where('user_id',Auth::id())->where('is_active',1)->get(); 
        return view("Frontend.addtocart",compact('addcart'));
    }
   
    public function removecartview(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $cartId = $request->input('id');
            // \Log::info($userid);
             
            $addcart = Addtocart::where('id',$cartId)->first();
            // \Log::info(json_encode($favourite));
            $addcart->is_active = 0;
            $res = $addcart->update();
            if(!$res) {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
            }

            DB::commit(); 
            return response()->json(['success'=>true,'message'=>"Product remove from addtocart"],200);
        }
        catch (\Exception $exception) 
        {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            return response()->json(['success'=>false,'message1'=>'Internal server error.please try again later.'],500);

        }
        return view("Frontend.addtocart");
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

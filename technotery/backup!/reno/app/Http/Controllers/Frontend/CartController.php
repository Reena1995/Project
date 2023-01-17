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
                // $totalval=$product->proDetail->discountprice;
                // $totalfinal=$totalval*$Qunatity;
                $userid=Auth::user()->id;

              

                    // $newProductcart = new Productcart();
                    // $newProductcart->user_id= $userid;
                    // $newProductcart->uuid = Str::uuid();
                    // $newProductcart->total =0;
                    // $res = $newProductcart->save();
                    $priceval = $product->proDetail->discountprice;
                
                $totalOfCart = Productcart::where('user_id',$userid)->where('is_active',1)->first();
           
                if(is_null($totalOfCart))
                {
                    $totalOfCart = new Productcart();
                    $totalOfCart->user_id= $userid;
                    $totalOfCart->uuid = Str::uuid();
                    $totalOfCart->total =($priceval * $Qunatity);
                    $res = $totalOfCart->save();
                }else{
                    $totalPrice = (($totalOfCart->total)  + ($priceval * $Qunatity));
                    \Log::info($totalOfCart);
                    $totalOfCart->total = $totalPrice;
                    
                    $totalOfCart->update();
                }
                
                        
                
                ///////////////////////////////
                $totaval=$priceval*$Qunatity;
                $checkcart = Addtocart::where('product_id',$productId)->where('user_id',$userid)->where('is_active',1)->first();
                  if(is_null($checkcart))
                  {

                      $newAddcart = new Addtocart(); 
                      $newAddcart->user_id= $userid;
                      $newAddcart->product_id= $productId;
                      $newAddcart->uuid = Str::uuid();
                      $newAddcart->quantity= $Qunatity;
                      $newAddcart->price= $priceval;
                      $newAddcart->total= $totaval;
                      $newAddcart->cart_id= $totalOfCart->id;
                      $res =$newAddcart->save(); 
  
                      if(!$res)
                      {
                          DB::rollback();
                          return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                  
                      } 
                  }else{
                    $checkcart->quantity= $Qunatity;
                    $checkcart->price= $priceval;
                    $checkcart->total= $totaval;
                    $res =$checkcart->update(); 
                    
                    $finalCartPrice = Addtocart::where('user_id',$userid)->where('is_active',1)->get()->sum('total'); 
                    $totalOfCart->total = $finalCartPrice;
                    $totalOfCart->update();
                      if(!$res)
                      {
                          DB::rollback();
                          return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
                  
                      } 

                  }
                    
                
                
                
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
            //
           
            

            $cartId = $request->input('id');
            
            $addcart = Addtocart::where('id',$cartId)->first();
           
            $addcart->is_active = 0;
            $res = $addcart->update();

            $total_val = $addcart->total;
            $pcartId = $addcart->cart_id; 
            $findcart= Productcart::where('id',$pcartId)->first();
            $findcart->total=( $findcart->total -$total_val);
            $res = $findcart->update();

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

    public function plusupdate(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $id = $request->input('id');
            $qtyvalue = $request->input('qty_val');
            $price = $request->input('price');
            $type = $request->input('type');
            
             
            $addcart = Addtocart::where('id',$id)->first();
            
            $addcart->quantity = $qtyvalue;
            $addcart->total = ($qtyvalue * $price);
            $res = $addcart->update();

             
            $pcartId = $addcart->cart_id; 
            $findcart= Productcart::where('id',$pcartId)->first();
            if($type == 1){
                $findcart->total=( $findcart->total  + $price);
            }else{
                
                $findcart->total=( $findcart->total  - $price);
            }
            $res = $findcart->update();
            if(!$res) {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'$exception->getMessage()'],500);
            }

            DB::commit(); 
            return response()->json(['success'=>true,'message'=>"Product qty success",'total'=>$findcart->total],200);
        }
        catch (\Exception $exception) 
        {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            // return response()->json(['success'=>false,'message1'=>'Internal server error.please try again later.'],500);
            return response()->json(['success'=>false,'message'=>$exception->getMessage()],500);

        }
        // return view("Frontend.addtocart");

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

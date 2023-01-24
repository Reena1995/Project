<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductDetail;
use App\Models\Image;
use DB;
use Log;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('is_active',1)->with(['category'])->get(); 
        // $products = Product::with(['category'])->where('is_active',1)->get(); 
        // dd($products);
        return view('Backend.product.index',compact('products'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        // $cat_id_arr=Category::orderBy('name', 'ASC')->get();
        // return view('Backend.Product.product',["cat_id_arr"=>$cat_id_arr]);

        $categories=Category::orderBy('name', 'ASC')->get();
        return view('Backend.Product.product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = $request->validate([
            'name'=>'required|alpha',
            'category_id'=>'required',
            'description'=>'required|max:200',
            'image'=>'required',
            'quantity'=>'required',
            'actualprice'=>'required',
            'discountprice'=>'required',
            'multiimage'=>'required',

        ]); 
    
        DB::beginTransaction();
        try{
            $product = new Product;
            $product->name = $request->name;
            $product->category_id = $request->category_id;
            $product->uuid = \Str::uuid();
        
            $res = $product->save();
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
                return redirect()->back();
            }
           
            /////////////////////////////////////////////////////
            $ProductDetail = new ProductDetail;
            $ProductDetail->product_id = $product->id;
            $ProductDetail->description = $request->description;
            $ProductDetail->quantity = $request->quantity;
            $ProductDetail->actualprice = $request->actualprice;
            $ProductDetail->discountprice = $request->discountprice;
            
        
            $resone = $ProductDetail->save();
            if(!$resone)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
                return redirect()->back();
            }


            //////////////////////////////////////////////////////////////////////
            $Image = new Image;
            $Image->product_id = $product->id;
            $Image->uuid = \Str::uuid();
            $Image->is_feature = 1;
            $file=$request->file('image');  // get file
            $file_name=time().rand()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
            $file->move('Upload/Product',$file_name); //file name move upload in public		
            $Image->image = $file_name; // file name store in db
            $restwo = $Image->save();

            if(!$restwo)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
                return redirect()->back();
            }
            // dd($request->all());

            $filesarr = [];
            if($request->hasfile('multiimage'))
            {
                // dd("ind");
                foreach($request->multiimage as $file)
                {
                    \Log::info($file);
                    $image = new Image;
                    $image->product_id = $product->id;
                    $image->uuid = \Str::uuid();
                    $image->is_feature = 0;


                    // $file=$file;  // get file
                    $file_name = time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                    $file->move('Upload/Product',$file_name); //file name move upload in public	
                    $image->image = $file_name; // file name store in db

                    $executeQuery = $image->save();
        
                    if(!$executeQuery)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                        return redirect()->back();
                    }
                }
                // $Image->multiimage=implode(",",$filesarr);
            }

           
            
            
           
            /////////////////////////////////////////////////////////////////////


            DB::commit();
            Session::flash('success','Product create successfully');
            return redirect()->route('product.index');
            ///////////////////////////////////////////////////
           
        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server error please try again later.');
            return redirect()->back();

        }    
        ////////////////////////////////////////////////

        


        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories=Category::orderBy('name', 'ASC')->get();
        $product = Product::where('uuid',$id)->first();
        return view('Backend.product.show',compact('product','categories'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         Log::info('aaaaaaaaaa');
        $categories=Category::orderBy('name', 'ASC')->get();
        $product = Product::where('uuid',$id)->with(['proImages','proDetail'])->first();
        //  dd($product);
        return view('Backend.product.edit',compact('product','categories'));
    
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
        // dd($request->all());
        $product = $request->validate([
            'name'=>'required',
            'category_id'=>'required',
            'description'=>'required|max:200',
            // 'image'=>'required',
            'quantity'=>'required',
            'actualprice'=>'required',
            'discountprice'=>'required',
            // 'multiimage'=>'required',

        ]); 
    
        DB::beginTransaction();
        try{
            $product = Product::where('uuid',$id)->first();
            $product->name = $request->name;
            $product->category_id = $request->category_id;
       
            $res = $product->update();
        
           
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server1 error please try again later.');
                return redirect()->back();
            }
           
            /////////////////////////////////////////////////////
            $ProductDetail = ProductDetail::where('product_id',$product->id)->first();
            $ProductDetail->product_id = $product->id;
            $ProductDetail->description = $request->description;
            $ProductDetail->quantity = $request->quantity;
            $ProductDetail->actualprice = $request->actualprice;
            $ProductDetail->discountprice = $request->discountprice;
            
        
            $resone = $ProductDetail->update();

            if(!$resone)
            {
                DB::rollback();
                Session::flash('error','Internal server2 error please try again later.');
                return redirect()->back();
            }

            if($request->has('image'))
            {

                $Image = Image::where('product_id',$product->id)->first();
                $Image->product_id = $product->id;
                $Image->is_feature = 1;
                $file=$request->file('image');  // get file
                $file_name=time().rand()."_image.".$request->file('image')->getClientOriginalExtension();// make file name
                $file->move('Upload/Product',$file_name); //file name move upload in public		
                $Image->image = $file_name; // file name store in db
                $restwo = $Image->update();
    
                if(!$restwo)
                {
                    DB::rollback();
                    Session::flash('error','Internal server3 error please try again later.');
                    return redirect()->back();
                }
            }

            //////////////////////////////////////////////////////////////////////
            // dd($request->all());

            $filesarr = [];
            if($request->hasfile('multiimage'))
            {
                // dd("ind");
                foreach($request->multiimage as $file)
                {
                    \Log::info($file);
                    $image = new Image;
                    $image->product_id = $product->id;
                    $image->uuid = \Str::uuid();
                    $image->is_feature = 0;


                    // $file=$file;  // get file
                    $file_name = time().rand()."_image.".$file->getClientOriginalExtension();// make file name
                    $file->move('Upload/Product',$file_name); //file name move upload in public	
                    $image->image = $file_name; // file name store in db

                    $executeQuery = $image->save();
        
                    if(!$executeQuery)
                    {
                        DB::rollback();
                        Session::flash('error','Internal server error please try again later.');
                        return redirect()->back();
                    }
                }
                
            }

            DB::commit();
            Session::flash('success','Product edit successfully');
            return redirect()->route('product.index');
           
           
        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server4 error please try again later.');
            return redirect()->back();

        }    
       

    }
    ////////////////////////////////////////////////////////////////////
    public function imageupdate(Request $request)
    { 
            $id = $request->input('id'); 
            // \Log::info($id);  
            
            $image = Image::where('uuid',$id)->first();
            if($image->id){               
              
                $image->is_active = $request->input('status');
                $image->save();
                return response()->json(['message'=>'image update successfully saved'],200);

                
            }
            else
            {
                return  response()->json([
                    'status'=>404,
                    'message'=>'studenttttttt not fount',
                ]);
            }
    }
    ///////////////////////////////////////////////////////////////////
    
    
    public function status($id)
    {
      
        $product = Product::where('uuid',$id)->first();
        // dd($product);
        $product->is_active = 0;
        $res = $product->update();
        Log::info('status update');

        if(!$res)
        {
           
            return redirect()->back();
        }
        
        
        return redirect()->route('product.index');

    }

    public function destroy($id)
    {
        //
    }

}

<?php 
namespace App\Repositories;

use App\Repositories\Interfaces\ProductRepositoryInterface;
use App\Models\{Product,ProductDetail,Image};
use App\Models\Category;
use DB;
use Log;
use Session;

class ProductRepository implements ProductRepositoryInterface{

    public function all(){
        return Product::where('is_active',1)->with(['category'])->get();
    }
    
    public function store($request)
    {
         
        try{
            
            DB::beginTransaction(); 
                $product = new Product;
                $product->name = $request['name'];
                Log::info('aaaaaaaaaa'); 
                $product->category_id = $request['category_id'];
                Log::info('bbbbb');
                $product->uuid = \Str::uuid();
            
                $res = $product->save();
                Log::info('hello');
                if(!$res)
                {
                    \Log::info("not save product");
                    DB::rollback();
                    // Session::flash('error','Internal1 server error please try again later.');
                    // return redirect()->back();
                }
            
                /////////////////////////////////////////////////////
                $ProductDetail = new ProductDetail;
                $ProductDetail->product_id = $product->id;
                $ProductDetail->description = $request['description'];
                $ProductDetail->quantity = $request['quantity'];
                $ProductDetail->actualprice = $request['actualprice'];
                $ProductDetail->discountprice = $request['discountprice'];
                
            
                $resone = $ProductDetail->save();
                if(!$resone)
                {
                    DB::rollback();
                    Session::flash('error','Internal2 server error please try again later.');
                    return redirect()->back();
                }
    

                //////////////////////////////////////////////////////////////////////
                $Image = new Image;
                $Image->product_id = $product->id;
                $Image->uuid = \Str::uuid();
                $Image->is_feature = 1;
                $file=$request['image'];  // get file
                $file_name=time().rand()."_image.".$request['image']->getClientOriginalExtension();// make file name
                $file->move('Upload/Product',$file_name); //file name move upload in public		
                $Image->image = $file_name; // file name store in db
                $restwo = $Image->save();

                if(!$restwo)
                {
                    DB::rollback();
                    Session::flash('error','Internal3 server error please try again later.');
                    return redirect()->back();
                }
                // dd($request->all());
                $filesarr = [];
                if(!empty($request['multiimage']))
                { 
                    // dd("ind");
                    foreach($request['multiimage'] as $file)
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
                            Session::flash('error','Internal 4server error please try again later.');
                            return redirect()->back();
                        }
                    }
                    // $Image->multiimage=implode(",",$filesarr);
                }
             
            /////////////////////////////////////////////////////////////////////


            DB::commit();   
            Session::flash('success','Product create successfully');
            return true;            
           
            ///////////////////////////////////////////////////
           
        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal5 server error please try again later.');
            return redirect()->back();

        }    
    }

   

    public function show($id){
        $category=Category::orderBy('name', 'ASC')->get();
        $product= Product::where('uuid',$id)->first();
        return ['category'=>$category,'product'=>$product];
    }

   
    public function edit($id){

      $categories= Category::orderBy('name', 'ASC')->get();
      $product= Product::where('uuid',$id)->with(['proImages','proDetail'])->first();
      return ['categories'=>$categories,'product'=>$product];
       
    }
    public function update($request,$id)
    {
        try{
            DB::beginTransaction();
            $product = Product::where('uuid',$id)->first();
            $product->name= $request['name'];
            $product->category_id = $request['category_id'];
       
            $res = $product->update();
           
            if(!$res)
            {
                DB::rollback();
                return Session::flash('error','Internal server1 product table error please try again later.');
                return redirect()->back();
               
              
            }
           
            /////////////////////////////////////////////////////
            $ProductDetail = ProductDetail::where('product_id',$product->id)->first();
            $ProductDetail->product_id = $product->id;
            $ProductDetail->description = $request['description'];
            $ProductDetail->quantity = $request['quantity'];
            $ProductDetail->actualprice = $request['actualprice'];
            $ProductDetail->discountprice = $request['discountprice'];
            
        
            $resone = $ProductDetail->update();

            if(!$resone)
            {
                DB::rollback();
                Session::flash('error','Internal server2 ProductDetail table error please try again later.');
                return redirect()->back();
               
            }

            if($request->has('image'))
            {

                $Image = Image::where('product_id',$product->id)->first();
                $Image->product_id = $product->id;
                $Image->is_feature = 1;
                $file=$request['image'];  
                 // get file ['discountprice']
                $file_name=time().rand()."_image.".$request['image']->getClientOriginalExtension();// make file name
                $file->move('Upload/Product',$file_name); //file name move upload in public		
                $Image->image = $file_name; // file name store in db
                $restwo = $Image->update();
    
                if(!$restwo)
                {
                    DB::rollback();
                    Session::flash('error','Internal server3 Image table error please try again later.');
                    return redirect()->back();
                   
                  
                }
            }

            //////////////////////////////////////////////////////////////////////
            // dd($request->all());

            $filesarr = [];
            if(!empty($request['multiimage']))
            { 
                // dd("ind");
                foreach($request['multiimage'] as $file)
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
                        Session::flash('error','Internal serverimage2 table error please try again later.');
                        return redirect()->back();
                        
                    }
                }
            }
            DB::commit();
            Session::flash('success','Product edit successfully');
            return true;
           
        }
        catch (\Exception $exception) {
            Log::info('okkkk catch');

            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server4 error please try again later.');
            return redirect()->back();

           
          
        }    
       
    }

   
    
}
?>
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
use App\Repositories\Interfaces\ProductRepositoryInterface;

class ProductController extends Controller
{
   /////////////repository start/////////////
   private $productRepository;
   public function __construct(ProductRepositoryInterface $productRepository){
        $this->productRepository=$productRepository;
   }

   ////////////repository end////////////////
    public function index()
    {
        $products = $this->productRepository->all();
        // $products = Product::where('is_active',1)->with(['category'])->get(); 
        // $products = Product::with(['category'])->where('is_active',1)->get(); 
        // dd($products);
        return view('Backend.product.index',compact('products'));
    }

    
    
    public function create()
    
    {
        // $cat_id_arr=Category::orderBy('name', 'ASC')->get();
        // return view('Backend.Product.product',["cat_id_arr"=>$cat_id_arr]);

        $categories=Category::orderBy('name', 'ASC')->get();
        return view('Backend.Product.product',compact('categories'));
    }

   
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
        $products = $this->productRepository->store($request->all());
        
        if($products){
            return redirect()->route('product.index');
        }else{
            return redirect()->back();
        }
        
    }

   
    public function show($id)
    {
        // $categories=Category::orderBy('name', 'ASC')->get();
        // $product = Product::where('uuid',$id)->first();
        $data = $this->productRepository->show($id);
        $categories=$data['category'];
        $product =$data['product'];
        return view('Backend.product.show',compact('product','categories'));
    }
    

   
    public function edit($id)
    {
         Log::info('aaaaaaaaaa');
        // $categories=Category::orderBy('name', 'ASC')->get();
        // $product = Product::where('uuid',$id)->with(['proImages','proDetail'])->first();
        //  dd($product);
      
        $data = $this->productRepository->edit($id);
        $categories = $data['categories'];
        $product = $data['product'];
        // dd($product);
        return view('Backend.product.edit',compact('product','categories'));
    
    }
  
   
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
        
            $products = $this->productRepository->update($request,$id);
            Log::info('products response  print');
            Log::info($products);
          
            if($products){
                return redirect()->route('product.index');
            }else{
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

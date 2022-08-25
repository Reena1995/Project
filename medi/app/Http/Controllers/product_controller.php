<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categorie;
use App\Models\product;
use Hash;
use Session;

class product_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $data=product::all();
		  return view('Backend.Admin.manageproduct',["pro_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_id_arr=categorie::all();
         return view('Backend.Admin.addproduct',["category_id_arr"=>$category_id_arr]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new product;
	
		// img upload
		$file=$request->file('img');  // get file
		$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
		$file->move('upload/product',$file_name); //file name move upload in public		
		$data->img=$file_name; // file name store in db
		
		$data->name=$request->name;
		$data->price=$request->price;
		$data->description=$request->description;
		$data->company_name=$request->company_name;
		
		$data->cate_id=$request->cate_id;
	
		$res=$data->save();
		return redirect('/addproduct')->with('success','Add Product Success');
  
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
    public function editproduct1($id)
    {
        $data=product::find($id);
		$category_id_arr=categorie::all();
		return view('Backend.Admin.editproducts',["fetch"=>$data,"category_id_arr"=>$category_id_arr]);
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
        $data=product::find($id);
		$old_img=$data->img;
		$data->name=$request->name;
		$data->price=$request->price;
		$data->description=$request->description;
		$data->company_name=$request->company_name;
		$data->cate_id=$request->cate_id;
		
		// img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/product',$file_name); //file name move upload in public		
			$data->img=$file_name; // file name store in db
			unlink('upload/product/'.$old_img);
		}
       
        $data->save();
		return redirect('manageproduct')->with('success','Update Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=product::find($id);
		 $data->delete();
		 return redirect('manageproduct')->with("success","products deleted successfully");
    }
    
}

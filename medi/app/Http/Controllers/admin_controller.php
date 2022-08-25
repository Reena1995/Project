<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Hash;
use Session; //github try

class admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Backend.Admin.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new admin;
		$data->Username=$request->username;
		$data->name=$request->name;
		$data->mobileno=$request->mobileno;
		$data->emailid=$request->emailid;
		// img upload
		$file=$request->file('img');  // get file
		$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
		$file->move('upload/admin',$file_name); //file name move upload in public		
		$data->img=$file_name; // file name store in db
		
        $data->Password=Hash::make($request->password);
		
		$res=$data->save();
		return redirect('/adminlogin')->with("success","Registration Success");
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
        $data=admin::find($id);
		return view('Backend.Admin.edit-profile',["fetch"=>$data]);
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
       $data=admin::find($id);
		$old_img=$data->img;
		
		$data->name=$request->name;
		$data->emailid=$request->emailid;
		$data->mobileno=$request->mobileno;
		$data->username=$request->username;
		
		
		// img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/admin',$file_name); //file name move upload in public		
			$data->img=$file_name; // file name store in db
			unlink('upload/admin/'.$old_img);
		}

		$data->save();
		return redirect('/profile')->with('success','Update Success');
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
	public function adminlogin(Request $request)
    {
        return view('Backend.Admin.adminlogin');
    }
	public function addmin(Request $request)
    {
       $data=admin::where("username","=",$request->username)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('admin_id',$data->id);
                   $request->Session()->put('username',$data->username);
                   return redirect('/dashboard');
               }
               else
               {
                return redirect('/adminlogin')->with('fail','Login Failed due to Blocked User');
               }
           }
           else
           {
            return redirect('/adminlogin')->with('fail','Login Failed due to Wrong Password');
           }
       }
       else
       {
        return redirect('/adminlogin')->with('fail','Login Failed due to Wrong user');
       }
    }

    public function adminlogout()
    {
        Session()->pull('admin_id');
        Session()->pull('username');
        return redirect('/adminlogin');
    }
	public function profile()
	{
		$data=admin::where("id","=",session('admin_id'))->first();
		return view('Backend.Admin.profile',["fetch"=>$data]);
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Mail\weclcomemail;

use Hash;
use Mail;
use Session;


class customer_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Frontend.medicare.customerregister');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$data=new customer;
	$name=$data->name=$request->name;
		$data->gender=$request->gender;
		
		// img upload
		$file=$request->file('img');  // get file
		$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
		$file->move('upload/customer',$file_name); //file name move upload in public		
		$data->img=$file_name; // file name store in db
		
		
	$email=$data->email=$request->email;
		$data->mobile=$request->mobile;
		$data->username=$request->username;
		$data->password=Hash::make($request->password);
		$data->confirmpwd=Hash::make($request->confirmpwd);
		$res=$data->save();
		
        if($res)
        {
            $details=['titile'=>$email,'comment'=>"welcome mail"];

            Mail::to($email)->send(new weclcomemail($details));
            return back()->with("success","register Sucess");
        }
        else
        {
            alert("not success");
        }
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
    
	public function editcustomer($id)
    {
        $data=customer::find($id);
		return view('Frontend.medicare.editprofile',["fetch"=>$data]);
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
        $data=customer::find($id);
		$old_img=$data->img;
		$data->name=$request->name;
		$data->email=$request->email;
		$data->gender=$request->gender;
		$data->mobile=$request->mobile;
		$data->username=$request->username;
		
		// img upload
		if($request->hasFile('img'))
		{
			$file=$request->file('img');  // get file
			$file_name=time() . "_img." . $request->file('img')->getClientOriginalExtension();// make file name
			$file->move('upload/customer',$file_name); //file name move upload in public		
			$data->img=$file_name; // file name store in db
			unlink('upload/customer/'.$old_img);
		}

		$data->save();
		return redirect('/myaccount')->with('success','Update Success');
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
	public function login(Request $request)
    {
        return view('Frontend..medicare.login');
    } 

	
	public function userlogin(Request $request)
    {
        $data=customer::where("username","=",$request->username)->first();
		if($data)
        {
              if(Hash::check($request->password, $data->password))
              {
                    $status=$data->status;
                    if($status=="Unblock")
                    {
                        $request->Session()->put('cust_id',$data->id);
                        $request->Session()->put('username',$data->username);
                        return redirect('/home');
						
                    }
                    else
                    {
                        return redirect('/login')->with('fail','Login Failed due to Blocked User');
                    }

              }  
              else
              {
                return redirect('/login')->with('fail','Login Failed due to Wrong password');
              }
        }
        else
        {
            return redirect('/login')->with('fail','Login Failed due to Wrong user Name');
        }
    }
	public function logout()
	{
		Session()->pull('cust_id');
		Session()->pull('username');
		return redirect('/home');
		
	}
	
	
	
	public function myaccount()
	{
		$data=customer::where("id","=",session('cust_id'))->first();
		return view('Frontend.medicare.myaccount',["fetch"=>$data]);
	}
}


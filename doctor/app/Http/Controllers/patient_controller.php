<?php

namespace App\Http\Controllers;


use App\Models\patient;

use Hash;
use Session;


use Illuminate\Http\Request;

class patient_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=patient::all();
        return view('admin.patientlist',["patient_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new patient;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->confirmpwd=Hash::make($request->confirmpwd);

        $res=$data->save();
        return redirect('/login')->with('success','registarion succesfull');
        
    }

    public function doctorlogin(Request $request)
    {
        return view('doctor.login');
    }

    public function patientlogin(Request $request)
    {
        $data=patient::where("email","=",$request->email)->first();
        if($data)
        {
            if(Hash::check($request->password, $data->password))
           {
               $status=$data->status;
               if($status=="Unblock")
               {
                   $request->Session()->put('patient_id',$data->id);
                   $request->Session()->put('email',$data->email);
                   return redirect('/index');
               }
               else
               {
                return redirect('/login')->with('fail','Login Failed due to Blocked User');
               }
           }
           else
           {
            return redirect('/login')->with('fail','Login Failed due to Wrong Password');
           }
        }
        else
        {
         return redirect('/login')->with('fail','Login Failed due to Wrong user');
        }
    }

    public function patientlogout()
    {
        Session()->pull('patient_id');
        Session()->pull('email');
        return redirect('/login');
    }

    public function editpatient()
    {
        $data=patient::where("id","=",session('patient_id'))->first();
        
		return view('patient.profile',["fetch"=>$data]);
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
    public function updatepatient(Request $request, $patient_id)
    {
        $data=patient::where("id","=",session('patient_id'))->first();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->gender=$request->gender;
        $data->mobileno=$request->mobileno;
        //$old_img=$data->ptprofile_img;
        
        

        if($request->hasFile('ptprofile_img'))
        {
        $file=$request->file('ptprofile_img');
        $file_name=time()."_ptprofile_img.".$request->file('ptprofile_img')->getClientOriginalExtension();
        $file->move('upload/patient',$file_name);
        $data->ptprofile_img=$file_name;
        //unlink('upload/patient/'.$old_img);
        }

        $res=$data->save();
        return redirect('/editpatient')->with('success','update patient Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=patient::find($id);
        $data->delete();
        return redirect('admin-patient')->with("success","patient delete successfully");
    }
}

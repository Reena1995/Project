<?php

namespace App\Http\Controllers;


use App\Models\patient;
use App\Mail\welcome;
use Mail;
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
    $name=$data->name=$request->name;
    $email=$data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->confirmpwd=Hash::make($request->confirmpwd);

        $res=$data->save();
        if($res)
		{
			$details=['title'=>$email,'comment'=>"Welcome to Doccure"];
	   
			Mail::to($email)->send(new welcome($details));
			return back()->with("success","Register Success");
		}
		else
		{
			alert("Not success");
		}
        return redirect('/login');
        
    }

    public function doctorlogin(Request $request)
    {
        return view('doctor.login');
    }

    public function patientlogin(Request $request)
    {
        $data=$request->validate([
            'email' =>'required|email',
            'password' => 'required|string|min:6',
           
        ]);
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

    public function resetpassword(Request $request)
    {
        $data=$request->validate([
            'oldpassword' => 'required',
            'newpassword' => 'required|string|min:6',
            'confirm_password' => 'required|same:newpassword|min:6',
        
        ]);
        $data=patient::where("id","=",Session('patient_id'))->first();
        if(Hash::check($request->oldpassword, $data->password))
           {
            $data->password=Hash::make($request->newpassword);
            $data->update();
            return back()->with('success','Password Change Success');
           }
           else
           {
            return back()->with('fail','Wrong Old Password');
           }
    }

    public function resetcreate()
    {
        return view('patient.resetpwd');
    }
    public function forgotpwd()
    {
        return view('patient.forgot-password');
    }
    public function sendotp()
    {
        return view('patient.sendotp');
    }
    public function confirmpwd()
    {
        return view('patient.confirmpwd');
    }

    
    public function send_forgototp(Request $request)
    {
        $email=$request->email;
        $otp=rand(111111,999999);
        $request->Session()->put('forgototp',$otp);
        $data=['email'=>$email,'forgototp'=>Session('forgototp'),'body'=>"For Change Passoword Please Enter OTP firs"];
        Mail::to($email)->send(new forgotpwdmail($data));
        return view('doctor.send-otp');
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

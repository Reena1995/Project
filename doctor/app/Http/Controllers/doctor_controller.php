<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use App\Models\state;
use App\Models\citie;
use App\Models\categorie;
use App\Models\area;
use App\Models\drspecialitie;
use App\Models\service;
use App\Models\specialist;
use Hash;
use Session;

use Illuminate\Http\Request;

class doctor_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data=doctor::all();
        return view('admin.doctor',["doc_arr"=>$data]);
        
    }

    public function com_doc_view()
    {
        
        $data=doctor::all();
        return view('company.doctor-list',["do_arr"=>$data]);
        
        
    }

    

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state_id_arr=state::all();
       
        $special_id_arr=specialist::all();
         return view('admin.add-doctor',["state_id_arr"=>$state_id_arr,"special_id_arr"=>$special_id_arr]);
         
           
    }
    public function docviewpage()
    {
       return view('company.doctor-list');
           
    }
    
	
	

    

    public function doctorlogin(Request $request)
    {
        return view('doctor.login');
    }

    public function adddoctorlogin(Request $request)
    {
       $data=doctor::where("email","=",$request->email)->first();
       if($data)
       {
           if(Hash::check($request->password, $data->password))
           {
              
                   $request->Session()->put('doctor_id',$data->id);
                   $request->Session()->put('email',$data->email);
                   $drname=$data->first_name." ".$data->last_name; 
                   $request->Session()->put('drname',$drname);
                   $request->Session()->put('profile_img',$data->profile_img);
                   

                   //echo session('drname');
                  //echo session('profile_img');
                   //exit();
                   return redirect('/doctor-dashboard');
               
           }
           else
           {
            return redirect('/doctor')->with('fail','Login Failed due to Wrong Password');
           }
       }
       else
       {
        return redirect('/doctor')->with('fail','Login Failed due to Wrong user');
       }
    }
    public function doctorlogout()
    {
        Session()->pull('doctor_id');
        Session()->pull('email');
       // Session()->pull('drname');
       // Session()->pull('profile_img');
        return redirect('/doctor');
    }

    public function getCity(Request $request)
    {
		$data['cities']=citie::where("sid","=",$request->sid)->get();
        return response()->json($data);	
        	
    }
    
    
    
	public function getArea(Request $request)
    {
		$data['areas']=area::where("citie_id","=",$request->citie_id)->get();
        return response()->json($data);	
    }
    
    public function store(Request $request)
    {
        $data=$request->validate([
            'first_name' => 'required|alpha',
            'last_name' => 'required|alpha',
            'dob' => 'required',
            'specialist_id' => 'required',
            'liacence_no' => 'required',
            'experience' => 'required|regex:/[a-zA-z0-9\s]+/',
            'dr_mobile' => 'required|digits:10',
            'about' => 'required|regex:/[a-zA-z0-9\s]+/',
            'short_tittle' => 'required|regex:/[a-zA-z0-9\s]+/',
            'liacence_no' => 'required',
            'email' =>'required|email|unique:doctors,email',
            'password' => 'required|string|unique:doctors|min:6',
            'education' => 'required|regex:/[a-zA-z0-9\s]+/',
            'office_no' => 'required|digits:10',
            'hospital_name' => 'required|alpha',
            'day' => 'required',
            'notification' => 'required|regex:/[a-zA-z0-9\s]+/',
            'consulting_fees' => "required|numeric",
            'followup_fees' => "required|numeric",
            'sid' => 'required',
            'citie_id' => 'required',
            'address' =>  'required|regex:/[a-zA-z0-9\s]+/',
            'area_id' => 'required',
            'pincode' => 'required|digits:6',
            'google_map' =>  'required',
            'profile_img' =>'required',
            'hospital_img' =>'required',
            'visit_card' =>'required'
        
        ]);
        
        $data=new doctor;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->dob=$request->dob;
        $data->gender=$request->gender;
        $data->specialist_id=$request->specialist_id;
        $data->liacence_no=$request->liacence_no;
        $data->experience=$request->experience;
        $data->dr_mobile=$request->dr_mobile;
        $data->about=$request->about;
        $data->short_tittle=$request->short_tittle;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);


        

        $file=$request->file('profile_img');  // get file
		$file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();// make file name
		$file->move('upload/doctors',$file_name); //file name move upload in public		
		$data->profile_img=$file_name; // file name store in db


        //$file1=$request->file('hospital_img');  // get file
		//$file_name1=time()."_hospital_img.".$request->file('hospital_img')->getClientOriginalExtension();// make file name
		//$file1->move('upload/hospital',$file_name1); //file name move upload in public		
		//$data->hospital_img=$file_name1; // file name store in db

        $filesarr = [];
        if($request->hasfile('hospital_img'))
        {
            foreach($request->file('hospital_img') as $file)
            {
                $name = time().rand(100000,99999).'hospital_img.'.$file->extension();
                $file->move('upload/hospital/',$name);
                $filesarr[] = $name;       
            }
            $data->hospital_img=implode(",",$filesarr);
        }


        $file2=$request->file('visit_card');  // get file
		$file_name2=time()."_visit_card.".$request->file('visit_card')->getClientOriginalExtension();// make file name
		$file2->move('upload/visitingcard',$file_name2); //file name move upload in public		
		$data->visit_card=$file_name2; // file name store in db

       

        $data->education=$request->education;
        $data->office_no=$request->office_no;
        $data->hospital_name=$request->hospital_name;
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hosiptal_afternoon_to=$request->hosiptal_afternoon_to;
        $data->hosital_afternoon_from=$request->hosital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->day=implode(",",$request->day);
        $data->notification=$request->notification;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->state=$request->sid;
        $data->city=$request->citie_id;
        $data->address=$request->address;
        $data->area=$request->area_id;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        
        

        $res=$data->save();
        return redirect('/admin-add-doctor')->with('success','Add doctor Success');
    }        
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=doctor::find($id);
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        $special_id_arr=specialist::all();
		return view('admin.editdoctor',["fetch"=>$data,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr,"special_id_arr"=>$special_id_arr]);
    }
    
    public function editdoctor()
    {
        $data=doctor::where("id","=",session('doctor_id'))->first();
        $state_id_arr=state::all();
        $city_id_arr=citie::all();
        $area_id_arr=area::all();
        $special_id_arr=specialist::all();
		return view('doctor.doctor-profile-settings',["fetch"=>$data,"state_id_arr"=>$state_id_arr,"city_id_arr"=>$city_id_arr,"area_id_arr"=>$area_id_arr,"special_id_arr"=>$special_id_arr]);
    }

    public function doctorlist()
    {
        $data=doctor::all();
		return view('patient.doctorsearch',["doctor_arr"=>$data]);
    }

    public function doctorprofile($id)
    {
        $data=doctor::find($id);
        $doctor_id=$data->id;
        $service_id_arr=service::where('doctor_id','=',$doctor_id)->get();
        $spe_id_arr=drspecialitie::where('doctor_id','=',$doctor_id)->get();
		return view('patient.doctor-profile',["fetch"=>$data,"service_id_arr"=>$service_id_arr,"spe_id_arr"=>$spe_id_arr]);
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
            
        $data=doctor::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->dob=$request->dob;
        $data->gender=$request->gender;
        $data->specialist_id=$request->specialist_id;
        $data->liacence_no=$request->liacence_no;
        $data->experience=$request->experience;
        $data->dr_mobile=$request->dr_mobile;
        $data->about=$request->about;
        $data->short_tittle=$request->short_tittle;
        $data->email=$request->email;
        $data->education=$request->education;
        $data->office_no=$request->office_no;
        $data->hospital_name=$request->hospital_name;
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hosiptal_afternoon_to=$request->hosiptal_afternoon_to;
        $data->hosital_afternoon_from=$request->hosital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->day=implode(",",$request->day);
        $data->notification=$request->notification;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->address=$request->address;
        $data->area=$request->area;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        $old_img=$data->profile_img;
        $old_img1=$data->hospital_img;
        $old_img2=$data->visit_card;

        if($request->hasFile('profile_img'))
        {
        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/doctors',$file_name);
        $data->profile_img=$file_name;
        unlink('upload/doctors/'.$old_img);
        }

        if($request->hasFile('hospital_img'))
        {
        $file1=$request->file('hospital_img');
        $file_name1=time()."_hospital_img.".$request->file('hospital_img')->getClientOriginalExtension();
        $file1->move('upload/hospital',$file_name1);
        $data->hospital_img=$file_name1;
        unlink('upload/hospital/'.$old_img1);
        }

        if($request->hasFile('visit_card'))
        {
        $file2=$request->file('visit_card');
        $file_name2=time()."_visit_card.".$request->file('visit_card')->getClientOriginalExtension();
        $file2->move('upload/visitingcard/',$file_name2);
        $data->visit_card=$file_name2;
        unlink('upload/visitingcard/'.$old_img2);
        }
        

        $res=$data->save();
        return redirect('/admin-doctor')->with('success','update doctor Success');


        
    }

    public function updatedoctor(Request $request, $doctor_id)
    {
            
        $data=doctor::where("id","=",session('doctor_id'))->first();
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->dob=$request->dob;
        $data->gender=$request->gender;
        $data->specialist_id=$request->specialist_id;
        $data->liacence_no=$request->liacence_no;
        $data->experience=$request->experience;
        $data->dr_mobile=$request->dr_mobile;
        $data->about=$request->about;
        $data->short_tittle=$request->short_tittle;
        $data->email=$request->email;
        $data->education=$request->education;
        $data->office_no=$request->office_no;
        $data->hospital_name=$request->hospital_name;
        $data->hospital_morning_to=$request->hospital_morning_to;
        $data->hospital_morning_from=$request->hospital_morning_from;
        $data->hosiptal_afternoon_to=$request->hosiptal_afternoon_to;
        $data->hosital_afternoon_from=$request->hosital_afternoon_from;
        $data->hospital_evening_to=$request->hospital_evening_to;
        $data->hospital_evening_from=$request->hospital_evening_from;
        $data->day=implode(",",$request->day);
        $data->notification=$request->notification;
        $data->consulting_fees=$request->consulting_fees;
        $data->followup_fees=$request->followup_fees;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->address=$request->address;
        $data->area=$request->area;
        $data->pincode=$request->pincode;
        $data->google_map=$request->google_map;
        //$old_img=$data->profile_img;
        //$old_img1=$data->hospital_img;
        //$old_img2=$data->visit_card;

        if($request->hasFile('profile_img'))
        {
        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/doctors',$file_name);
        $data->profile_img=$file_name;
       // unlink('upload/doctors/'.$old_img);
        }

        if($request->hasFile('hospital_img'))
        {
        $file1=$request->file('hospital_img');
        $file_name1=time()."_hospital_img.".$request->file('hospital_img')->getClientOriginalExtension();
        $file1->move('upload/hospital',$file_name1);
        $data->hospital_img=$file_name1;
        //unlink('upload/hospital/'.$old_img1);
        }

        if($request->hasFile('visit_card'))
        {
        $file2=$request->file('visit_card');
        $file_name2=time()."_visit_card.".$request->file('visit_card')->getClientOriginalExtension();
        $file2->move('upload/visitingcard/',$file_name2);
        $data->visit_card=$file_name2;
        //unlink('upload/visitingcard/'.$old_img2);
        }
        

        $res=$data->save();
        return redirect('/editdoctor')->with('success','update doctor Success');


        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=doctor::find($id);
        $data->delete();
        return redirect('admin-doctor')->with("success","doctor delete successfully");
        
    }
}


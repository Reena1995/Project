<?php

namespace App\Http\Controllers;
use App\Models\companie;
use App\Models\healthmanager;
use App\Models\division;

use Hash;
use Session;

use Illuminate\Http\Request;

class healthmanager_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=healthmanager::all();
        return view('admin.manager',["man_arr"=>$data]);
        
    }

    public function health_manage_view()
    {
        $data=healthmanager::where('company_id','=',Session('company_id'))->get();
        return view('company.manager',["heal"=>$data]);
        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $company_id_arr=companie::all();
        return view('admin.add-manager',["company_id_arr"=>$company_id_arr]);

    }
    public function managerloginview()
    {   

        return view('manager.login');

    }

    public function managermanageview()
    {   

        return view('company.manager');

    }


    public function helthmanagerpageview()
    {   
        $data=division::all();
        return view('company.add-manager',["divi"=>$data]);

    }
    public function managerlogin(Request $request)
    {
        $data=healthmanager::where("email","=",$request->email)->first();
        if($data)
        {
            if(Hash::check($request->password,$data->password))
            {
                $status=$data->status;
                if($status=="Unblock")
                {
                    $request->Session()->put('manager_id',$data->id);
                    $request->Session()->put('email',$data->email);
                   

                    return redirect('/manager-dashbord');
                }
                else
                {
                    return redirect('/manager-login')->with('fail','block user');
                }


            }
            else
            {
                return redirect('/manager-login')->with('fail','wrong password');
            }

        }
        else
        {
            return redirect('/manager-login')->with('fail','wrong username');
        }
        
    }
    public function managerlogout()
    {
        Session()->pull('manager_id');
        Session()->pull('email');
        return redirect('/manager-login');
        
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=new healthmanager;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->Manager_name=$request->Manager_name;
        $data->password=Hash::make($request->password);
        $data->company_id=$request->company_id;
        $data->visiting_card=$request->visiting_card;
        $data->profile_img=$request->profile_img;

        $file1=$request->file('visiting_card');
        $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
        $file1->move('upload/visitingcard',$file_name1);
        $data->visiting_card=$file_name1;

        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/healthmanager',$file_name);
        $data->profile_img=$file_name;
        

        $res=$data->save();
        return redirect('/admin-add-manager')->with('success','add manager successfull');
        




    }

    public function com_add_healthmanager(Request $request)
    {
        
        $data=new healthmanager;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->Manager_name=$request->Manager_name;
        $data->company_id=Session('company_id');
        $data->division_id=$request->division_id;;
        $data->visiting_card=$request->visiting_card;
        $data->profile_img=$request->profile_img;
        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/healthmanager',$file_name);
        $data->profile_img=$file_name;
       

        $file1=$request->file('visiting_card');
        $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
        $file1->move('upload/visitingcard',$file_name1);
        $data->visiting_card=$file_name1;

       
        

        
       
       


        $res=$data->save();
        return redirect('/company-add-manager')->with('success','add healthmanager succesfully');




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
    public function editmanager($id)
    {
        $data=healthmanager::find($id);
        $company_id_arr=companie::all();
        return view('admin.editmanager',["fetch"=>$data,"company_id_arr"=>$company_id_arr]);
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
        $data=healthmanager::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->Manager_name=$request->Manager_name;
        $data->company_id=$request->company_id;
        $old_img=$data->profile_img;
        $old_img1=$data->visit_card;

        if($request->hasFile('profile_img'))
        {
        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/healthmanager',$file_name);
        $data->profile_img=$file_name;
        unlink('upload/healthmanager/'.$old_img);
        }

        if($request->hasFile('visit_card'))
        {
        $file2=$request->file('visit_card');
        $file_name2=time()."_visit_card.".$request->file('visit_card')->getClientOriginalExtension();
        $file2->move('upload/visitingcard/',$file_name2);
        $data->visit_card=$file_name2;
        unlink('upload/visitingcard/'.$old_img1);
        }
        

        $res=$data->save();
        return redirect('/admin-manager')->with('success','update manager Success');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=healthmanager::find($id);
        $data->delete();
        return redirect('admin-manager')->with("success","manager delete successfully");
    }
    public function healthdestroy($id)
    {
        $data=healthmanager::find($id);
        $data->delete();
        return redirect('company-manager')->With('success','delete healthmanager successfully');
    }
}

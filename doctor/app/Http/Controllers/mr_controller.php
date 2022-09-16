<?php

namespace App\Http\Controllers;
use App\Models\mr;
use App\Models\companie;
use App\Models\healthmanager;
use Hash;
use Session;

use Illuminate\Http\Request;

class mr_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=mr::all();
        return view('admin.mr',["mr_arr"=>$data]);
    }

    public function mr_manage()
    {
        $data=mr::where('company_id','=',Session('company_id'))->get();
        return view('company.mr',["mr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $company_id_arr=companie::all();
        $man=healthmanager::all();
        
        return view('admin.add-mr',["company_id_arr"=>$company_id_arr,"man"=>$man]);
    }

    public function mrpageview()
    {   
       
        return view('company.mr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new mr;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->company_id=$request->company_id;
        $data->manager_id=$request->manager_id;
        $data->company_name=$request->company_name;
        $data->visiting_card=$request->visiting_card;
        $data->profile_img=$request->profile_img;

        $file1=$request->file('visiting_card');
        $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
        $file1->move('upload/visitingcard',$file_name1);
        $data->visiting_card=$file_name1;

        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/mr',$file_name);
        $data->profile_img=$file_name;
        

        $res=$data->save();
        return redirect('/admin-add-mr')->with('success','Add MR successfull');
        



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
    public function editmr($id)
    {
        $data=mr::find($id);
        $company_id_arr=companie::all();
        return view('admin.editmr',["fetch"=>$data,"company_id_arr"=>$company_id_arr]);
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
        $data=mr::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->company_id=$request->company_id;
        $data->company_name=$request->company_name;
        $old_img=$data->profile_img;
        $old_img1=$data->visiting_card;

        if($request->hasFile('profile_img'))
        {
        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/mr',$file_name);
        $data->profile_img=$file_name;
        unlink('upload/mr/'.$old_img);
        }

        if($request->hasFile('visiting_card'))
        {
        $file1=$request->file('visiting_card');
        $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
        $file1->move('upload/visitingcard/',$file_name1);
        $data->visiting_card=$file_name1;
        unlink('upload/visitingcard/'.$old_img1);
        }
        

        $res=$data->save();
        return redirect('/admin-mr')->with('success','update MR Success');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=mr::find($id);
        $data->delete();
        return redirect('admin-mr')->with("success","mr delete successfully");
    }
    public function destroymr($id)
    {
        $data=mr::find($id);
        $data->delete();
        return redirect('company-mr')->with("success","mr delete successfully");
    }
}

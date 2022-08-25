<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\companie;
use Hash;
use Session;

class companie_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=companie::all();
        return view('admin.company',["com_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-company');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new companie;
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->company_name=$request->company_name;
        $data->password=Hash::make($request->password);
        $data->visiting_card=$request->visiting_card;
        $data->profile_img=$request->profile_img;

        $file1=$request->file('visiting_card');
        $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
        $file1->move('upload/visitingcard',$file_name1);
        $data->visiting_card=$file_name1;

        $file=$request->file('profile_img');
        $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
        $file->move('upload/company',$file_name);
        $data->profile_img=$file_name;
        

        $res=$data->save();
        return redirect('/admin-add-company')->with('success','add company successfull');
        

        

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
    public function editcompany($id)
    {
        $data=companie::find($id);
        return view('admin.editcompany',["fetch"=>$data]);
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
        $data=companie::find($id);
        $data->first_name=$request->first_name;
        $data->last_name=$request->last_name;
        $data->email=$request->email;
        $data->company_name=$request->company_name;
        $old_img=$data->profile_img;
        $old_img1=$data->visiting_card;

        if($request->hasFile('profile_img'))
        {
            $file=$request->file('profile_img');
            $file_name=time()."_profile_img.".$request->file('profile_img')->getClientOriginalExtension();
            $file->move('upload/company',$file_name);
            $data->profile_img=$file_name;
            unlink('upload/company/'.$old_img);
        }

        if($request->hasFile('visiting_card'))
        {
            $file1=$request->file('visiting_card');
            $file_name1=time()."_visiting_card.".$request->file('visiting_card')->getClientOriginalExtension();
            $file1->move('upload/visitingcard',$file_name1);
            $data->visiting_card=$file_name1;
            unlink('upload/visitingcard/'.$old_img1);

        }
        $res=$data->save();
        return redirect('/admin-company')->with('success','update company Success');
       

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=companie::find($id);
        $data->delete();
        return redirect('admin-company')->with("success","company delete successfully");
    }
}

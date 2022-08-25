<?php

namespace App\Http\Controllers;

use App\Models\specialist;
use Hash;
Use Session;

use Illuminate\Http\Request;

class specialist_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=specialist::all();
        return view('admin.specialities',["spe_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.add-specilities'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data=new specialist;
        $data->name=$request->name;
        $data->img=$request->img;

        $file=$request->file('img');
        $file_name=time()."_img.".$request->file('img')->getClientOriginalExtension();
        $file->move('upload/specilities',$file_name);
        $data->img=$file_name;
       

        $res=$data->save();
        return redirect('/admin-add-specialities')->with('success','add specialities successfull');
        

        
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
    public function editspecialist($id)
    {
        $data=specialist::find($id);
        return view('admin.editspecialist',["fetch"=>$data]);
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
        $data=specialist::find($id);
        $data->name=$request->name;
        $old_img=$data->img;
        

        if($request->hasFile('img'))
        {
            $file=$request->file('img');
            $file_name=time()."_img.".$request->file('img')->getClientOriginalExtension();
            $file->move('upload/specilities/',$file_name);
            $data->img=$file_name;
            unlink('upload/specilities/'.$old_img);
        }

       
        $res=$data->save();
        return redirect('/admin-specialities')->with('success','update specilities Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=specialist::find($id);
        $data->delete();
        return redirect('admin-specialities')->with("success","specialist delete successfully");
    }
}

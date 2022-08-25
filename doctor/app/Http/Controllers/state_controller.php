<?php

namespace App\Http\Controllers;
use App\Models\doctor;
use App\Models\state;
use App\Models\citie;
use App\Models\categorie;
use App\Models\area;
use Hash;
use Session;

use Illuminate\Http\Request;

class state_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$data=state::all();
        //return view('admin.location',["st_arr"=>$data]);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sta_id_arr=state::all();
        $city=citie::all();
        $are=area::all();
        return view('admin.location',["sta_id_arr"=>$sta_id_arr,"city"=>$city,"are"=>$are]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    public function addstate(Request $request)
    {
        $data=new state;
        $data->name=$request->name;
       
        $data->save();
		return redirect('/admin-location')->with('success','add state Success');
    }
    public function addcity(Request $request)
    {
        $data=new citie;
        $data->sid=$request->sid;
        $data->name=$request->name;
       
        $data->save();
		return redirect('/admin-location')->with('success1','add city Success');
    }

    public function addarea(Request $request)
    {
        $data=new area;
        $data->citie_id=$request->citie_id;
        $data->name=$request->name;
       
        $data->save();
		return redirect('/admin-location')->with('success2','add area Success');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroystate($id)
    {
        $data=state::find($id);
        $data->delete();
        return redirect('admin-location')->with("success3","state delete successfully");
    }
    public function destroycity($id)
    {
        $data=citie::find($id);
        $data->delete();
        return redirect('admin-location')->with("success4","city delete successfully");
    }
    public function destroyarea($id)
    {
        $data=area::find($id);
        $data->delete();
        return redirect('admin-location')->with("success5","area delete successfully");
    }
}

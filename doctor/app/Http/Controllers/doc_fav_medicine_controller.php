<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine;
use App\Models\doc_fav_medicine;
use Hash;
use Session;

class doc_fav_medicine_controller extends Controller
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
        $data=medicine::all();
        $fetch=doc_fav_medicine::where("doctor_id","=",Session('doctor_id'))->get();
         return view('doctor.my-medicine',["medi_arr"=>$data,"medicine_arr"=>$fetch]);
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
    public function addmedicinelist(Request $request)
    {
        $data=new doc_fav_medicine;
        $data->medicine_name=$request->medicine_name;
        $data->doctor_id=session('doctor_id');
        $data->save();
        return redirect('/doctor-my-medicine')->with('success','Medicine Add Success');
    }
    public function addmedicine(Request $request)
    {
        $data=new doc_fav_medicine;
        $data->medicine_name=$request->medicine_name;
        $data->doctor_id=session('doctor_id');
        $data->save();
        return redirect('/doctor-my-medicine')->with('succes','Medicine Add Success');
        
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
    public function destroy($id)
    {
        $data=doc_fav_medicine::find($id);
        $data->delete();
        return redirect('/doctor-my-medicine')->with("suc"," deleted successfully");
    }
    
}

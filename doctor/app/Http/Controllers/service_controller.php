<?php

namespace App\Http\Controllers;
use App\Models\service;
use App\Models\drspecialitie;
use Hash;
use Session;
use Illuminate\Http\Request;

class service_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     
     */
    public function index()
    {
        
        $data=service::where('doctor_id','=',Session('doctor_id'))->get();
        $data1=drspecialitie::where('doctor_id','=',Session('doctor_id'))->get();
        return view('doctor.add-service-specialization',["service_arr"=>$data],["special_arr"=>$data1]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doctor.add-service-specialization');
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
    public function addservice(Request $request)
    {
        $data=new service;
        $data->tittle=$request->tittle;
        $data->doctor_id=session('doctor_id');
        $data->save();
		return redirect('/doctor-service-specialization')->with('success1','add service Success');
    }

    public function adddrspecialist(Request $request)
    {
        $data=new drspecialitie;
        $data->tittle=$request->tittle;
        $data->doctor_id=session('doctor_id');
        $data->save();
		return redirect('/doctor-service-specialization')->with('succes2','add drspeciallity Success');
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
    public function destroyservices($id)
    {
        $data=service::find($id);
        $data->delete();
        return redirect('doctor-service-specialization')->with("success3","service delete successfully");
    }

    public function destroyspcialist($id)
    {
        $data=drspecialitie::find($id);
        $data->delete();
        return redirect('doctor-service-specialization')->with("success4","Dr
        specizilation delete successfully");
    }

    
}

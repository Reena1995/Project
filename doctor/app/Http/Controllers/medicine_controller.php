<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\medicine;
use Hash;
use Session;

class medicine_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=medicine::where('doctor_id','=',Session('doctor_id'))->get();
        
        return view('doctor.my-medicine',["medi_arr"=>$medi_arr]);
    }
    public function mediview()
    {
       $data=medicine::where("company_id","=",Session('company_id'))->get();
       return view('company.medicine-manager',["me_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medi_arr=medicine::all();
         return view('doctor.my-medicine',["medi_arr"=>$medi_arr]);
    }
    public function medi()
    {
         return view('company.medicine-manager');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new medicine;
        $data->medicine_name=$request->medicine_name;
        
        $res=$data->save();
        return redirect('/doctor-my-medicine')->with('succes','add medicine successfull');
        
    }

    public function addmedi(Request $request)
    {
        $data=new medicine;
        $data->medicine_name=$request->medicine_name;
        $data->company_id =Session('company_id');
        
        $res=$data->save();
        return redirect('/company-medicine-manager')->with('success','add medicine successfull');
        
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
        //
    }
    public function medidestroy($id)
    {
        $data=medicine::find($id);
        $data->delete();
        return redirect('/company-medicine-manager')->with('succ','delete succesfully medicine');
    }
}

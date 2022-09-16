<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stockist;
use App\Models\state;
use App\Models\citie;
use App\Models\area;
use App\Models\healthmanager;
use App\Models\companie;
use Hash;
use Session;


class stockist_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=stockist::all();
        return view('admin.stockiest',["stock_arr"=>$data]);
    }
    public function managestockist()
    {
        $data=stockist::where('company_id','=',Session('company_id'))->get();
        return view('company.stockiest',["sto"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=state::all();
        $data1=citie::all();
        $data2=area::all();
        return view('company.add-stockiest',["sta"=>$data,"ci"=>$data1,"ar"=>$data2]);
    }
    public function managestockistpage()
    {
    
        return view('company.stockiest');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new stockist;
        $data->company_id=Session('company_id');
        $data->name=$request->name;
        $data->state=$request->state;
        $data->city=$request->city;
        $data->area=$request->area;
        $data->address=$request->address;
        $data->pincode=$request->pincode;

        $res=$data->save();
        return redirect('/company-add-stockiest')->with('success','add stockist successfully');

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
    public function stockdestroy($id)
    {
        $data=stockist::find($id);
        $data->delete();
        return redirect('/company-stockiest')->with('success','delete successfully stockist');
    }
}

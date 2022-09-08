<?php

namespace App\Http\Controllers;
use App\Models\division;
use Hash;
use Session;


use Illuminate\Http\Request;

class division_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=division::where('company_id','=',Session('company_id'))->get();
         return view('company.divisionsmanage',["division_arr"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.divisionsmanage');
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
    public function adddivision(Request $request)
    {
        $data=new division;
        $data->division_name=$request->division_name;

        $data->company_id=Session('company_id');
        $res=$data->save();
        return redirect('/company-divisions-manager')->with('success','add success division');
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
        $data=division::find($id);
        $data->delete();
        return redirect('/company-divisions-manager')->with('succ','delete succesfully');
    }
}

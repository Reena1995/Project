<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Pdf;

class Dom_Controller extends Controller
{
    
    public function pdf()
    {
        $data =[
            'title' => 'welcome to page',
            'date' => date('m/d/y')
        ];
        
        $pdf = PDF:: loadview('index', $data);
        return  $pdf->download('first.pdf');
    }

    public function show()
    {
       return view('page');
    }

    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

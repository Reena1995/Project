<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreatePdf;
use Illuminate\Support\Facades\Storage;
use PDF;

class PdfController extends Controller
{
    // public function index()
    // {
    //    $mpdf = new \Mpdf\Mpdf();
    //    $mpdf ->WriteHTML(view('index')) ;
    //    $mpdf->Output();
    // }

    public function index()
    {
       
        $data['category'] = [
            'foo' => 'bar'
        ];

        $pdf = PDF::loadView('index', $data);
        return $pdf->download('firstmdf.pdf');
    }

    public function show()
    {
       return view('page');
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

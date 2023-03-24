<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeePersonalDetail;
use DB;
use Log;
use Auth;
use Session;
use Validate;

class EmpPersonalDetailController extends Controller
{
   
    public function index()
    {
       
    }

    
    public function create()
    {
        return view('admin.modules.employee.personal_detail.personal');
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
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

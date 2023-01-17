<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User;

class AjaxController extends Controller
{
    //
    public function ajaxGet()
    {
        # code...
        return view('ajax');
    }

    public function ajaxGetUser()
    {
        $users = User::get();

        return response()->json(['data'=>$users,'status'=>200,'message'=>'done'],200);
        # code...
    }

   
}

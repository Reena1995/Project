<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Event;
use App\Events\SendMail;

class EventController extends Controller
{
    
    public function index()
    {
        Event::dispatch(new sendMail(2));
    }

   
    public function create()
    {
        //
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

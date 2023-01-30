<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Validator;


class Passauth_Controller extends Controller
{
   
    public function index()
    {
        //
    }

    public function register(Request $request){

        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|String|email|unique:users',
            'password'=>'required|String|min:4',
            'c_password'=>'required|same:password'

        ]); 
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $input=$request->all();
        $input['password'] = bcrypt($input['password']);
       
        $user = User::create($input);
         
        $responseArray = [];
        $responseArray['token'] = $user->createToken('MyApp')->accessToken;
        $responseArray['name'] = $user->name;

        return response()->json($responseArray,200);

    }

    public function login(Request $request){
        $validator=Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required|String|min:4'

        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        if(!$token=auth()->attempt($validator->validated())){
            return response()->json(['error'=>'Unauthorized'],401);
        }
        return $this->createNewToken($token);
        
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

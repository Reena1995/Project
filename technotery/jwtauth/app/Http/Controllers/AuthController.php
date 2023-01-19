<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Validator;


class AuthController extends Controller
{
    public function _construct(){
        $this->middleware('auth:api',['except'=>['login','register']]);
    }
    public function register(Request $request){

        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required|String|email|unique:users',
            'password'=>'required|String|confirmed|min:4',
            'role_id'=>'required'

        ]);
        if($validator->fails()){
            return response()->json($validator->errors()->toJson(),400);
        }
        $user=User::create(array_merge(
            $validator->validated(),
            ['password'=>bcrypt($request->password)]
        ));
        return response()->json([
            'message'=>'user successfully registered',
            'user'=>$user
        ],201);
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

    public function createNewToken($token){
        return response()->json([
            'access_token'=>$token,
            'token_type'=>'bearer',
            'expires_in'=>auth()->factory()->getTTL()*60,
            'user'=>auth()->user()
        ]);
    }

    public function profile(){
        return response()->json(auth()->user());
    }

    public function logout(){
        // dd(Auth::user());
       if(auth()->user())
       {
           auth()->logout();
           return response()->json([
               'message'=>'user  logout',
               
           ]);

       }
    }
}

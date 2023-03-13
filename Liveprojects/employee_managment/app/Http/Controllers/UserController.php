<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\EmployeePersonalDetail;
use App\Models\User;
use DB;
use Str;
use Log;
use Auth;
use Session;
use Validate;



class UserController extends Controller
{
    
    public function index()
    {
        $user = User::where('is_active',1)->where('role_id',2)->paginate(5);
        return view('admin.modules.employee.index',compact('user'));
       
    }

   
    public function create()
    {
        return view('admin.modules.employee.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $department = $request->validate([
            'first_name'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'last_name'=>'bail|required','regex:/(^[A-Za-z0-9 ]+$)+/',
            'company_mail'=>'bail|required|email|unique:users,email',
            'mobile_no'=>'bail|required|numeric|digits:10'
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $user = new User;
            $user->name = $request->first_name . ' ' . $request->last_name;
            $user->email = $request->company_mail;
            $user->mobile_no= $request->mobile_no;
            $user->password =Hash::make(Str::random(8));
            $user->role_id = '2';
            $user->onboarding_dtls='0';
            $user->uuid = \Str::uuid();
            $user->created_by = Auth::id();
          
            $res = $user->save();

            if(!$res)
            {
                DB::rollback();

                Session::flash('error','Internal server error please try again later.');
             
                return redirect()->back();
            }
          
            DB::commit();

            Session::flash('success','Employee create successfully');

            return redirect()->route('employee.index');
        
        }catch (\Illuminate\Database\QueryException $e) {
            Log::info('Error occured While executing query for user-id ' . Auth::id() . '. See the log below.');
            Log::info('Error Code: ' . $e->getCode());
            Log::info('Error Message: ' . $e->getMessage());
            Log::info("Exiting class:UserController function:store");
            Session::flash('danger', "Internal server error.Please try again later.");
            return redirect()->back();
        }    
        catch (\Exception $e) {
                Log::info('Error occured for user-id ' . Auth::id() . '. See log below');
                Log::info('Error Code: ' . $e->getCode());
                Log::info('Error Message: ' . $e->getMessage());
                Session::flash('danger', "Internal server error.Please try again later.");
                return redirect()->back();

        }
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit()
    {
        return view('admin.modules.employee.edit');
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

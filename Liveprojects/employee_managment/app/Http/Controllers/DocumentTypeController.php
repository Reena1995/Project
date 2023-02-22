<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentType;
use DB;
use Session;
use Log;
use Validate;
use Auth;

class DocumentTypeController extends Controller
{
    public function create()
    {
       return view('admin.modules.document_type.add');
    }

    
    public function store(Request $request)
    {
        Log::info('aaaaaaa');
         $doctype= $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            

        ]); 
        
        try{

            Log::info('bbbbbbb');
            DB::beginTransaction();
            $doctype = new DocumentType;
            $doctype->type = $request->type;
            $doctype->created_by = Auth::id();
            $doctype->uuid = \Str::uuid();
          
            $res = $doctype->save();

            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','document type create successfully');
            return redirect()->route('document_type.index');
           


        }
        catch (\Exception $exception) {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server error please try again later.');
            return redirect()->back();

        }
    }

   
    public function index()
    {
        $doctype = DocumentType::where('is_active',1)->get();
        return view('admin.modules.document_type.index',compact('doctype'));
    }   


    public function show($id)
    {
        $doctype = DocumentType::where('uuid',$id)->first();
        return view('admin.modules.document_type.show',compact('doctype'));
    }

    
    public function edit($id)
    {
        $doctype = DocumentType::where('uuid',$id)->first();
        return view('admin.modules.document_type.edit',compact('doctype'));
    }

   
    public function update(Request $request, $id)
    {
        Log::info('dddddddd');
        $doctype = $request->validate([
            'type'=>'required','regex:/(^[A-Za-z0-9 ]+$)+/',
            
        ]); 
       
        try{

            Log::info('eeeeeeee');
            DB::beginTransaction();
            $doctype = DocumentType::where('uuid',$id)->first();;
            $doctype -> type = $request->type;
            $doctype->updated_by = Auth::id();
            $res = $doctype ->save();
            
            if(!$res)
            {
                DB::rollback();
                Session::flash('error','Internal server error please try again later.');
             
            
                return redirect()->back();
            }
            DB::commit();
            Session::flash('success','document type update successfully');
            return redirect()->route('document_type.index');
           


        }
        catch (\Exception $exception) {
            Log::info('catch');
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            Session::flash('error','Internal server error please try again later.');
            return redirect()->back();

        }
    }

    

    public function status($id)
    {
      
       try{

           Log::info('hbjjhbdjhqw');
           DB::beginTransaction();
           $doctype = DocumentType::where('uuid',$id)->first();
           $doctype->is_active = 0;
           $doctype->updated_by = Auth::id();
           $res = $doctype->update();

           if(!$res)
           {
               DB::rollback();
               Session::flash('error','Internal server error please try again later.');
            
           
               return redirect()->back();
           }
           DB::commit();
           Session::flash('success',' document type delete successfully');
           return redirect()->route('document_type.index');
          


       }
       catch (\Exception $exception) {
           \Log::info("ERROR: CODE: " . $exception->getCode());
           \Log::info("ERROR: Message: " . $exception->getMessage());
           DB::rollback();
           Session::flash('error','Internal server error please try again later.');
           return redirect()->back();

       }

      

    }

    public function destroy($id)
    {
        //
    }
}

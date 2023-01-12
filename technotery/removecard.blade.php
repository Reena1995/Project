 Route::post('/removecart',[CartController::class,'removecart'])->name('removecartitem');

 $(document).on('click', '.removecart', function () {
         console.log("remove cart button");

         

         if(isLogin)
            {
               var removeId = $(this).data('id');
               console.log(removeId, 'removeid this tag');


                  $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });

                  
                  $.ajax({
                     type: 'post',
                     url: '/removecart',
                     // url: '{{route("removecartitem")}}',
                     data: {
                           'id': removeId,
                     },
                     success: function (response) { 
                           console.log(response, 'responsesssssssss');
                           console.log('hhhhhhhh'); 
                           if (response.success == true) {
                              console.log(response.success, 'response.status');
                              
                              swal.fire(response.message);
                              $('#product_add-'+removeId).remove();
                           }
                           else {
                              console.log("reeor");
                              swal.fire(response.message);
                           }

                     }, 
                     error: function(xhr, exception) {
                        console.log('xhr',xhr);
                        var error = false;
                        var msg = '';
                        
                        if(xhr.status === 0)
                        {
                           msg = 'Not connected.',
                           error = true;
                          

                        }else if(xhr.status == 404){
                           msg = 'Page not found.',
                           error = true;
                           

                        }else if(xhr.status === 500){
                           msg = 'Internal server errorrrr.',
                           error = true;
                          
                           // swal.fire(exception.success);

                        }else{
                           msg="something went wrong".
                           error = true;
                        }
                        swal.fire(msg);

                        
                     },

                  });
            
                        
            }
            else{
                      console.log('checkkkkk');
                     window.location.href="{{route('login-page')}}";
            }
           

         
      });  
	  
	  ///////////////////////////////////////
	   public function removecart(Request $request)
    {
        DB::beginTransaction();
        try
        {
            $cartId = $request->input('id');
            // \Log::info($userid);
             
            $addcart = Addtocart::where('id',$cartId)->first();
            // \Log::info(json_encode($favourite));
            $addcart->is_active = 0;
            $res = $addcart->update();
            if(!$res) {
                DB::rollback();
                return response()->json(['success'=>false,'message'=>'Internal server error.please try again later.'],500);
            }

            DB::commit(); 
            return response()->json(['success'=>true,'message'=>"Product remove from wishlist"],200);
        }
        catch (\Exception $exception) 
        {
            \Log::info("ERROR: CODE: " . $exception->getCode());
            \Log::info("ERROR: Message: " . $exception->getMessage());
            DB::rollback();
            return response()->json(['success'=>false,'message1'=>'Internal server error.please try again later.'],500);

        }
        return view("Frontend.addtocart");
    }

@extends('Frontend.Partial.master')
@section('main_container')
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>My AddToCart</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.php">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  
                  
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
       <!-- new design table of add to cart -->
        <section class="h-100" style="background-color: #eee;">
            <div class="container h-100 py-5">
                <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">

                    <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
                    <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!" class="text-body">price <i
                            class="fas fa-angle-down mt-1"></i></a></p>
                    </div>
                    </div>
                   
                     <div class="card rounded-3 mb-4">
                     @foreach($addcart as $add)
                        <div class="card-body p-4" id="product_add-{{$add->id}}">
                            <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img src="{{asset('Upload/Product/' . $add->product->isFeatureoneimage[0]->image)}}" class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <p class="lead fw-normal mb-2">{{$add->product->name}}</p>
                                
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 d-flex increment">
                              <input type="hidden" class="productID" value="{{$add->product->id}}">
                                <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                <i class="fas fa-minus minuss"></i>
                                </button>

                                <input id="form1" min="1" name="quantity"   value="{{$add->quantity}}" type="number"
                                class="form-control form-control-sm quantity" />

                                <button class="btn btn-link px-2"
                                onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                <i class="fas fa-plus pluss"></i>
                                </button>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <h5 class="mb-0">${{$add->price}}</h5>
                            </div>
                            <div class="col-md-2 col-lg-2 col-xl-2 maintotal">
                                <h5 class="mb-0"><input type="input"value="{{$add->productcart->total}}" class="total"></input></h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                <a href="#!"  data-id="{{$add->id}}" class="text-danger removecart"><i class="fas fa-trash fa-lg "></i></a>
                            </div>
                            </div>
                        </div>
                        
                        @endforeach   
                        <div class="card-footer">
                           <div class="row justify-content-end">
                              <div class="col-lg-6">
                                 <div class="form-bottom-input">
                                    <label for="">
                                        Total amount:
                                    </label>
                            
                                        <input type="input" class="form-control"></input>
                                
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
         
                  </div>
                
               </div>
            </div>
        </section>
     
      
     
      
      
      
     
      <!- footer-->
      <section class="sub-below-address py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Get In Touch Us</h3>
            <div class="icons mt-4 text-center">
               <ul>
                  <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                  <li><a href="#"><span class="fas fa-envelope"></span></a></li>
                  <li><a href="#"><span class="fas fa-rss"></span></a></li>
                  <li><a href="#"><span class="fab fa-vk"></span></a></li>
               </ul>
               <p class="my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
            <div class="email-sub-agile">
               <form action="#" method="post">
                  <div class="form-group sub-info-mail">
                     <input type="email" class="form-control email-sub-agile" placeholder="Email">
                  </div>
                  <div class="text-center">
                     <button type="submit" class="btn subscrib-btnn">Subscribe</button>
                  </div>
               </form>
            </div>
         </div>
      </section>
      <!--//subscribe-->
	  @endsection

     @section('script')
     <script>
      function addTocart(Product_id,Qunatityvalue){
         $.ajaxSetup({
                  headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
               });
               $.ajax({
                     type: 'post',
                     url: '{{route("frontend.addtocart")}}',
                     
                     data: {
                        'id': Product_id,
                        'quantity_val': Qunatityvalue,
                     },
                     success: function (response) { 
                        console.log(response, 'response');
                        console.log('hhhhhhhh'); 
                        swal.fire(response.message);
                       
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

      $(document).on('click', '.pluss', function () {
         console.log(".plusssss");
         // console.log($(this).parents('.increment').find('.quantity').val());
            quantityvalue=$(this).parents('.increment').find('.quantity').val();
            console.log(quantityvalue,'plus value');

            var product_id = $(this).parents('.increment').find('.productID').val();
            console.log('product_id',product_id);
            addTocart(product_id,quantityvalue)


           
      });
      ///////////////////////////////////////////////
      $(document).on('click', '.minuss', function () {
         console.log(".plusssss");

         quantityvalue=$(this).parents('.increment').find('.quantity').val();
            console.log(quantityvalue,'minus value');
            addTocart(Product_id,Qunatityvalue)
      });
      /////////////////////////////////////////////////////
     
    

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
	  

      </script>
     @endsection
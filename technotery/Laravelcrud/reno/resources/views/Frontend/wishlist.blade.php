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
                              <h5>My Wishlist product</h5>
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
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Sort Toys And Teddy bears<br>For Kids</h5>
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
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Best Toys And Dolls<br> For Kids</h5>
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
      <!-- //banner -->
      <!-- about -->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-4">
            <h3 class="title text-center mb-lg-5 mb-md-4  mb-sm-4 mb-3">Whishlist </h3>
            <div class="row banner-below-w3l">
            @foreach($whishlist as $wish)

               <div class="col-lg-4 col-md-6 col-sm-6 text-center banner-agile-flowers" id="product_wish-{{$wish->id}}">
                  <a href="{{route('frontend.productdetail',$wish->uuid)}}"><img src="{{asset('Upload/Product/' . $wish->product->isFeatureoneimage[0]->image)}}"   class="img-thumbnail" style="height:250px;width:250px;" alt=""></a>
                  <div class="banner-right-icon">
                     <h4 class="pt-3">{{$wish->product->name}}</h4>
                     <h4 class="pt-3" style="color:red;">{{$wish->product->proDetail->actualprice}}</h4>
                     <h4 class="pt-3" style="color:green;">{{$wish->product->proDetail->discountprice}}</h4>
                     <div class="tagWrapper">
                        
                        <a data-id="{{$wish->id}}"   class="unwished" > 
                           <i class="fa fa-heart "  style="color:red;font-size:25px;" aria-hidden="true"></i>                          
                        </a>  
                  
                     </div>

                     
                     
                     <p style="color:gery;"><b>Wishlist</b></p>

                     <br><br>
                  </div>
               </div>
              
            @endforeach
            </div>
         </div>
      </section>
     
      
      
      
     
      
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
        $(document).on('click','.unwished', function (e){
           e.preventDefault();
           console.log('unwisedddd')
           
           if(isLogin)
            {
                  var wishlistId = $(this).data('id');
                  console.log(wishlistId, 'wishlistId this tag');


                  $.ajaxSetup({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                  });

                  
                  $.ajax({
                     type: 'post',
                     url: '/unwishlist',
                     data: {
                           'id': wishlistId,
                     },
                     success: function (response) { 
                           console.log(response, 'responsesssssssss');
                           console.log('hhhhhhhh'); 
                           if (response.success == true) {
                              console.log(response.success, 'response.status');
                              
                              swal.fire(response.message);
                              $('#product_wish-'+wishlistId).remove();
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
    
	  
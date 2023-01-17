@extends('Frontend.Partial.master')
@section('main_container')
      <!-- banner -->
      <div class="inner_page-banner one-img">
      </div>
      <!--//banner -->
      <!-- short -->
      <div class="using-border py-3">
         <div class="inner_breadcrumb  ml-4">
            <ul class="short_ls">
               <li>
                  <a href="index.php">Home</a>
                  <span>/ /</span>
               </li>
               <li>Single Page</li>
            </ul>
         </div>
      </div>
      <!-- //short-->
      <!--//banner -->
      <!--/shop-->
      <section class="banner-bottom py-lg-5 py-3">
         <div class="container">
            <div class="inner-sec-shop pt-lg-4 pt-3">
               <div class="row">
                  <div class="col-lg-4 single-right-left ">
                     <div class="grid images_3_of_2">
                        <div class="flexslider1">
                           <ul class="slides responsive">
                          
                              <!-- @foreach($productts->proImages as $image)
                              <li data-thumb="{{asset('Upload/Product/'.$image->image)}}">
                                 <div class="thumb-image"> <img src="{{asset('Upload/Product/'.$image->image)}}"  data-imagezoom="true" class="img-fluid" alt=""> </div>
                              </li>
                             @endforeach  -->
                           </ul>
                           <div class="slider-for">
                              @foreach($productts->proImages as $image)
                              <div class="slider-items">
                                 <img src="{{asset('Upload/Product/'.$image->image)}}" style="height:400px;width: 400px;"alt="">
                              </div>
                              @endforeach
                              
                           </div>
                           <div class="slider slider-nav">
                              @foreach($productts->proImages as $image)
                                 <div class="slider-nav-img">
                                    <img src="{{asset('Upload/Product/'.$image->image)}}" alt=""alt="">
                                 </div>
                              @endforeach
                              
                           </div>
                           <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8 single-right-left simpleCart_shelfItem">
                 
                     <h3>{{$productts->name}}</h3>
                     <p><span class="item_price">{{$productts->proDetail->discountprice}}</span>
                        <del>{{$productts->proDetail->actualprice}}</del>
                     </p>
                     <div class="rating1">
                        <ul class="stars">
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                           <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                     <div class="description">
                        
                        <form action="#" method="post">
                           <input class="form-control quantity" type="number" name="quantity" id="quantity" min="1" value="1" style="width:17% !important"  required="" >   
                           <h3 style="color:black;">Quantity</h3>
                           <br>
                           
                           

                           <div class="tagWrapper">
                           
                              <a data-id="{{$productts->id}}"   class="favourite" > 
                                 @if(!empty($productts->favourite) && ($productts->favourite->is_active == '1'))
                                    <i class="fa fa-heart heartdel"  style="color:red;font-size:25px;" aria-hidden="true"></i>
                                 @else
                                    <i class="far fa-heart tagDelete"  style="color:red;font-size:25px;" aria-hidden="true"></i>
                                 @endif
                              </a>  
                        
                           </div>
                           

                           
                           
                           <!-- <div class="mainaddcart">
                              @if(!auth()->user())
                                 <i class="fas fa-shopping-cart " data-id="{{$productts->id}}"  aria-hidden="true"></i>
                              @elseif (!empty($productts->activeCartItem) && $productts->activeCartItem->productcart->user_id == auth()->user()->id)
                                 <a class="eye-icon" href="{{route('addtocart')}}"><i class="fas fa-eye " aria-hidden="true"></i></a>
                              @else
                              <i class="fas fa-shopping-cart " data-id="{{$productts->id}}" style="font-size:25px;" aria-hidden="true"></i>
                              @endif
                           </div> -->
                           <button type="button" data-id="{{$productts->id}}" class="toys-cart ptoys-cart add addtocart" data-qty="{{$productts->proDetail->quantity ?? 0}}">Add to Cart</button>
                     </form>
                     </div>
                    
                     
                     <!-- <div class="occasion-cart">
                        <div class="toys single-item singlepage">
                           <form action="#" method="post">
                              <input type="hidden" name="cmd" value="_cart">
                              <input type="hidden" name="add" value="1">
                              <input type="hidden" name="toys_item" value="Farenheit">
                              <input type="hidden" name="amount" value="575.00">
                              <button type="submit" data-id="{{$productts->id}}" class="toys-cart ptoys-cart add addtocart">Add to Cart</button>
                           </form>
                        </div>
                     </div> -->
                     <ul class="footer-social text-left mt-lg-4 mt-3">
                        <li>Share On : </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-facebook-f"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-twitter"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fab fa-google-plus-g"></span>
                           </a>
                        </li>
                        <li class="">
                           <a href="#">
                           <span class="fab fa-linkedin-in"></span>
                           </a>
                        </li>
                        <li class="mx-1">
                           <a href="#">
                           <span class="fas fa-rss"></span>
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="clearfix"> </div>
                  <br>
                  <br>
                  <!--/tabs-->
                  <div class="responsive_tabs">
                     <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                           <li>Description</li>
                           <li>Reviews</li>
                           <li>Information</li>
                        </ul>
                        <div class="resp-tabs-container">
                           <!--/tab_one-->
                           <div class="tab1">
                              <div class="single_page">
                                 <h6>About Product</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                                 
                              </div>
                           </div>
                           <!--//tab_one-->
                           <div class="tab2">
                              <div class="single_page">
                                 <div class="bootstrap-tab-text-grids">
                                    <div class="bootstrap-tab-text-grid">
                                       <div class="bootstrap-tab-text-grid-left">
                                          <img src="{{url('Frontend/images/team1.jpg')}}" alt=" " class="img-fluid">
                                       </div>
                                       <div class="bootstrap-tab-text-grid-right">
                                          <ul>
                                             <li><a href="#">Admin</a></li>
                                             <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Reply</a></li>
                                          </ul>
                                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget.Ut enim ad minima veniam,
                                             quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis
                                             autem vel eum iure reprehenderit.
                                          </p>
                                       </div>
                                       <div class="clearfix"> </div>
                                    </div>
                                    <div class="add-review">
                                       <h4>add a review</h4>
                                       <form action="#" method="post">
                                          <div class="row">
                                             <div class="col-md-6">
                                                <input type="text" name="Name" required="">
                                             </div>
                                             <div class="col-md-6">
                                                <input type="email" name="Email" required="">
                                             </div>
                                          </div>
                                          <textarea name="Message" required=""></textarea>
                                          <input type="submit" value="SEND">
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab3">
                              <div class="single_page">
                                 <h6>Teddy Bear(Blue)</h6>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                                 <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue eget nisl ullamcorper, molestie
                                    blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                    ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. labore et dolore
                                    magna aliqua.
                                 </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!--//tabs-->
               </div>
            </div>
         </div>
      </section>
      <!--subscribe-address-->
      <section class="subscribe">
         <div class="container-fluid">
         <div class="row">
            <div class="col-lg-6 col-md-6 map-info-right px-0">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
            </div>
            <div class="col-lg-6 col-md-6 address-w3l-right text-center">
               <div class="address-gried ">
                  <span class="far fa-map"></span>
                  <p>25478 Road St.121<br>USA New Hill
                  <p>
               </div>
               <div class="address-gried mt-3">
                  <span class="fas fa-phone-volume"></span>
                  <p> +(000)123 4565<br>+(010)123 4565</p>
               </div>
               <div class=" address-gried mt-3">
                  <span class="far fa-envelope"></span>
                  <p><a href="mailto:info@example.com">info@example1.com</a>
                     <br><a href="mailto:info@example.com">info@example2.com</a>
                  </p>
               </div>
            </div>
         </div>
		  </div>
      </section>
      <!--//subscribe-address-->
	  @endsection
     @section('script')
     <script>
        $(document).on('click','.favourite', function (e){
           e.preventDefault();

            if(isLogin)
            {
               console.log('xxxxxxxxxxxx');
               var Product_id = $(this).data('id');
               console.log(Product_id, 'product id find');
               var favTag = $(this);
               console.log(favTag, 'fav tag');
            
                     $.ajaxSetup({
                           headers: {
                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                           }
                     });
                  
                     $.ajax({
                           type: 'post',
                           url: '{{route("index.favourite")}}',
                           // url: '{{route("index.favourite")}}',
                           data: {
                              'id': Product_id,
                           },
                           success: function (response) { 
                              console.log(response, 'response');
                              console.log('hhhhhhhh'); 
                              if (response.success == true) {
                                 console.log(response.success, 'response.status');
                                 // swal.fire(response.message);
                                 if (response.faveriot == 1) {
                                       favTag.find('.fa-heart').removeClass('far').addClass('fa');
                                 //    swal.fire('Product added succesfully.');
                                          swal.fire(response.message)
                                    
                                    
                                       
                                 } else {
                                       favTag.find('.fa-heart').removeClass('fa').addClass('far');
                                       swal.fire(response.message)
                                 }
                              }
                              else{
                                 console.log('121');
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
                                 $('.headercategories').html(msg);
                  
                              }else if(xhr.status == 404){
                                 msg = 'Page not found.',
                                 error = true;
                                 $('.headercategories').html(msg);
                  
                              }else if(xhr.status === 500){
                                 msg = 'Internal server errorrrrreena.',
                                 error = true;
                                 $('.headercategories').html(msg);
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
            /////////////Add to cart///////////
      $(document).on('click','.addtocart', function (){
           
           console.log('add to cart button click');

           var Product_id = $(this).data('id');
           var maxQty = $(this).attr('data-qty');
           console.log(Product_id, 'product id find');

           var Qunatityvalue = $('#quantity').val();
           console.log(Qunatityvalue, 'quantity value');

           var addTag = $(this);
           console.log(addTag, 'add tag');
           if(parseInt(maxQty) >= parseInt(Qunatityvalue)){ 
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
                        if (response.success == true) {
                           console.log(response.success, 'response.status');
                           swal.fire(response.message);
                              
                           
                        }
                        else{
                           console.log(response.success, 'response.status');
                           swal.fire(response.msg);
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
               }else{
                  $("#quantity").val(maxQty);
                  swal.fire('Out of stock');
               } 
                  

              
         });
     </script>
     
     @endsection
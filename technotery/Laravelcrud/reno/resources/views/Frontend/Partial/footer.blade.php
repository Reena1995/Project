<!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
         <div class="copy-agile-right">
            <p> 
               © 2018 Toys-Shop. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
            </p>
         </div>
      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='{{url('Frontend/js/jquery-2.2.3.min.js')}}'></script>
      
      <script src="{{url('Frontend/js/minicart.js')}}"></script> 
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="{{url('Frontend/js/jquery-ui.js')}}"></script>
      <script src="{{url('Frontend/js/responsiveslides.min.js')}}"></script>
      <script src="{{url('Frontend/js/imagezoom.js')}}"></script>
      <script src="{{url('Frontend/js/easy-responsive-tabs.js')}}"></script>
      <script src="{{url('Frontend/js/jquery.flexslider.js')}}"></script>
      
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="{{url('Frontend/js/jquery.flexisel.js')}}"></script> 
      <script src="{{url('Frontend/js/move-top.js')}}"></script>
      <script src="{{url('Frontend/js/easing.js')}}"></script>
      <script src="{{url('Frontend/js/bootstrap.min.js')}}"></script>
      <script src="{{url('Frontend/js/single.js')}}"></script> 


      <!-- 123 -->
      <!-- slik slider  -->
        <!-- <script src="{{url('Frontend/js/jquery-3.6.2.min.js')}}"></script>
        <script src="{{url('Frontend/js/jquery-migrate-1.2.1.min.js')}}"></script> -->
        <script src="{{url('Frontend/JS/slick.js')}}"></script>
        <script src="{{url('Frontend/js/slick.min.js')}}"></script>

        <script>
         $(document).ready(function () {
            $('.slider-for').slick({
               slidesToShow: 1,
               slidesToScroll: 1,
               arrows: false,
               // fade: true,
               asNavFor: '.slider-nav'
               });
               $('.slider-nav').slick({
               slidesToShow: 3,
               slidesToScroll: 1,
               asNavFor: '.slider-for',
               dots: true,
               centerMode: true,
               focusOnSelect: true
            });
            // $('.slider-img-tag').slick({
            //    infinite: true,
            //    slidesToShow: 1,
            //    slidesToScroll: 1,
            //    dots: true,
            //    infinite: true,
            //    speed: 300,
            //    });
            });
        </script>
   </body>
</html>
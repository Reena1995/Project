$(document).ready(function ($) {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top
        }, 900);
    });
   toys.render();
   toys.cart.on('toys_checkout', function (evt) {
      var items, len, i;
   
      if (this.subtotal() > 0) {
         items = this.items();
   
         for (i = 0, len = items.length; i < len; i++) {}
      }
   });
   $(function () { 
      $("#slider4").responsiveSlides({
         auto: true,
         pager:false,
         nav:true ,
         speed: 900,
         namespace: "callbacks",
         before: function () {
            $('.events').append("<li>before event fired.</li>");
         },
         after: function () {
            $('.events').append("<li>after event fired.</li>");
         }
      });
   
   });
   var defaults = {
        containerID: 'toTop', // fading element id
        containerHoverID: 'toTopHover', // fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
    };
    $().UItoTop({
        easingType: 'easeOutQuart'
    });
    $('#horizontalTab').easyResponsiveTabs({
        type: 'default', //Types: default, vertical, accordion           
        width: 'auto', //auto or any width like 600px
        fit: true, // 100% fit in a container
        closed: 'accordion', // Start closed if in accordion view
        activate: function (event) { // Callback function if tab is switched
            var $tab = $(this);
            var $info = $('#tabInfo');
            var $name = $('span', $info);
            $name.text($tab.text());
            $info.show();
        }
    });
    $('#verticalTab').easyResponsiveTabs({
        type: 'vertical',
        width: 'auto',
        fit: true
    });
});
$(window).load(function() {
    $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 3000,
        autoPlay:true,
        autoPlaySpeed: 2000,    		
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems:2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 2
            }
        }
    });
    
});
   $(window).load(function () {
       $("#slider-range").slider({
           range: true,
           min: 0,
           max: 9000,
           values: [50, 6000],
           slide: function (event, ui) {
               $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
           }
       });
       $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));
   
   });  
   $(window).load(function () {
       $('.flexslider1').flexslider({
           animation: "slide",
           controlNav: "thumbnails"
       });
   });
   jQuery(document).ready(function ($) {
       $(".scroll").click(function (event) {
           event.preventDefault();
           $('html,body').animate({
               scrollTop: $(this.hash).offset().top
           }, 900);
       });
   });
   $(document).ready(function () {
   
       var defaults = {
           containerID: 'toTop', // fading element id
           containerHoverID: 'toTopHover', // fading element hover id
           scrollSpeed: 1200,
           easingType: 'linear'
       };
   
   
       $().UItoTop({
           easingType: 'easeOutQuart'
       });
   
   });

   
/////////wishlist code ////////////////
$(document).on('click','.favourite',function(){

    console.log('xxxxxxxxxxxx');
    var Product_id=$(this).data('id');
       console.log(Product_id,'product id find');
      
        var $deleteButton = $(this).attr('disabled', true),
            $wrapper = $deleteButton.closest(".tagWrapper"),
            $tag = $wrapper.find('.tag');

       $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
     });
          $.ajax({
            action: 'tagdelete',
                tag: $tag.text(),
          
          type:'post',
         
          url:'/indexfavourite',
          
          data:{
             'id':Product_id,
          },
         
          success:function(response) {
             // $('#imgWrap'+image_id).html('');
             
             console.log(response,'response');
             console.log('hhhhhhhh');
             
                
            console.log(response.success,'response.status')
             if(response.success == true)
             {
                
                // $wrapper.remove();
                
                $($wrapper).replaceWith("<i class='fa fa-heart tagDelete'  style='color:red;font-size:25px;' aria-hidden='true'></i>")
             }
             else
             {
                
             }
          }
       });
       
 });
 ////////////////full heart icon ////////////////////////
 $(document).on('click','.unfavourite',function(){
    console.log('bbbbbbbbbbb');
    var Product_id=$(this).data('id');
       console.log(Product_id,'product id find');


 });



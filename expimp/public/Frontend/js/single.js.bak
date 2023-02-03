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

            for (i = 0, len = items.length; i < len; i++) { }
        }
    });
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: false,
            nav: true,
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
$(window).load(function () {
    $("#flexiselDemo1").flexisel({
        visibleItems: 3,
        animationSpeed: 3000,
        autoPlay: true,
        autoPlaySpeed: 2000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 2
            },
            tablet: {
                changePoint: 768,
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

// $(document).delegate('.favourite', 'click', function () {
//     if(isLogin)
//     {
//         console.log('xxxxxxxxxxxx');
//         var Product_id = $(this).data('id');
//         console.log(Product_id, 'product id find');
//         var favTag = $(this);
//         console.log(favTag, 'fav tag');
    
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
    
//         $.ajax({
//             type: 'post',
//             url: '/indexfavourite',
//             // url: '{{route("index.favourite")}}',
//             data: {
//                 'id': Product_id,
//             },
//             success: function (response) { 
//                 console.log(response, 'response');
//                 console.log('hhhhhhhh'); 
//                 if (response.success == true) {
//                     console.log(response.success, 'response.status');
//                     // swal.fire(response.message);
//                     if (response.faveriot == 1) {
//                         favTag.find('.fa-heart').removeClass('far').addClass('fa');
//                     //    swal.fire('Product added succesfully.');
//                             swal.fire(response.message)
                       
                       
                        
//                     } else {
//                         favTag.find('.fa-heart').removeClass('fa').addClass('far');
//                         swal.fire(response.message)
//                     }
//                 }
//                 else{
//                     console.log('121');
//                     swal.fire(response.message);
//                 }
//             },
//             error: function(xhr, exception) {
//                 console.log('xhr',xhr);
//               var error = false;
//               var msg = '';
              
//                 if(xhr.status === 0)
//                 {
//                    msg = 'Not connected.',
//                    error = true;
//                    $('.headercategories').html(msg);
    
//                 }else if(xhr.status == 404){
//                    msg = 'Page not found.',
//                    error = true;
//                    $('.headercategories').html(msg);
    
//                 }else if(xhr.status === 500){
//                    msg = 'Internal server errorrrrreena.',
//                    error = true;
//                    $('.headercategories').html(msg);
//                  // swal.fire(exception.success);
    
//                 }else{
//                  msg="something went wrong".
//                    error = true;
//                 }
//                 swal.fire(msg);
    
              
//              },
//         });
    
//     }
//     else{
//         console.log('checkkkkk');
//         window.location.href="{{route('login-page')}}";
//     }
    
// });


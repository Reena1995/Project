

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>Toys Shop an Ecommerce Category Bootstrap Responsive Web Template | Home :: w3layouts</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <!--booststrap-->
      <link href="{{url('Frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="{{url('Frontend/css/fontawesome-all.min.css')}}" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="{{url('Frontend/css/flexslider.css')}}" type="text/css" media="all" />
      <!--flexs slider-->
      <!-- <link href="{{url('Frontend/css/JiSlider.css')}}" rel="stylesheet"> -->
      <!--Shoping cart-->
      <link rel="stylesheet" href="{{url('Frontend/css/jquery-ui1.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{url('Frontend/css/shop.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{url('Frontend/css/easy-responsive-tabs.css')}}" type="text/css" />
      <link rel="stylesheet" href="{{url('Frontend/css/flexslider.css')}}" type="text/css" /> 
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="{{url('Frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
      
      
      <!-- slick slider -->
      <link rel="stylesheet" href="{{url('Frontend/css/slick.css')}}" />
        <link rel="stylesheet" href="{{url('Frontend/css/slick-theme.css')}}" />
        <!--sweet alert-->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>var isLogin = "{{ !empty(Auth::user())?true:false}}";</script>

   </head>
	<body>
	<body>
      <div class="header-outs" id="home">
         <div class="header-bar">
            <div class="info-top-grid">
               <div class="info-contact-agile">
                  <ul>
                     <li>
                        <span class="fas fa-phone-volume"></span>
                        <p>+(000)123 4565 32</p>
                     </li>
                     <li>
                        <span class="fas fa-envelope"></span>
                        <p><a href="mailto:info@example.com">info@example1.com</a></p>
                     </li>
                     <li>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <h1><a class="navbar-brand" href="index.php">Toys-Shop</a></h1>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <form class="form-inline my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search">
                        <button class="btn" type="submit">Search</button>
                     </form>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              
                              <span class="mainwishlist"><a   class="far fa-heart" href="{{route('index.wishlist')}}"></a></span>
                              
                           </li>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li><span class=""><a  class="fas fa-cart-arrow-down" href="{{route('addtocart')}}"></a></span></li>
                           <!-- <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"><a   href=""></a></span>
                                 </button>
                              </form>
                           </li> -->
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{route('frontend.home')}}">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('frontend.about')}}" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('frontend.service')}}" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('frontend.shop')}}" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Pages
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="{{route('frontend.icon')}}">404 Page</a>
                           <a class="nav-link " href="{{route('frontend.typography')}}">Typography</a>
                        </div>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Category
                        </a>
                       
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <!-- <a class="nav-link" href="{{route('frontend.allproduct')}}">All Product</a> -->
                        @foreach($productModel->allCategory() as $cat)
                           <a class="nav-link" href="{{route('frontend.findproduct',encrypt($cat->id))}}">{{$cat->name}}</a>
                        @endforeach
                        </div>
                       
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           
                              <a class="nav-link" href="{{route('frontend.allproduct')}}">All Product</a>
                             
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="{{route('frontend.contact')}}" class="nav-link">Contact</a>
                     </li>
                     
                     
                  </ul>
                  @if(Auth::user())
                     <a class="btn btn-primary"  href="{{route('Logout')}}">Logout</a>
                  @else
                  <a class="btn btn-primary"  href="{{route('login-page')}}">Login</a>
                  @endif
                  </div>
            </nav>
         </div>
       
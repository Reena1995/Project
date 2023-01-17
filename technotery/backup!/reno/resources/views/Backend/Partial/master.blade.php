<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{url('Backend/css/bootstrap.min.css')}}" >
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{url('Backend/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{url('Backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{url('Backend/css/font.css')}}" type="text/css"/>
    <link href="{{url('Backend/css/font-awesome.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{url('Backend/css/morris.css')}}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{url('Backend/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
     
<!-- Latest compiled and minified JavaScript -->
    <!--script src="{{url('Backend/js/boostrap.bundle.min.js')}}"></script-->
</head>
<body>
    <section id="container">
        @include('Backend.Partial.header')
        @include('Backend.Partial.sidebar')
        <section id="main-content">
            <section class="wrapper">
                @foreach(['error','success'] as $msg)
                    @if(Session::has($msg))
                    <div class="alert alert-{{$msg}}" role="alert">
                    {{session::get($msg)}}
                    </div>
                    @endif
                @endforeach
                @yield('content')
            </section>
        </section>
    </section>
    @include('Backend.Partial.footer')
    <!-- <div class="footer">
        <div class="wthree-copyright">
        <p>© 2017 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div> -->
    @yield('script')

</body>
</html>
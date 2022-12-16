<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-login')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        
		<title>Adocmedi - Admin Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
		<meta name="robots" content="">
		
		<!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{url('/Backend/assets/img/favicon.png')}}">

		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/font-awesome.min.css')}}">
		
		<!-- Main CSS -->
        <link rel="stylesheet" href="{{url('Backend/assets/css/style.css')}}">
		
		<!--[if lt IE 9]>
			<script src="{{url('Backend/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{url('Backend/assets/js/respond.min.js')}}"></script>
		<![endif]-->
    </head>
    <body>
	@include('sweetalert::alert')
		<!-- Main Wrapper -->
        <div class="main-wrapper login-body">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                    	<div class="login-left">
							<img class="img-fluid" src="{{url('/Backend/assets/img/logo-white.png')}}" alt="Logo">
                        </div>
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Admin Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								@if(session()->has('fail'))
								    <i class="alert alert-danger">{{session('fail')}}</i>
							    @endif
								<!-- Form -->
								<form action="{{url('/adminlogin')}}" method="post" enctype="multipart/form-data">
									@csrf
									<div class="form-group">
										<input class="form-control" type="text" name="email" placeholder="Email">
										@if ($errors->has('email'))
            								<span class="text-danger">{{ $errors->first('email') }}</span>
       									@endif
									</div>
									<div class="form-group">
										<input class="form-control" type="password" name="password" placeholder="Password">
										@if ($errors->has('password'))
            								<span class="text-danger">{{ $errors->first('password') }}</span>
       									@endif
									</div>
									<div class="form-group">
										<button class="btn btn-primary btn-block" type="submit" name="submit" value="Send">Login</button>
									</div>
								</form>
								<!---/Form -->
								
								<div class="text-center forgotpass"><a href="{{url('/aforgot_password')}}">Forgot Password?</a></div>
								
								  
								

							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-login')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>

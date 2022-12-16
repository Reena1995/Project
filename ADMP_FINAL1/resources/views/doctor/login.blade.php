<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/{{url('/login')}}  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Adocmedi - Doctor Login</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
		<meta name="robots" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="{{url('Frontend/assets/img/favicon.png')}}" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/bootstrap.min.css')}}">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/fontawesome/css/fontawesome.min.css')}}">
		<link rel="stylesheet" href="{{url('Frontend/assets/plugins/fontawesome/css/all.min.css')}}">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="{{url('Frontend/assets/css/style.css')}}">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="{{url('Frontend/assets/js/html5shiv.min.js')}}"></script>
			<script src="{{url('Frontend/assets/js/respond.min.js')}}"></script>
		<![endif]-->
	
	</head>
	<body class="account-page">
	@include('sweetalert::alert')
		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="{{url('/doctor-dashboard')}}" class="navbar-brand logo">
							<img src="{{url('Frontend/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="{{url('/doctor')}}" class="menu-logo">
								<img src="{{url('Frontend/assets/img/logo.png')}}" class="img-fluid" alt="Logo">
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							
							<li class="login-link">
								<a href="{{url('/doctor')}}">Login / Signup</a>
							</li>
						</ul>
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +1 315 369 5943</p>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link header-login" href="{{url('/doctor')}}">login / Signup </a>
						</li>
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Login Tab Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Doccure Login">	
									</div>
									
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Login <span>Doccure</span></h3>
										</div>@if(session()->has('fail'))
												
												<i class="alert alert-success">{{session('fail')}}</i>
															
											@endif
										<form action="{{url('/doctorlogin')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
												@if ($errors->has('email'))
            										<span class="text-danger">{{ $errors->first('email') }}</span>
       											@endif
											</div>
											<div class="form-group form-focus">
												<input type="password" name="password" class="form-control floating">
												<label class="focus-label">Password</label>
												@if ($errors->has('password'))
            										<span class="text-danger">{{ $errors->first('password') }}</span>
       											@endif
											</div>
											<div class="text-right">
												<a class="forgot-link" href="{{url('/dtforget_password')}}">Forgot Password ?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit" value="send">Login</button>
											
											
											</form>
									</div>
								</div>
							</div>
							<!-- /Login Tab Content -->
								
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			<!-- Footer -->
			@include('doctor.Layout.footer')
			<!-- /Footer -->
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{url('Frontend/assets/js/jquery.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{url('Frontend/assets/js/popper.min.js')}}"></script>
		<script src="{{url('Frontend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{url('Frontend/assets/js/script.js')}}"></script>
		
	</body>

<!-- doccure/{{url('/login')}}  30 Nov 2019 04:12:20 GMT -->
</html>
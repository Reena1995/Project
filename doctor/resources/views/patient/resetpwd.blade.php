@extends('patient.Layout.main_layout') 	
@section('main_container')
<!DOCTYPE html> 
<html lang="en">
	
<!-- doccure/{{url('/login')}}  30 Nov 2019 04:12:20 GMT -->
<head>
		<meta charset="utf-8">
		<title>Doccure</title>
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

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-8 offset-md-2">
							
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center">
									<div class="col-md-7 col-lg-6 login-left">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-6 login-right">
										<div class="login-header">
											<h3>Reset your Password?</h3>
											<p class="small text-muted">Enter your email to get a password reset link</p>
										</div>
										
										<p>@if(session()->has('fail'))
											<i class="alert alert-success">{{session('fail')}}</i>
											@endif
										</p>

										<p>@if(session()->has('success'))
											<i class="alert alert-success">{{session('success')}}</i>
											@endif
										</p>
										<!-- Forgot Password Form -->
										<form action="{{url('/Reset-password')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="password" class="form-control floating" name="oldpassword">
												@if($errors->has('oldpassword'))	
													<span class="text-danger" >{{($errors->first('oldpassword'))}}</span>
												@endif
												<label class="focus-label">Old Password</label>
											</div>
                                            <div class="form-group form-focus">
												<input type="password" class="form-control floating" name="newpassword">
												<label class="focus-label">New Password</label>
												@if($errors->has('newpassword'))	
													<span class="text-danger" >{{($errors->first('newpassword'))}}</span>
												@endif
											</div>
                                            <div class="form-group form-focus">
												<input type="password" class="form-control floating" name="confirm_password">
												<label class="focus-label">Confirm Password</label>
												@if($errors->has('confirm_password'))	
													<span class="text-danger" >{{($errors->first('confirm_password'))}}</span>
												@endif
											</div>
											<div class="text-right">
												<a class="forgot-link" href="{{url('/login')}}">Remember your password?</a>
											</div>
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit" value="Send">Reset Password</button>
										</form>
										<!-- /Forgot Password Form -->
										
									</div>
								</div>
							</div>
							<!-- /Account Content -->
							
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
		</div>
   
			@endsection

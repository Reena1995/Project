@extends('patient.Layout.main_layout') 	
@section('main_container')
			
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
											<h3>Contact</h3>
										</div>
										@if(session()->has('success'))
												<br>
												<i class="alert alert-success">{{session('success')}}</i>
												<br>
												@endif
										
										
										<!-- Forgot Password Form -->
										<form action="{{url('/contact')}}" method="post" enctype="multipart/form-data">
											@csrf
											<div class="form-group form-focus">
												<input type="text" name="name" class="form-control floating">
												<label class="focus-label">Name</label>
											</div>
											<div class="form-group form-focus">
												<input type="email" name="email" class="form-control floating">
												<label class="focus-label">Email</label>
											</div>
											<div class="form-group form-focus">
												<input type="mobileno" name="mobileno" class="form-control floating">
												<label class="focus-label">Mobile No</label>
											</div>
											<div class="form-group form-focus">
												<textarea name="comment" class="form-control floating" rows="3"></textarea>
												<label class="focus-label">Comment</label>
											</div>
											
											<button class="btn btn-primary btn-block btn-lg login-btn" type="submit" name="submit" value="Send">Submit</button>
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
   
			@endsection	
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/forgot-password')}}  30 Nov 2019 04:12:20 GMT -->
</html>
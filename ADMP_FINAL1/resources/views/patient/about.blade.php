@extends('patient.Layout.main_layout')

<!---add Title 'title', 'Home Page'    --->
@section('title','About')
<!---add description here ---> 	
@section('description', '')
<!---add keywords here    --->
@section('keywords', '')
<!---add robots here    --->
@section('robots', '')

 	
@section('main_container')
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					
					<div class="row">
						<div class="col-md-12">
							
							<!-- Account Content -->
							<div class="account-content">
								<div class="row align-items-center justify-content-center login-right">
									<div class="col-md-12 col-lg-12">
										<div class="section-header">	
											<h2 class="mt-2 text-center">About ADOCMEDI</h2>
										</div>	
									</div>
									<div class="col-md-4 col-lg-4">
										<img src="{{url('Frontend/assets/img/shlok.jpg')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-8 col-lg-8 ">
										<div class="login-header">
											<br>
											<p>About us - ADOCMEDI is a website where patients, doctors and pharma people all come at one platform to make their life more easier. We will provide full security and privacy for your data.</p>
											<br>
											<p>ADOCMEDI help people to save there time and helping Patients to take digital appointment and Rx. Patient can add their medical reports here also so it shows to his doctor directly. With this we can save paper and make our INDIA a green country. If not require don't take paper from doctor. Now you can save your health data digitally and be free from worries of taking care of physical health records.Wherever you go you just need to give your last time visit appointment id or patient id for your last health details. Doctor find all your health records digitally.<p/>
										</div>
									</div>
									
									<div class="col-md-8 col-lg-8 ">
										<h3>Doctor can...</h3>
										<div class="login-header">
											<br>
											<p>ADOCMEDI also save time of doctor. With your registration on this website doctor can see every single data of their patient. Doctor don’t need to keep physical data for patient.By just entering patient id doctor can see all details of their patient like Rx ,medical reports,diagnose details etc. </p>
											<br>
											<p>Even near by patient can find doctor online and book appointment and if doctor provide their unique link to patient. Before reaching clinic doctor can see how many patients come today at clinic if all patient booked their appointment online. <p/>
										</div>
										<h3>Pharma Persons can...</h3>
										<div class="login-header">
											ADOCMEDI also help pharma people to book appointment online and also find basic details of doctors.
										</div>
									</div>
									<div class="col-md-4 col-lg-4">
										<img src="{{url('Frontend/assets/img/login-banner.png')}}" class="img-fluid" alt="Login Banner">	
									</div>
									<div class="col-md-12 col-lg-12">
										<h3 class="mt-2">Availabe all Feature's Clinics, Hospitals and Doctors </h3>
									</div>
									
									<div class="col-md-5 features-img">
										<img src="{{url('Frontend/assets/img/features/feature.png')}}" class="img-fluid" alt="Feature">
									</div>
									<div class="col-md-7">
										<div class="features-slider slider">
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-01.jpg')}}" class="img-fluid" alt="Feature">
												<p>Patient Ward</p>
											</div>
											<!-- /Slider Item -->
											
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-02.jpg')}}" class="img-fluid" alt="Feature">
												<p>Test Room</p>
											</div>
											<!-- /Slider Item -->
											
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-03.jpg')}}" class="img-fluid" alt="Feature">
												<p>ICU</p>
											</div>
											<!-- /Slider Item -->
											
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-04.jpg')}}" class="img-fluid" alt="Feature">
												<p>Laboratory</p>
											</div>
											<!-- /Slider Item -->
											
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-05.jpg')}}" class="img-fluid" alt="Feature">
												<p>Operation</p>
											</div>
											<!-- /Slider Item -->
											
											<!-- Slider Item -->
											<div class="feature-item text-center">
												<img src="{{url('Frontend/assets/img/features/feature-06.jpg')}}" class="img-fluid" alt="Feature">
												<p>Medical</p>
											</div>
											
								   
									</div>
								</div>
							</div>
							<!-- /Account Content -->
							
						</div>
						
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
			<!-- Availabe Features -->
		   
					
		   
		</div>
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="{{ url('Frontend/assets/js/jquery.min.js') }}"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="{{  url('Frontend/assets/js/popper.min.js') }}"></script>
		<script src="{{  url('Frontend/assets/js/bootstrap.min.js') }}"></script>
		
		<!-- Slick JS -->
		<script src="{{url('Frontend/assets/js/slick.js')}}"></script>
		
		<!-- Custom JS -->
		<script src="{{ url('Frontend/assets/js/script.js') }}"></script>
		
	</body>

<!-- doccure/{{url('/forgot-password')}}  30 Nov 2019 04:12:20 GMT -->
</html>
	@endsection	
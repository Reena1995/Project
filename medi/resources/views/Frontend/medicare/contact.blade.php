@extends('Frontend.medicare.Layout.mainlayout')
@section('remaining_content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->	
<div class="col-md-3 col-sm-3 sign-in"></div>				
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Sign in</h4>
	<p class="">Hello, Welcome to your account.</p>
	<div class="social-sign-in outer-top-xs">
		<a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
		<a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
	</div>
	<form  action="{{url('/contact')}}" method="post" class="register-form outer-top-xs" role="form">
		@csrf
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="text" name="name"  value="{{old('name')}}" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		@error('name')
		<br>
		<div class="alert alert-danger" >{{ $message }}</div>
		@enderror
		<br>
		</div>
	  	
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Email <span>*</span></label>
		    <input type="email" name="email" value="{{old('email')}}" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		@error('email')
		<br>
		<div class="alert alert-danger" >{{ $message }}</div>
		@enderror
		<br>
		
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">mobile no<span>*</span></label>
		    <input type="text" name="mobileno" value="{{old('mobileno')}}" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		@error('mobileno')
		<br>
		<div class="alert alert-danger" >{{ $message }}</div>
		@enderror
		<br>
		
		</div>
	  	<div class="form-group">
		    <label class="info-title" for="exampleInputPassword1">comment<span>*</span></label>
		    <textarea class="form-control unicase-form-control text-input" value="{{old('comment')}}" name="comment" id="exampleInputPassword1" cols="5" rows="5" ></textarea>
		@error('comment')
		<br>
		<div class="alert alert-danger" >{{ $message }}</div>
		@enderror
		<br>
		
		</div>
		<button type="submit" value="Send"class="btn-upper btn btn-primary checkout-page-button">submit</button>
	</form>					
</div>
<!-- Sign-in -->
<div class="col-md-3 col-sm-3 sign-in"></div>

<!-- create a new account -->
<!-- create a new account -->			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
<div id="brands-carousel" class="logo-slider wow fadeInUp">

		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item m-t-15">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand1.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item m-t-10">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand2.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand3.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand4.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand5.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand6.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand2.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand4.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand1.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="{{url('Frontend/medicare/assets/images/brands/brand5.png')}}" src="{{url('Frontend/medicare/assets/images/blank.gif')}}" alt="">
					</a>	
				</div><!--/.item-->
		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
<!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
</div>
@endsection<!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->

       
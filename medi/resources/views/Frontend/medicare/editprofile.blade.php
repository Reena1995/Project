@extends('Frontend.medicare.Layout.mainlayout')
@section('remaining_content')
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Edit Profile</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Sign-in -->			

<!-- create a new account -->
<div class="col-md-3 col-sm-3 sign-in"></div>
<div class="col-md-6 col-sm-6 create-new-account">
	<h4 class="checkout-subtitle">Create a new account</h4>
	<p class="text title-tag-line">Create your new account.</p>
	<p>
	@if(Session('success'))
		<i class="alert alert-success">{{session('success')}}</i>
	@endif
	</p>
	<form action="{{url('/editcustomer/'.$fetch->id )}}" method="post" enctype="multipart/form-data" class="register-form outer-top-xs" role="form">
		@csrf
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
		    <input type="text" name="name" value="<?php echo $fetch->name?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
		<br>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">gender<span>*</span></label>
			<?php 
														$gender=$fetch->gender;
														if($gender=="Male")
														{
															?>
													  Male:<input type="radio" name="gender" value="Male" checked>
													  Female:<input type="radio"  name="gender" value="Female">
													  <?php
														}
													  else
													  {
														  ?>
														Male:<input type="radio" name="gender" value="Male" >
													  Female:<input type="radio"  name="gender" value="Female" checked>
													    
														<?php
													  }
?>													
			
		</div>
		<div class="form-group">
	    	<label class="info-title" for="exampleInputEmail2">Email <span>*</span></label>
	    	<input type="email" name="email" value="<?php echo $fetch->email?>"class="form-control unicase-form-control text-input" id="exampleInputEmail2" >
	  	</div>
        <div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Mobile No<span>*</span></label>
		    <input type="tel" name="mobile" value="<?php echo $fetch->mobile?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Profile Image<span>*</span></label>
		    <input type="file" name="img"  value="{{asset('upload/customer/'.$fetch->img)}}" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
			<img src="{{asset('upload/customer/'.$fetch->img)}}" height="70px" width="70px">		
		</div>
		<div class="form-group">
		    <label class="info-title" for="exampleInputEmail1">Username<span>*</span></label>
		    <input type="text" name="username" value="<?php echo $fetch->username?>" class="form-control unicase-form-control text-input" id="exampleInputEmail1" >
		</div>
        
       
	  	<button class="btn btn-primary submit-btn" name="update" value="send" type="submit">Update</button>
	</form>
	
	
</div>	
<div class="col-md-3 col-sm-3 sign-in"></div>

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

       
	   
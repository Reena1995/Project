@extends('Frontend.medicare.Layout.mainlayout')
@section('remaining_content')
<div class="breadcrumb">
  <div class="container">
    <div class="breadcrumb-inner">
      <ul class="list-inline list-unstyled">
        <li><a href="#">Home</a></li>
        <li class='active'>Handbags</li>
      </ul>
    </div>
    <!-- /.breadcrumb-inner --> 
  </div>
  <!-- /.container --> 
</div>
<!-- /.breadcrumb -->
<div class="body-content outer-top-xs">
  <div class='container'>
    <div class='row'>
	<div class="col-sm-3"></div>
	<div class="col-sm-6"><div><h3 style="text-align:center;">My Account</h3></div><div class="sidebar-widget  outer-top-vs ">
	
              <div id="advertisement" class="advertisement">
			  
                <div class="item">
				
                  <div class="avatar"><img src="{{asset('upload/customer/'.$fetch->img)}}" name="img" style="height:200px;width:200px;"alt=""></div>
                  <div class="testimonials" style="font-size:20px;">Name:<?php echo $fetch->name;?></div>
				  <b><hr></b>
				  
				  <div class="testimonials" style="font-size:20px;">Email:<?php echo $fetch->email;?></div>
				  <b><hr></b>
				  <br>
				  <div class="testimonials" style="font-size:20px;">Mobile No:<?php echo $fetch->mobile;?></div>
				  <b><hr></b>
				  <br>
				  <div class="testimonials" style="font-size:20px;">Username:<?php echo $fetch->username;?></div>
				  <b><hr></b>
				  <br>
				  <div style="text-align:center;">
				  <a href="{{url('editcustomer/'. $fetch->id)}}" class="btn btn-primary">Edit Profile</a>
				  </div>
				  
                  
                  <!-- /.container-fluid --> 
                </div>
                <!-- /.item -->
                  
                
                <!-- /.item -->
               
                <!-- /.item --> 
                
              </div>
              <!-- /.owl-carousel --> 
            </div>
			</div>
	<div class="col-sm-3"></div>
	</div>
	</div>
</div>
<br>
<br>

@endsection
<!-- /.body-content --> 
<!-- ============================================================= FOOTER ============================================================= -->

        
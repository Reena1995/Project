<?php
if(isset($_SESSION['u_id']))
{
	}
	else
	{
		echo "<script>			
		window.location='login';
		</script>";
	}
	include_once('header.php');
?>
		
		<!--about-part start-->
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Client Request</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="clientinquiry.php">clientinquiry</a></li>
								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--contact start-->
		<section  class="contact">
			<div class="container">
				<div class="contact-details">
					<div class="section-header contact-head  text-center">
						<h2></h2>
						<p>
							If you want be a client.Fill this form wait for our response.
						</p>
					</div><!--/.section-header-->
					<div class="contact-content">
						<div class="row">
							<div class="col-sm-offset-1 col-sm-2">
								<div class="single-contact-box">
									<div class="contact-right">
										<div class="contact-adress">
																					
										</div><!--/.contact-address-->
									</div><!--/.contact-right-->
									
									
									
								</div><!--/.single-contact-box-->
							</div><!--/.col-->
							<div class="col-sm-7">
								<div class="single-contact-box">
									<div class="contact-form">
										<h3>Fill up client Request form</h3>
										<form  method="post" enctype="multipart/form-data">
										<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="enter client name" type="name" name="client_name">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="enter your email" type="email" name="email">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="enter mobile number" type="number" name="mobile_no">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="enter shop name" type="name" name="shop_name">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<textarea class="form-control" rows="7" name="address" placeholder="enter your shop address" ></textarea>
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											
												<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													<div class="form-control">
													  <lable> Client Profile Image Upload</lable></div>
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="image upload" type="file" name="Profile_img" id="fileToUpload">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											
												
												
											
											<div class="row">
												<div class="col-sm-12">
													<div class="single-contact-btn center">
														  <input type="submit" name="submit" style="margin-left:500px;" value="Submit" class="btn btn-primary">
													</div><!--/.single-single-contact-btn-->
												</div><!--/.col-->
											</div><!--/.row-->
										</form><!--/form-->
									</div><!--/.contact-form-->
								</div><!--/.single-contact-box-->
							</div><!--/.col-->
						</div><!--/.row-->
					</div><!--/.contact-content-->
				</div><!--/.contact-details-->
			</div><!--/.container-->

		</section><!--/.contact-->
	
												
		
		
		
		<?php
	include_once('footer.php');
?>
<?php
if(isset($_SESSION['u_id']))
{
	}
	else
	{
		echo "<script>			
		window.location='index';
		</script>";
	}
	include_once('header.php');
?>
		
		<!--about-part start-->
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>Booking Request</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="Requesting.php">Booking Request</a></li>
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
							we are provide mobile service.If your mobile has not proper working,damage,dispaly.Pls Fill up this Booking Requesting and wait for quatation.
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
										<h3>Fill up Booking Request form</h3>
										<form action="Requesting.php" method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													
													  <select  name="Model"  id="firstname" class="form-control">
														<option value="" >select brand</option>
														<option value="vivo">vivo</option>
														<option value="vivo">iphone</option>
														<option value="vivo">oppo</option>
														<option value="vivo">samsung</option>
														<option value="vivo">mi</option>
														
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="Model"  id="firstname" class="form-control">
														<option value="" >select model</option>
														<option value="vivo">y73</option>
														<option value="vivo">y21</option>
														<option value="vivo">a55</option>
														<option value="vivo">s21</option>
														<option value="vivo">v21</option>
														
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="Model"  id="firstname" class="form-control">
														<option value="" >select issues</option>
														<option value="vivo">Water damage</option>
														<option value="vivo">Display</option>
														<option value="vivo">Battery</option>
														<option value="vivo">Chrging Plot</option>
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="Model"  id="firstname" class="form-control">
														<option value="" >select Location</option>
														<option value="vivo">Ahmedabad</option>
														<option value="vivo">Surat</option>
														<option value="vivo">Baroda</option>
														<option value="vivo">Mumbai</option>
														<option value="vivo">delhi</option>
														
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												
												</div>
												<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													<div class="form-control">
													  <lable>Mobile Frontside Image Upload</lable></div>
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="image upload" type="file" name="fileToUpload" id="fileToUpload">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
												<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													<div class="form-control">
													  <lable>Mobile backside Image Upload</lable></div>
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="image upload" type="file" name="fileToUpload" id="fileToUpload">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
												<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													<div class="form-control">
													  <lable>Mobile side Image Upload</lable></div>
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="image upload" type="file" name="fileToUpload" id="fileToUpload">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
											<div class="col-sm-12 col-xs-12">
													<div class="form-group">
														<textarea class="form-control" rows="5" id="comment" placeholder="Your phone Discription Hear" ></textarea>
													</div>
												</div>
												
											</div>	
											
											<div class="row">
												<div class="col-sm-12">
													<div class="single-contact-btn center">
														<button class="contact-btn" type="button">send message</button>
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
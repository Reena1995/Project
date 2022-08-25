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
										<form  method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													
													  <select  name="brand_id"  id="firstname" class="form-control">
														<option value="" >select brand</option>
<?php
							foreach($brand_arr as $b)
							{
								?>
								<option value="<?php echo $b->brand_id;?>">
								<?php echo $b->brand_name;?></option>
								<?php 
							}?>
							
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="model_id"  id="firstname" class="form-control">
														<option value="" >select model</option>
														<?php
							foreach($model_arr as $m)
							{
								?>
								<option value="<?php echo $m->model_id;?>">
								<?php echo $m->model_name;?></option>
								<?php 
							}?>
							
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="rep_id"  class="form-control">
														<option value="" >select issues</option>
														<?php
							foreach($rep_type_arr as $r)
							{
								?>
								<option value="<?php echo $r->rep_id;?>">
								<?php echo $r->rep_name;?></option>
								<?php 
							}?>
							
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  
													  <select  name="loc_id" class="form-control">
														<option value="" >select Location</option>
														<?php
							foreach($loc_arr as $l)
							{
								?>
								<option value="<?php echo $l->loc_id;?>">
								<?php echo $l->loc_name;?></option>
								<?php 
							}?>
							
													  </select>

													</div><!--/.form-group-->
												</div><!--/.col-->
												
												</div>
												<div class="row">
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													<div class="form-control">
													  <lable> Mobile Frontside Image Upload</lable></div>
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-6 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="image upload" type="file" name="img" id="fileToUpload">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
												<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input class="form-control" placeholder="enter mobile number" type="number" name="mob_no">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
																								
												<div class="row">
											<div class="col-sm-12 col-xs-12">
													<div class="form-group">
														<textarea class="form-control" rows="5" id="comment" name="description" placeholder="Your phone Discription Hear" ></textarea>
													</div>
												</div>
												
											</div>	
											
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
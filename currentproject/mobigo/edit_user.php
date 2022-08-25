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
					<h2>Update User</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="myaccount.php">myaccount</a></li>
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
						<h2>Update User</h2>
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
										<form  method="post" enctype="multipart/form-data">
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="name">name:</label><br>
													 <input type="text" class="form-control" name="name" value="<?php echo $fetch->name?>" placeholder="enter name">
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="uname">Uname:</label><br>
													  <input type="text" class="form-control" name="uname" value="<?php echo $fetch->uname?>" placeholder="enter user name">
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="gender">Gender:</label><br>
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
													</div><!--/.form-group-->
												</div>
												
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="email">EMAIL:</label><br>
													
														<input type="email" class="form-control" name="EMAIL"  value="<?php echo $fetch->EMAIL ?>" placeholder="enter email">
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="Mobileno">Mobile_no:</label><br>
													
													  <input type="tel" class="form-control"  value="<?php echo $fetch->mobile_no?>" name="mobile_no" placeholder="enter Mobile number">
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="IMAGE">image:</label><br>
													
													  <input type="file" class="form-control" name="Img" value="<?php echo $fetch->img?>">
													  <img src="../upload/users/<?php echo $fetch->Img?>" width="100px" height="100px"> 
													</div><!--/.form-group-->
												</div><!--/.col-->
												
												<!--/.col-->
												
											<div class="row">
											<div class="col-sm-12">
												<div class="btn pull-right">
													<input type="submit" name="update" class="btn btn-primary" data-type="submit" value="Update">
													</div></div>
													
													<!--/.col-->
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
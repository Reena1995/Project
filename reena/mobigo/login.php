<?php
if(isset($_SESSION['u_id']))
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
					<h2>LOGIN HERE</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="login.php">Login</a></li>
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
						<h2>Login</h2>
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
													<label for="uname">uname:</label>
													 <input type="text" class="form-control" name="uname" placeholder="enter  user name">
													</div><!--/.form-group-->
												</div><!--/.col-->
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													<label for="password">password:</label>
													
													  <input type="password" class="form-control" name="pwd" placeholder="enter password">
													</div><!--/.form-group-->
												</div><!--/.col-->
												
											<div class="row">
											<div class="col-sm-12">
												<div class="btn pull-right">
													<input type="submit" name="login" class="btn btn-primary" data-type="submit" value="login">
													</div></div>
													<div class="col-sm-12">
												<div class="form-group pull-left">
													<div class="btn pull-right">
													<input type="button" name="newreg" class="btn btn-primary" onclick="location.href='register'"  data-type="button" value="click for the new register">
													</div></div>
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
<?php

	include_once('header.php');
?>
		
		<!--about-part start-->
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>contact us</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="contact.php">reviews</a></li>
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
						<h2>Review</h2>
						<p>
							Pallamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
						</p>
					</div><!--/.section-header-->
					<div class="contact-content">
						<div class="row">
							<div class="col-sm-12">
								<div class="single-contact-box">
									<div class="contact-form">
										<h3>Leave us a reviews Here</h3>
										<form>
											<div class="row">
												<div class="col-sm-12 col-xs-12">
													<div class="form-group">
													  <input type="text" class="form-control" value="<?php echo $fetch->uname?>" placeholder="Last Name" name="uname">
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12">
													<div class="form-group">
														<textarea class="form-control" rows="7" name="description" placeholder="Message" ></textarea>
													</div><!--/.form-group-->
												</div><!--/.col-->
											</div><!--/.row-->
											<div class="row">
												<div class="col-sm-12">
													<div class="single-contact-btn pull-right">
														<button class="contact-btn" type="submit" name="submit">send message</button>
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
		
		<!-- new-project start -->
		<section  class="new-project">
				<div class="container">
					<div class="new-project-details">
						<div class="row">
							<div class="col-md-10 col-sm-8">
								<div class="single-new-project">
									<h3>
										Want to start a new project with us? Let’s Start!
									</h3>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
							<div class="col-md-2 col-sm-4">
								<div class="single-new-project">
									<a href="#" class="slide-btn">
										start now
									</a>
								</div><!-- /.single-new-project-->	
							</div><!-- /.col-->	
						</div><!-- /.row-->	
					</div><!-- /.new-project-details-->	
				</div><!-- /.container-->	

		</section><!-- /.new-project-->	
		<!-- new-project end -->
		
		<?php
	include_once('footer.php');
?>
<?php
	include_once('header.php');
?>
		
		<!--menu start-->
		<section id="menu">
			<div class="container">
				<div class="menubar">
					<nav class="navbar navbar-default">
					
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="index.php">
								<img src="assets/images/logo/logo.png" alt="logo">
							</a>
						</div><!--/.navbar-header -->

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li ><a href="index.php">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li ><a href="service.php">Service</a></li>
								<li ><a href="project.php">Project</a></li>
								<li class="active"><a href="team.php">Team</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li>
									<a href="#">
										<span class="lnr lnr-cart"></span>
									</a>
								</li>
								<li class="search">
									<form action="">
										<input type="text" name="search" placeholder="Search....">
										<a href="#">
											<span class="lnr lnr-magnifier"></span>
										</a>
									</form>
								</li>
							</ul><!-- / ul -->
						</div><!-- /.navbar-collapse -->
					</nav><!--/nav -->
				</div><!--/.menubar -->
			</div><!-- /.container -->

		</section><!--/#menu-->
		<!--menu end-->
		
		<!--about-part start-->
		<section class="about-part team-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>team</h2>
					<div class="about-part-content

					">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="team.php">team</a></li>
								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--team start -->
		<section id="team" class="team  team-main">
			<div class="container_12">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<!--<div class="project-header team-header team-head text-center">-->
						<h2 style="text-align:center">Search Location </h2>
						<br>
						<h3>
							<select name="loc_id" id="firstname" class="form-control">
							<option value="">Select Location</option>
							<?php
							foreach($loc_arr as $b)
							{
								?>
								<option value="<?php echo $b->loc_id;?>">
								<?php echo $b->loc_name;?></option>
								<?php
									}
								?>
						
							</select>
						</h3>
						<br>
					<!--/.project-header-->
				
					<button style="margin-left:650px;" class="btn btn-primary btn-lg " type="submit" name="search" value="search" id="serach">search</button>
			<br><br></div>
					<div class="col-lg-2"></div>
				</div>
					<br><br>
				<div class="container">
						<?php
					foreach($shop_arr as $s)
					{
					?>
								<div class="col-lg-4">
								<a href="storeandbooking?btn_shop_id=<?php echo $s->shop_id;?>">
								
									
									<img src="../upload/shop/<?php echo $s->img;?>" style="height:300px;width:400px" >

								</a>
								</div><!--/.single-team-box-->
									<!--.col-->
					<?php 
					}
					?>
					<!--team end-->
					</div>
</div>
</div>
		</section><!--/.team-->
		
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
						
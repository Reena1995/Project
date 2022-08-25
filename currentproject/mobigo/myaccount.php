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
								<li ><a href="team.php">Team</a></li>
								<li class="active"><a href="blog.php">Blog</a></li>
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
		<section class="about-part">
			<div class="container">
				<div class="about-part-details text-center"> 
					<h2>My Account</h2>
					<div class="about-part-content">
						<div class="breadcrumbs">
							<div class="container">
								<ol class="breadcrumb">
								  <li><a href="index.php">home</a><span>//</span></li>
								  <li><a href="myaccount.php">My Account</a></li>
								</ol><!--/.breadcrumb-->
							</div><!--/.container-->
						</div><!--/.breadcrumbs-->
					</div><!--/.about-part-content-->
				</div><!--/.about-part-details-->	
			</div><!--/.container-->

		</section><!--/.about-part-->
		<!--about-part end-->

		<!--nwes start -->
		<section  class="news">
			<div class="container">
				<div class="news-details">
					<div class="section-header text-center">
						<h2>My Profile</h2>
						<p></p>
						<p></p>
					</div><!--/.section-header-->
					<div class="news-card">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8">
								<div class="blog-center" align="center">

									
									
									<div class="bl-article-post-img">
											<img src="../upload/users/<?php echo $fetch->Img;?>" style="width:30%; border-radius:50%" align="center" alt="">
						
									</div><!--/.bl-article-post-img-->
									

									<div class="bl-article-single-txt">

										
										<div class="bl-single-para">
											<h3 align=center><b>User Name:</b><?php echo $fetch->uname;?></h3><b><hr></b>
											<h3 align=center><b>Name:</b><?php echo $fetch->name;?></h3><b><hr></b>
											<h3 align=center><b>Email:</b><?php echo $fetch->EMAIL;?></h3><b><hr></b>
											<h3 align=center><b>Gender:</b><?php echo $fetch->gender;?></h3><b><hr></b>
											<h3 align=center><b>Mobile No:</b><?php echo $fetch->mobile_no;?></h3><b><hr></b><br>
											
												<a href="edit_user?btn_u_id=<?php echo $fetch->u_id;?>" class="btn btn-primary">Edit user</a>
										</div><!--/.bl-single-para-->


										
																

										
									</div><!--/.bl-article-single-txt-->
								</div><!--/.blog-left-->

							</div><!--/.col-->

							<div class="col-md-2"></div>

						</div><!--/.row-->
					</div><!--/.news-card-->
				</div><!--/news-details-->
			</div><!--/.container-->

		</section><!--/news-->
		<!--news end-->
		
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
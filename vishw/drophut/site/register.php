<?php
if(isset($_SESSION['customer_id']))
{
	echo "<script>			
		window.location='index';
		</script>";
}
    include_once('header.php');
?>

    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="index">home</a></li>
                            <li>Register</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->

	<section class="account">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Register now</h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form method="post" enctype="multipart/form-data" role="form">
                                    <div class="single-acc-field">
                                            <label>Profile_img</label>
                                            <input type="file" name="Profile_img" class="form-control">
                                        </div>
                                    <div class="single-acc-field">
                                            <label>Name</label>
                                            <input type="text" name="Name"  placeholder="Enter Your Name">
                                        </div>
                                        <div class="single-acc-field">
                                            <label>Mobile_no</label>
                                            <input type="tel" name="Mobile_no"  placeholder="Enter Your Mobile_no">
                                        </div>
                                        <div class="single-acc-field">
                                            <label>Email</label>
                                            <input type="email" name="Email" placeholder="Enter your Email">
                                        </div>
                                        <div class="form-group">
                                        <label>Gender</label><br>
                                         Male <input type="radio" name="Gender" value="male">
                                         Female<input type="radio" name="Gender" value="female" >
                                         Other<input type="radio" name="Gender" value="other" >
                                        </div>
                                        <br>
                                        <div class="single-acc-field">
                                            <label>Address</label>
                                            <input type="text" name="Address" placeholder="Enter your Address">
                                        </div>
                                        <div class="single-acc-field">
                                            <label>User_name</label>
                                            <input type="text" name="User_name"  placeholder="Enter Your Username">
                                        </div>
                                        <div class="single-acc-field">
                                            <label>Password</label>
                                            <input type="text" name="Password"  placeholder="At least 6 Charecter">
                                        </div>
                                        <div class="single-acc-field">
                                            <button name="submit" type="submit" value="submit">Register now</button>
                                        </div>
                                        <a href="login">Already account? Login</a>
                                    </form>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php
    include_once('footer.php');
?>
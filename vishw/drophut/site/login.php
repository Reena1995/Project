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
                            <li>Login</li>
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
                                    <h2>Login now</h2>
                                     </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="single-acc-field">
                                            <label >User_name</label>
                                            <input type="text" name="User_name" placeholder="Enter your User_name">
                                        </div>
                                        <div class="single-acc-field">
                                            <label">Password</label>
                                            <input type="text" name="Password" placeholder="Enter your password">
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit" name="login">Login Account</button>
                                        </div>
                                        <a href="forget-password">Forget Password?</a>
                                        <a href="register">Not Account Yet?</a>
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

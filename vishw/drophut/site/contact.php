<?php
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
                            <li>Contact</li>
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
				<div class="col-lg-12">
					<div class="account-contents" style="background: url('assets/img/about/about2.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12">
                                <div class="account-thumb">
                                    <h2>Contact us</h2>
                                    </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12">
                                <div class="account-content">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label>name</label>
                                                    <input type="text" name="name" placeholder="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="single-acc-field">
                                                    <label>email</label>
                                                    <input type="email" name="email" placeholder="email" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="single-acc-field">
                                                    <label>message</label>
                                                    <textarea  type="text" name="message"  rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-acc-field">
                                            <button type="submit" name="submit" value="submit">Send Message</button>
                                        </div>
                                        <a href="client_request">Want to become a Client? Click hear to join us</a>
                                        <br>
                                        <a href="shop-details">Want to buy drones offline?you can also visit our shop</a>
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
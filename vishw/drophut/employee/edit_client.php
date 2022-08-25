<?php
    include_once('header.php');
?>
<style>
    p,h2{
        color: white;
    }
</style>
	<section class="account">
		<div class="container" style="margin-left:700px">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="account-contents" style="background: url('assets/img/about/about1.jpg'); background-size: cover;">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="account-content">
                                <div class="account-thumb">
                                    <h2>Edit Profile</h2>
                                </div>
                                    <form method="post" enctype="multipart/form-data" role="form">
                                        <div class="single-acc-field">
                                            <p>Username</p>
                                            <input type="text" name="User_name" value="<?php echo $fetch->User_name?>" placeholder="Enter Your Username">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>password</p>
                                            <input type="text" name="password" value="<?php echo $fetch->password?>" placeholder="Enter Your password">
                                        </div>
                                        
                
                                        <div class="btns">
									        <input type="submit" name="update"  data-type="submit" class="btn btn-primary" value="update">
								        </div>
                                        
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
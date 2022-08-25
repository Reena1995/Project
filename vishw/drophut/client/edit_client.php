<?php
if(isset($_SESSION['Client_id']))
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
                                            <p>Profile_img</p>
                                            <input type="file" name="Profile_img" value="<?php echo $fetch->Profile_img?>" class="form-control">
                                            <img src="../admin/upload/client/<?php echo $fetch->Profile_img?>" height="100px" width="100px">
                                        </div>
                                        <br>
                                        <div class="single-acc-field">
                                            <p>Name</p>
                                            <input type="text" name="Name" value="<?php echo $fetch->Name?>" placeholder="Enter Your Name">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>Mobile_no</p>
                                            <input type="tel" name="Mobile_no" value="<?php echo $fetch->Mobile_no?>" placeholder="Enter Your Mobile_no">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>Email</p>
                                            <input type="email" name="Email" value="<?php echo $fetch->Email?>" placeholder="Enter Your Email">
                                        </div>
                                        <p>Gender</p>
                                        <?php
                                        $Gender=$fetch->Gender;
                                        if($Gender=="male")
                                        {
                                        ?>
                                        <p>Male:<input type="radio" name="Gender" value="male" checked>
                                        Female:<input type="radio" name="Gender" value="female"></p>
                                        <?php
                                        }
                                        else
                                        {
                                        ?>
                                        <p>Male:<input type="radio" name="Gender" value="male" >
                                        Female:<input type="radio" name="Gender" value="female" checked></p>
                                        <?php
                                        }
                                        ?>
                                        </div>
                                        <br>
                                        <div class="single-acc-field">
                                            <p>User_name</p>
                                            <input type="text" name="User_name" value="<?php echo $fetch->User_name?>" placeholder="Enter your User_name">
                                        </div>
                                        <div class="form-group">                                    
                                        <br>
                                        <div class="single-acc-field">
                                            <p>shop_name</p>
                                            <input type="text" name="shop_name" value="<?php echo $fetch->shop_name?>" placeholder="Enter your shop_name">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>shop_img</p>
                                            <input type="file" name="shop_img" value="<?php echo $fetch->shop_img?>" class="form-control">
                                            <img src="../admin/upload/client/<?php echo $fetch->shop_img?>" height="100px" width="100px">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>shop_address</p>
                                            <input type="text" name="shop_address" value="<?php echo $fetch->shop_address?>" placeholder="Enter your shop_address">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>city</p>
                                            <input type="text" name="city" value="<?php echo $fetch->city?>" placeholder="Enter your city">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>pincode</p>
                                            <input type="number" name="pincode" value="<?php echo $fetch->pincode?>" placeholder="Enter your pincode">
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
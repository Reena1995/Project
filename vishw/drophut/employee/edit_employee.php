<?php
if(isset($_SESSION['Employee_id']))
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
                                            <img src="upload/employee/<?php echo $fetch->Profile_img?>" height="100px" width="100px">
                                        </div>
                                        <br>
                                        <div class="single-acc-field">
                                            <p>Username</p>
                                            <input type="text" name="Username" value="<?php echo $fetch->Username?>" placeholder="Enter Your Username">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>First_name</p>
                                            <input type="text" name="First_name" value="<?php echo $fetch->First_name?>" placeholder="Enter Your First_name">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>Last_name</p>
                                            <input type="text" name="Last_name" value="<?php echo $fetch->Last_name?>" placeholder="Enter Your Last_name">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>Birth_of_date</p>
                                            <input type="text" name="Birth_of_date" value="<?php echo $fetch->Birth_of_date?>" placeholder="Enter Your Birth_of_date">
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
                                            <p>Email</p>
                                            <input type="email" name="Email" value="<?php echo $fetch->Email?>" placeholder="Enter your Email">
                                        </div>
                                        <div class="single-acc-field">
                                            <p>Mobile_no</p>
                                            <input type="tel" name="Mobile_no" value="<?php echo $fetch->Mobile_no?>" placeholder="Enter Your Mobile_no">
                                        </div>
                                        <div class="form-group">                                    
                                        <br>
                                        <div class="single-acc-field">
                                            <p>Address</p>
                                            <input type="text" name="Address" value="<?php echo $fetch->Address?>" placeholder="Enter your Address">
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
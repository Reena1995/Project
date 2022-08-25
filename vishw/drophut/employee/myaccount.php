<?php
    include_once('header.php');
?> 
<style>
    p{
        color: white;
    }
</style>  
    <!--Other product-->
    <section class="pt-60 pb-30">
        <div class="container" style="margin-left:700px">
            <div class="row">
                <div class="col text-center">
                    <div class="section-title">
                        
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-tranding mb-30">
                        <a href="product1">
                            <div class="tranding-pro-img">
                            <img src="../admin/upload/employee/<?php echo $fetch->Profile_img;?>" style="width:70%; border-radius:50%; height=500px"  align="center" alt="">
                            </div>
                            <div class="tranding-pro-title">
                            <a href="#"><b>Username:</b> <?php echo $fetch->Username;?></a>
                            </div>
                                <p><b>First_name:</b>  <?php echo $fetch->First_name;?></p>
								<p><b>Last_name:</b>  <?php echo $fetch->Last_name;?></p>
                                <p><b>Birth_of_date:</b>  <?php echo $fetch->Birth_of_date;?></p>
                                <p><b>Gender:</b>  <?php echo $fetch->Gender;?></p>
                                <p><b>Email:</b>  <?php echo $fetch->Email;?></p>
                                <p><b>Mobile_no:</b>  <?php echo $fetch->Mobile_no;?></p>
                                <p><b>Address:</b>  <?php echo $fetch->Address;?></p>
								<br>
                                <a href="edit_employee?btn_Employee_id=<?php echo $fetch->Employee_id;?>" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
</section>
    
    
    <?php
    include_once('footer.php');
?>
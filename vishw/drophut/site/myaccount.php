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
                            <li><a href="index">Home</a></li>
                            <li>MY Account</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
     
   
    <!--Other product-->
    <section class="pt-60 pb-30">
        <div class="container">
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
                            <img src="upload/customer/<?php echo $fetch->Profile_img;?>" style="width:70%; border-radius:50%; height=500px"  align="center" alt="">
                            </div>
                            <div class="tranding-pro-title">
                            <a href="#"><b>Username:</b> <?php echo $fetch->User_name;?></a>
                            </div>
                                <p><b>Mobile no:</b>  <?php echo $fetch->Mobile_no;?></p>
								<p><b>Email:</b>  <?php echo $fetch->Email;?></p>
                                <p><b>Gender:</b>  <?php echo $fetch->Gender;?></p>
                                <p><b>Address:</b>  <?php echo $fetch->Address;?></p>
								<br>
                                <a href="edit_user?btn_customer_id=<?php echo $fetch->customer_id;?>" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
</div>
</section>
    
    
    <?php
    include_once('footer.php');
?>
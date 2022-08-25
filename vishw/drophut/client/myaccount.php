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
                            <img src="../admin/upload/client<?php echo $fetch->Profile_img;?>" style="width:70%; border-radius:50%; height=500px"  align="center" alt="">
                            </div>
                            <div class="tranding-pro-title">
                            <a href="#"><b>Name:</b> <?php echo $fetch->Name;?></a>
                            </div>
                                <p><b>Mobile_no:</b>  <?php echo $fetch->Mobile_no;?></p>
								<p><b>Email:</b>  <?php echo $fetch->Email;?></p>
                                <p><b>Gender:</b>  <?php echo $fetch->Gender;?></p>
                                <p><b>User_name:</b>  <?php echo $fetch->User_name;?></p>
                                <p><b>shop_name:</b>  <?php echo $fetch->shop_name;?></p>
                                <p><b>shop_img:</b>  <?php echo $fetch->shop_img;?></p>
                                <p><b>shop_address:</b>  <?php echo $fetch->shop_address;?></p>
                                <p><b>city:</b>  <?php echo $fetch->city;?></p>
                                <p><b>pincode:</b>  <?php echo $fetch->pincode;?></p>
								<br>
                                <a href="edit_client?btn_Client_id=<?php echo $fetch->Client_id;?>" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
</section>
    
    
    <?php
    include_once('footer.php');
?>
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
                            <li>Product details</li>
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
                <?php
                    foreach($adv_arr as $d)
                    {
                ?>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-tranding mb-30">
                        <a href="product?btn_droneadv_id=<?php echo $d->droneadv_id;?>">
                            <div class="tranding-pro-img">
                                <img src="../client/upload/drone/<?php echo $d->drone_pic?>" style="height:250px" alt="">
                            </div>
                            <div class="tranding-pro-title">
                                <h3><?php echo $d->drone_model?></h3>
                               </div>
                            <div class="tranding-pro-price">
                                <div class="price_box">
                                    <span class="current_price"><b>Price:-</b> &#x20B9;<?php echo $d->drone_price?></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>
                  </section>
    <!--Other product-->
    
    
    <?php
    include_once('footer.php');
?>
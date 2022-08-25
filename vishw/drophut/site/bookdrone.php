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
                            <li>Find Drone</li>
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
                                    <h2>Find Your Drone</h2>
                                     </div>
                            </div>

                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                
                                <div class="account-content">
                                    <form method="post" enctype="multipart/form-data">
                                    <div class="single-acc-field">
                                            <label >Drone type</label>
                                            <select name="drone_type_id" class="form-control">
							        <option> select drone type </option>
							        <?php foreach($drone_type_id_arr as $car)
                                    {
								    ?>
								    <option value="<?php echo $car->drone_type_id;?>">
								    <?php echo $car->drone_type;?></option>
								    <?php 
							        }
                                    ?>
							        </select></div>
                                    
                                    <div class="single-acc-field">
                                            <label >Select location*</label>
                                            <select name="Location_id" class="form-control">
							                <option> select location </option>
                                    <?php foreach($loca_id_arr as $loca)
                                    {
                                    ?>
                                        <option value="<?php echo $loca->Location_id;?>">
                                        <?php echo $loca->City;?></option>
                                    <?php 
                                    }
                                    ?>
							</select> </div>
					
                            

                                        <div class="single-acc-field">
                                            <button type="submit" name="login">Search</button>
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

	<?php

		include_once('header.php');
	?>
		  <div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
			  <h1>
			   Edit shop
			   
			  </h1>
			  <ol class="breadcrumb">
				<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
				<li><a href="#">shop</a></li>
				<li class="active">Edit shop</li>
			  </ol>
			</section>

			<!-- Main content -->
			<section class="content">
			  <div class="row">
				
				<div class="col-md-12">
				  <!-- general form elements disabled -->
				  <div class="box box-warning">
					<div class="box-header">
					  <h3 class="box-title">Personal Information</h3>
					</div><!-- /.box-header -->
					<div class="box-body">
								<form method="post" enctype="multipart/form-data" role="form">                               
								   <div class="control-group "> 
										<div class="wthree_input">
										<p><b>Shop Name</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->shop_name?>" name="shop_name" placeholder="Username"  /> 
									</div>
									</div><br>
									
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>Shop_img</b></p>
										<input type="file" id="img" name="img" style="margin-left:135px;" value="<?php echo $fetch->img?>" accept="image/*"><br>
										<img src="../upload/shop/<?php echo $fetch->img?>" width="100px" height="100px">
										</div>
									</div><br>
									
									
									
									 <div class="control-group "> 
										<div class="wthree_input">
										<p><b>Address</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->address?>" name="address" placeholder="Password"  /> 
									</div>
									</div><br>
									
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>Location</b></p>
										<select name="loc_id" class="form-control">
					   <?php
							foreach($loc_arr as $l)
							{
								if($fetch->loc_id==$l->loc_id)
								{
							?>
									<option value="<?php echo $l->loc_id;?>" selected> <?php echo $l->loc_name;?> </option>
							<?php 
								}
								else
								{
								?>	
									<option value="<?php echo $l->loc_id;?>"> <?php echo $l->loc_name;?> </option>
								<?php
								}
							}
								?>
							</select>
										
									</div>
									</div><br>
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>About Shop</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->about_shop?>" name="shop_name" placeholder="Username"  /> 
									</div>
									</div><br>
									
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>Owner Name</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->Ownername?>" name="shop_name" placeholder="Username"  /> 
									</div>
									</div><br>
									
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>Email</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->email?>" name="shop_name" placeholder="Username"  /> 
									</div>
									</div><br>
									
									<div class="control-group "> 
										<div class="wthree_input">
										<p><b>Mobile_no</b></p>
										<input type="text" class="form-control" value="<?php echo $fetch->mobile_no?>" name="shop_name" placeholder="Username"  /> 
									</div>
									</div><br>
									
		
								
									<br>
									
									

								
									<div>
										<button class="btn btn-primary" name="update" value="Save" type="submit">Update</button>
									</div>
									
								</form>						
								 </div><!-- /.box-body -->
				  </div><!-- /.box -->
				</div><!--/.col (right) -->
			  </div>   <!-- /.row -->
			</section><!-- /.content -->
		  </div><!-- /.content-wrapper -->
	<?php
		include_once('footer.php');
	?>
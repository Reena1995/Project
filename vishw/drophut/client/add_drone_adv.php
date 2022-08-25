<?php
include_once('header.php');
?>

 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Drone Advertisement
           
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Drone Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form   method="post" enctype="multipart/form-data" role="form">  
                     <div class="form-group form-inline">
                      <label>drone_type</label>
					  <select name="drone_type_id" class="form-control">
							<option> select drone type </option>
							<?php foreach($drone_type_id_arr as $car)
							{
								?>
								<option value="<?php echo $car->drone_type_id;?>">
								<?php echo $car->drone_type;?></option>
								<?php 
							}?>
							</select>
                    </div>
					
                    <div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">drone_pic	</label>
                       <input type="file" id="drone_pic" name="drone_pic" style="margin-left:150px;" accept="image/*"><br>
					   
                    </div> 
                    
					
				  <div class="form-group form-inline">
                             <label>drone_model*</label>
                             <input type="text" name="drone_model" class="form-control" style="margin-left:83px;" placeholder="drone_model"  >
            </div>
					
					<div class="form-group form-inline">
                             <label>drone_price</label>
                             <input type="text" name="drone_price" class="form-control" style="margin-left:105px;" placeholder="drone_price"  >
                        </div>
					
					<div class="form-group form-inline">
                             <label>drone_shop*</label>
                             <input type="text" name="drone_shop" class="form-control" style="margin-left:25px;" placeholder="drone_shop"  >
                        </div>
					<div class="form-group form-inline ">
					  <label style="margin-top:30px;">description</label>
					  <textarea name="description" name="description" class="form-control" style="margin-left:77px;" placeholder="Enter description"  cols="85" rows="5"></textarea>
					</div>
					
					<div class="form-group form-inline">
                      <label>Add location* </label>
                      <select name="Location_id" class="form-control">
							<option> select location </option>
							<?php foreach($loca_id_arr as $loca)
							{
								?>
								<option value="<?php echo $loca->Location_id;?>">
								<?php echo $loca->Loca_name;?></option>
								<?php 
							}?>
							</select></div>

  
                    
					<div class="form-group">
                      <input type="submit" name="submit" style="margin-left:500px;" value="Submit" class="btn btn-primary">
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
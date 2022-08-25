<?php
include_once('header.php');
?>

 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Shop Advertisement
           
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Shop Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form   method="post" enctype="multipart/form-data" role="form">  
    			
                    <div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">shop_img	</label>
                       <input type="file" id="shop_img" name="shop_img" style="margin-left:150px;" accept="image/*"><br>  
                    </div> 
                    
					
				  <div class="form-group form-inline">
                             <label>shop_name*</label>
                             <input type="text" name="shop_name" class="form-control" style="margin-left:83px;" placeholder="shop_name"  >
                  </div>
					
					<div class="form-group form-inline">
                             <label>shop_address</label>
                             <input type="text" name="shop_address" class="form-control" style="margin-left:105px;" placeholder="shop_address"  >
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
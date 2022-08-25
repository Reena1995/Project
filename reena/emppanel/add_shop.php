<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add shop
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Shop</a></li>
            <li class="active">Add Shop</li>
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
                    
					
                    <div class="form-group form-inline">
                      <label >Shop Name</label>
                       <input type="text" name="shop_name" class="form-control " style="margin-left:50px;" placeholder="shop name" >					  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Address</label>
                       <textarea name="address" class="form-control " style="margin-left:70px;" placeholder="Address" >	</textarea>				  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Description</label>
                       <textarea name="Description" class="form-control " style="margin-left:50px;" placeholder="about shop" >	</textarea>				  
                    </div>
					
				
					<div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">Shop_img</label>
                       <input type="file" id="img" name="img" style="margin-left:135px;" accept="image/*"><br>
					   
                    </div> 
					
					<div class="form-group form-inline">
                      <label >Owner Name</label>
                       <input type="text" name="Ownername" class="form-control " style="margin-left:50px;" placeholder="shop name" >					  
                    </div>
					
                
             
				<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Email</label>
					  <input type="email" class="form-control" id="Email_id" style="margin-left:98px;" placeholder="Enter Email" name="Email" >
					</div>
			 
                   	<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Mobile_no</label>
					  <input type="text" class="form-control" style="margin-left:70px;" placeholder="Enter Mobile No" name="Mobile_no" >
					</div>
					
					

                 
                  
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

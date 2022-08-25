<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add client
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> client</a></li>
            <li class="active">Add client</li>
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
                    <div class="form-group">
                      <label >First Name</label>
                       <input type="text" name="first_name" class="form-control " placeholder="Enter User Name" >					  
                    </div>
					<div class="form-group">
                      <label >last Name</label>
                       <input type="text" name="last_name" class="form-control " placeholder="Enter User Name" >					  
                    </div>
					
					
                    <div class="form-group">
                      <label >Client_name</label>
                       <input type="text" name="client_name" class="form-control " placeholder="Enter Client Name" >					  
                    </div>
					<div class="form-group">
                      <label >Email</label>
                       <input type="email" name="email" class="form-control "  placeholder="Enter Email" >					  
                    </div>
					
					<div class="form-group">
                      <label >mobile_no</label>
                       <input type="number" name="mobile_no" class="form-control "  placeholder="Enter Mobile Number" >					  
                    </div>
				<div class="form-group">
                      <label >About Shop</label>
                       <textarea cols="5" rows="5" name="about_shop" class="form-control "  placeholder="Enter about your shop" ></textarea>					  
                    </div>
		
					<div class="form-group ">
					   <label for="img" style="margin-top:10px;">Profile_img</label>
                       <input type="file" id="Profile_img" name="Profile_img" style="margin-left:135px;" accept="image/*"><br>
					   
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

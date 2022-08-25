<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 align="center">
           My Profile
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="dashbord"><i class="fa fa-dashboard"></i> Home</a></li>
           
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title"><b></b></h3>
                </div><!-- /.box-header -->
                <div class="box-body" align="center">
                  <form method="post" enctype="multipart/form-data" role="form">
                   
					
					<div class="form-group form-inline">
                      <img src="../upload/employee/<?php echo $fetch->Profile_img;?>" style="width:30%; border-radius:50%" align="center" alt="">	  
                    </div>
	
					
					<div class="form-group form-inline">
                      		<h3><b>First Name : </b><?php echo $fetch->First_name;?></h3><b><hr></b>	  
                    </div>
					
					<div class="form-group form-inline">
                      		<h3><b>Last Name : </b><?php echo $fetch->Last_name;?></h3><b><hr></b>	  
                    </div>
					
					<div class="form-group form-inline">
                      		<h3><b>User Name : </b><?php echo $fetch->Username;?></h3><b><hr></b>	  
                    </div>
					
					<div class="form-group form-inline">
                      		<h3><b>Email Id : </b><?php echo $fetch->Email;?></h3><b><hr></b>	  
                    </div>
					
					<div class="form-group form-inline">
                      		<h3><b>Mobile no : </b><?php echo $fetch->Mobile_no;?></h3><b><hr></b>	  
                    </div>
					
					
					
					<div class="form-group">
                      <a href="editprofile?btn_Employee_id=<?php echo $fetch->Employee_id;?>" name="update" class="btn btn-primary" style="margin-left:900px">Edit Profile</a>

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

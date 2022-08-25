<?php
if(isset($_SESSION['employee']))
{
	}
	else
	{
		echo "<script>			
		window.location='index';
		</script>";
	}
	include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           update Brand
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Employee</a></li>
            <li class="active">Add Employee</li>
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
                      <label >FirstName</label>
                       <input type="text" name="First_name" class="form-control " style="margin-left:65px;" value="<?php echo $fetch->First_name?>" placeholder="First_name" >					  
                    </div>
					<div class="form-group form-inline">
                      <label >LastName</label>
                       <input type="text" name="Last_name" class="form-control " style="margin-left:65px;" value="<?php echo $fetch->Last_name?>" placeholder="Last_name" >					  
                    </div>
					
					<div class="form-group form-inline">
                      <label >Username</label>
                       <input type="text" name="Username" class="form-control " style="margin-left:73px;"  value="<?php echo $fetch->Username?>" placeholder="Username" >					  
                    </div>
					
					
					<div class="form-group form-inline ">
					   <label for="img" style="margin-top:10px;">Profile_img</label>
                       <input type="file" id="Profile_img" name="Profile_img" style="margin-left:135px;" value="<?php echo $fetch->uname?>" accept="image/*"><br>
					     <img src="../upload/employee/<?php echo $fetch->Profile_img?>" width="100px" height="100px"> 
                    </div> 
					
					
					
                  
				    <div class="form-group form-inline">
					    <label style="margin-top:30px;">Gender</label>
						<?php 
								$Gender=$fetch->Gender;
								if($Gender=="Male")
								{
								?>
								Male:<input type="radio" name="gender" value="Male" checked>
								Female:<input type="radio"  name="gender" value="Female">
								<?php
								}
								else
								{
								?>
								Male:<input type="radio" name="gender" value="Male" >
								Female:<input type="radio"  name="gender" value="Female" checked>
													    
								<?php
								}
						?>													  
						
						
					</div>
             
				<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Email</label>
					  <input type="email" class="form-control" id="Email" style="margin-left:98px;" placeholder="Enter Email" value="<?php echo $fetch->Email?>" name="Email" >
					</div>
			 
                   	<div class="form-group form-inline ">
					  <label style="margin-top:30px;">Mobile_no</label>
					  <input type="text" class="form-control" style="margin-left:70px;" placeholder="Enter Mobile No" value="<?php echo $fetch->Mobile_no?>" name="Mobile_no" >
					</div>
					
					

                   
                  
					<div class="form-group">
                      <input type="submit" name="update" style="margin-left:500px;" data-type="submit" 	value="Update" class="btn btn-primary">
					  
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

<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Employee
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add Employee</a></li>
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
                  <h3 class="box-title">General Elements</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" enctype="multipart/form-data" role="form">
                    <!-- text input -->
           <div class="form-group">
                      <label>Profile_img</label>
                      <input type="file" name="Profile_img" class="form-control" />
                    </div>
           <div class="form-group">
                      <label>Username</label>
                      <input type="text" name="Username" class="form-control" placeholder="Enter Username"/>
                    </div>
					<div class="form-group">
                      <label>Password</label>
                      <input type="text" name="Password" class="form-control" placeholder="Enter Password"/>
                    </div>
					<div class="form-group">
                      <label>First_name</label>
                      <input type="text" name="First_name" class="form-control" placeholder="Enter First name"/>
                    </div>
					<div class="form-group">
                      <label>Last_name</label>
                      <input type="text" name="Last_name" class="form-control" placeholder="Enter Last name"/>
                    </div>
					<div class="form-group">
                      <label>Birth_of_date</label>
                      <input type="date" name="Birth_of_date" class="form-control" placeholder="Enter Birth date"/>
                    </div>
          <div class="form-group">
                      <label>Gender</label><br>
                     Male <input type="radio" name="Gender" value="male">
                      Female<input type="radio" name="Gender" value="female" >
                      Other<input type="radio" name="Gender" value="other" >
                    </div>
          <div class="form-group">
                      <label>Email</label>
                      <input type="Email" name="Email" class="form-control" placeholder="Enter Email"/>
                    </div>
          <div class="form-group">
                      <label>Mobile_no</label>
                      <input type="tel" name="Mobile_no" class="form-control" placeholder="Enter Mobile no."/>
                    </div>
          <div class="form-group">
                      <label>Job_title</label>
                      <input type="text" name="Job_title" class="form-control" placeholder="Enter job title"/>
                    </div>
          <div class="form-group">
                      <label>Salary</label>
                      <input type="text" name="Salary" class="form-control" placeholder="Enter Salary"/>
                    </div>
          <div class="form-group">
                      <label>Address</label>
                      <input type="text" name="Address" class="form-control" placeholder="Enter Address"/>
                    </div>
                    

                 
					<div class="form-group">
                      <input type="submit" name="submit" value="Submit" class="btn btn-primary">
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

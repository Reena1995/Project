<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Employee
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Employee</a></li>
            <li class="active">Manage Employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Employee_id</th>
                        <th>Image</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Username</th>
						<th>Password</th>
						<th>Gender</th>
						<th>Email</th>
						<th>Mobile_no</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($emp_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->Employee_id?></td>
							<td><img src="../upload/employee/<?php echo $data->Profile_img?>" width="50px" height="50px"></td>
							<td><?php echo $data->First_name?></td>
							<td><?php echo $data->Last_name?></td>
							<td><?php echo $data->Username?></td>
							<td><?php echo $data->Password?></td>
							<td><?php echo $data->Gender?></td>
							<td><?php echo $data->Email?></td>
							<td><?php echo $data->Mobile_no?></td>
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
						<td><a href="delete?del_Employee_id=<?php echo $data->Employee_id?>" class="btn btn-danger">Delete</a></td>
						<td><a href="" class="btn btn-primary">Edit</a></td>
                            </tr>	
                       <?php							
					  }
					  ?>

              
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    <?php
	include_once('footer.php');
	?>
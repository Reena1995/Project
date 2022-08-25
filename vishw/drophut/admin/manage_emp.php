<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Add employee
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Add employee</a></li>
            <li class="active">Add employee</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add employee</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Employee_id</th>
                        <th>Profile_img </th>
						            <th>Username</th>
                        <th>Password</th>
                        <th>First_name</th>
						            <th>Last_name</th>
						            <th>Birth_of_date</th>
						            <th>Gender</th>
						            <th>Email</th>
					            	<th>Mobile_no</th>
                        <th>Job_title</th>
					            	<th>Salary</th>
                        <th>Address</th>
                        <th>Created/Updated</th>
					            	<th>Delete</th>
						            <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
          <?php
					foreach($employee_arr as $data)
					{
					?>  
					  <tr>
            <td><?php echo $data->Employee_id?></td>
            <td><img src="upload/employee/<?php echo $data->Profile_img?>" width="50px" height="50px"></td>
						<td><?php echo $data->Username?></td>
						<td><?php echo $data->Password?></td>
						<td><?php echo $data->First_name?></td>
						<td><?php echo $data->Last_name?></td>
						<td><?php echo $data->Birth_of_date?></td>
						<td><?php echo $data->Gender?></td>
						<td><?php echo $data->Email?></td>
						<td><?php echo $data->Mobile_no?></td>
            <td><?php echo $data->Job_title?></td>
						<td><?php echo $data->Salary?></td>
						<td><?php echo $data->Address?></td>
            <td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
						<td><a href="delete?del_Employee_id=<?php echo $data->Employee_id?>" class="btn btn-danger">Delete</a></td>
						<td><a href="" class="btn btn-primary">Edit</a></td>
            </tr>
          <?php
					}
					?>  
                    </tfoot>
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
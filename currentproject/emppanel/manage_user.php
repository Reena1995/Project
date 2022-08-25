<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage User
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">User</a></li>
            <li class="active">Manage User</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage User</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Image</th>
                        <th>Name</th>
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
					  foreach($user_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->u_id?></td>
							<td><img src="../upload/users/<?php echo $data->Img?>" width="50px" height="50px"></td>
							<td><?php echo $data->name?></td>
							<td><?php echo $data->uname?></td>
							<td><?php echo $data->pwd?></td>
							<td><?php echo $data->gender?></td>
							<td><?php echo $data->EMAIL?></td>
							<td><?php echo $data->mobile_no?></td>
							<td><?php echo $data->create_dt?>/<?php echo $data->update_dt?></td>
							<td><a href="status?status_u_id=<?php echo $data->u_id?>"class="btn btn-primary"><?php echo $data->status?></a></td>
						<td><a href="delete?del_u_id=<?php echo $data->u_id?>" class="btn btn-danger">Delete</a></td>
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
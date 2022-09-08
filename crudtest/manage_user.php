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
                        <td>id</td>
						<td>Name</td>
						<td>Surname</td>
						<td>Gender</td>
						<td>City</td>
						<th>Edit</th>
						<th>Delete</th>
						
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($user_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->user_id?></td>
							<td><?php echo  $data->name?></td>
							<td><?php echo  $data->surname?></td>
							<td><?php echo  $data->gender?></td>
							<td><?php echo  $data->city?></td>
							<td><a href="edit_user?btn_user_id=<?php echo $data->user_id;?>" class="btn btn-primary">Edit</a></td>
							
						<td><a href="delete?del_user_id=<?php echo $data->user_id?>" class="btn btn-danger">Delete</a></td>
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
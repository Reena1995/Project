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
						<th>review_id</th>
                        <th>uname</th>
						<th>description</th>
						<th>Reply </th>
						<th>Created_dt/Updated_dt</th>
						<th>Edit</th>
						<th>Delete</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($reviews_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->review_id?></td>
							<td><?php echo $data->uname?></td>
							<td><?php echo $data->description?></td>
							<td><?php echo $data->reply?></td>
							<td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
							<td><a href="edit_review?btn_review_id=<?php echo $data->review_id?>" class="btn btn-primary">Edit</a></td>
						<td><a href="delete?del_review_id=<?php echo $data->review_id?>" class="btn btn-danger">Delete</a></td>
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
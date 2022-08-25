<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Contact
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Contact</a></li>
            <li class="active">Manage Contact</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Contact</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Cont_id</th>
                        <th>First Name</th>
                        <th>Last_Name</th>
						<th>Email</th>
						<th>Mobile_no</th>
						<th>Decription</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($contact_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->cont_id?></td>
							<td><?php echo $data->f_name?></td>
							<td><?php echo $data->l_name?></td>
							<td><?php echo $data->email?></td>
							<td><?php echo $data->mobile_no?></td>
								<td><?php echo $data->description?></td>
							<td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
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
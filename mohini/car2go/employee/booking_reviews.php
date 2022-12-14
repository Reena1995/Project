<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Booking Reviews
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">  Booking Reviews</a></li>
            <li class="active">  Booking Reviews</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title"> View Booking Reviews</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Feedback_id</th>
                       <th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Edit</th>
                        
                      </tr>
					  
                    <tbody>
					 <?php
					  foreach($feedback_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->Feedback_id?></td>
							
							<td><?php echo $data->Name?></td>
							<td><?php echo $data->Email?></td>
							<td><?php echo $data->Message?></td>
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
						<td><a href="delete?del_Feedback_id=<?php echo $data->Feedback_id?>" class="btn btn-danger">Delete</a></td>
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
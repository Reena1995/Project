<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Manage feedback
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">   Manage feedback</a></li>
            <li class="active">  Manage feedback</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">  Manage feedback</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>feedback_id</th>
                        <th>name</th>
                        <th>email</th>
						            <th>message</th>
                        <th>created/updated</th>
					            	<th>Delete</th>
						            <th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
					foreach($feedback_arr as $data)
					{
					?>  
					  <tr>
            <td><?php echo $data->feedback_id?></td>
            <td><?php echo $data->name?></td>
						<td><?php echo $data->email?></td>
						<td><?php echo $data->message?></td>
            <td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
						<td><a href="delete?del_feedback_id=<?php echo $data->feedback_id?>" class="btn btn-danger">Delete</a></td>
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
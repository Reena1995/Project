<?php 
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Client
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Client</a></li>
            <li class="active">Manage Client</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Client</h3>
                </div><!-- /.box-header -->
                <div class="box-body" style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>com_id</th>
						<th>img</th>
						<th>U_id</th>
                        <th>brand_id</th>
                        <th>model_id</th>
                        <th>rep_id</th>
						<th>loc_id</th>
                        <th>description</th>
						<th>mob_no</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($complaint_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->com_id?></td>
							<td><img src="../upload/complaint/<?php echo $data->img?>" width="50px" height="50px"></td>
							<td><?php echo $data->name?></td>
							<td><?php echo $data->brand_name?></td>
							<td><?php echo $data->model_name?></td>		
							<td><?php echo $data->rep_name?></td>
							<td><?php echo $data->loc_name?></td>
							<td><?php echo $data->description?></td>
							<td><?php echo $data->mob_no?></td>
							<td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
						<td><a href="delete?del_com_id=<?php echo $data->com_id?>" class="btn btn-danger">Delete</a></td>
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
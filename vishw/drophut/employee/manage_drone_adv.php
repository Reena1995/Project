<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Drone Type
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Drone Type</a></li>
            <li class="active">Manage Drone Type</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Car Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body"  style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>droneadv_id</th>
                        <th>drone_type</th>
                        <th>drone_pic</th>
                        <th>Client_id</th>
                        <th>drone_model</th>
						            <th>drone_price</th>
                        <th>Loca_name</th> 
                        <th>drone_shop</th> 
                        <th>description</th>          
						            <th>Created_dt/Updated_dt</th>
					            	<th>Delete</th>
					            	<th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>

            <?php
					  foreach($drone_arr as $data)
					  {
						?>
              <tr>
							<td><?php echo $data->droneadv_id?></td>
              <td><?php echo $data->drone_type?></td>
							<td><img src="../client/upload/drone/<?php echo $data->drone_pic?>" width="50px" height="50px"></td>
							<td><?php echo $data->Name?></td> 
							<td><?php echo $data->drone_model?></td>
							<td><?php echo $data->drone_price?></td>
							<td><?php echo $data->Loca_name?></td>
							<td><?php echo $data->drone_shop?></td>
						  <td><?php echo $data->description?></td>
						
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
							<td><a href="delete?del_droneadv_id=<?php echo $data->droneadv_id?>" class="btn btn-danger">Delete</a></td>
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
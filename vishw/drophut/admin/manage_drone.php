<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Manage drone
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">   Manage drone</a></li>
            <li class="active">  Manage drone</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">  Manage drone</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>drone_id</th>
                        <th>drone_pic</th>
						            <th>drone_type</th>
                        <th>drone_price</th>
                      </tr>
                    </thead>
                    <tbody>
          <?php
					foreach($product_arr as $data)
					{
					?>  
					  <tr>
            <td><?php echo $data->drone_id?></td>
            <td><img src="upload/drone/<?php echo $data->drone_pic?>" width="50px" height="50px"></td>
						<td><?php echo $data->drone_type?></td>
            <td><?php echo $data->drone_price?></td>
            <td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
						<td><a href="delete?del_drone_id=<?php echo $data->drone_id?>" class="btn btn-danger">Delete</a></td>
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
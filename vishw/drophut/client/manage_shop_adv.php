<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage Shop 
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"></a></li>
            <li class="active"></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Shop Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body"  style="overflow-x:auto;">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>shopadv_id</th>
                        <th>Client_id</th>
                        <th>shop_img</th>
                        <th>shop_name</th>
						<th>shop_address</th>      
						<th>Created_dt/Updated_dt</th>
					    <th>Delete</th>
			        	<th>Edit</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
					  foreach($shop_arr as $data)
					  {
					?>
                        <tr>
							<td><?php echo $data->shopadv_id?></td>
                            <td><?php echo $data->Client_id?></td>
							<td><img src="upload/shop/<?php echo $data->shop_img?>" width="50px" height="50px"></td>
							<td><?php echo $data->shop_name?></td>
							<td><?php echo $data->shop_address?></td>				
							<td><?php echo $data->Created_dt?>/<?php echo $data->Updated_dt?></td>
							<td><a href="delete?del_shopadv_id=<?php echo $data->shopadv_id?>" class="btn btn-danger">Delete</a></td>
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
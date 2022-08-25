<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Manage shop
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> shop</a></li>
            <li class="active">Manage shop</li>
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
                        <th>Shop_id</th>
						<th>loc_id</th>
						<th>client_id</th>
                        <th>Image</th>
                        <th>Shop_name</th>
                        <th>Address</th>
                        <th>About shop</th>
						<th>Email</th>
						<th>Mobile_no</th>
						<th>Created_dt/Updated_dt</th>
						<th>Delete</th>
						<th>Status</th>
						
                      </tr>
                    </thead>
                    <tbody>
                        <?php
					  foreach($shop_arr as $data)
					  {
						?>
                            <tr>
							<td><?php echo $data->shop_id?></td>
							<td><?php echo $data->loc_name?></td>
							<td><?php echo $data->client_name?></td>
							<td><img src="../upload/shop/<?php echo $data->img?>" width="50px" height="50px"></td>
							<td><?php echo $data->shop_name?></td>
							<td><?php echo $data->address?></td>
							<td><?php echo $data->about_shop?></td>
							<td><?php echo $data->email?></td>
							<td><?php echo $data->mobile_no?></td>
							<td><?php echo $data->created_dt?>/<?php echo $data->updated_dt?></td>
							<td><?php echo $data->status?></td>
							
						<td><a href="delete?del_shop_id=<?php echo $data->shop_id?>" class="btn btn-danger">Delete</a></td>
						    <td><a href="status?status_shop_id=<?php echo $data->shop_id?>"class="btn btn-primary"><?php echo $data->status?></a></td>
							
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
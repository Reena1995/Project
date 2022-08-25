<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Manage Order List
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Order List</a></li>
            <li class="active">Order List</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Order List</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>order_list_id</th>
						            <th>product</th>
                        <th>total</th>
                        <th>cart_subtotal</th>
						            <th>shipping</th>
						            <th>order_total</th>
						            <th>COD</th>
						            <th>paypal</th>
                        <th>Delete</th>
						            <th>Edit</th> 
                      </tr>
                    </thead>
                    <tbody>
          <?php
					foreach($orderlist_arr as $data)
					{
					?>  
					  <tr>
            <td><?php echo $data->order_list_id?></td>
						<td><?php echo $data->product?></td>
						<td><?php echo $data->total?></td>
						<td><?php echo $data->cart_subtotal?></td>
						<td><?php echo $data->shipping?></td>
						<td><?php echo $data->order_total?></td>
						<td><?php echo $data->COD?></td>
						<td><?php echo $data->paypal?></td>
            <td><a href="delete?del_order_list_id=<?php echo $data->order_list_id?>" class="btn btn-danger">Delete</a></td>
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
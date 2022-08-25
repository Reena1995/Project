<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Manage Billing Details
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Billing Details</a></li>
            <li class="active">Manage Billing Details</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Billing Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>billing_details_id</th>
                        <th>first_name</th>
                        <th>last_name</th>
                        <th>country</th>
                        <th>street_address</th>
                        <th>city</th>
                        <th>state</th>
                        <th>phone</th>
                        <th>email</th>
                        <th>order_notes</th> 
					            	<th>Delete</th>
						            <th>Edit</th>       	
                      </tr>
                    </thead>
                    <tbody>
                    <?php
					foreach($payment_details_arr as $data)
					{
					?>  
					<tr>
            <td><?php echo $data->billing_details_id?></td>
						<td><?php echo $data->first_name?></td>
						<td><?php echo $data->last_name?></td>
					<td><?php echo $data->country?></td>
						<td><?php echo $data->street_address?></td>
						<td><?php echo $data->city?></td>
						<td><?php echo $data->state?></td>
						<td><?php echo $data->phone?></td>
            <td><?php echo $data->email?></td>
						<td><?php echo $data->order_notes?></td>
						<td><a href="delete?del_billing_details_id=<?php echo $data->billing_details_id?>" class="btn btn-danger">Delete</a></td>
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
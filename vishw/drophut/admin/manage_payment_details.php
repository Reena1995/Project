<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Manage Payment Details
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Manage Payment Details</a></li>
            <li class="active">Manage Payment Details</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Manage Payment Details</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>payment_details_id</th>
					            	<th>full_name</th>
                        <th>Address</th>
                        <th>city</th>
						            <th>state</th>
						            <th>zip</th>  
						            <th>phone</th>
						            <th>Email</th>
					              <th>card_no</th>
                        <th>exp_month</th>
				                <th>exp_year</th>
                        <th>cvv</th>
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
            <td><?php echo $data->payment_details_id?></td>
						<td><?php echo $data->full_name?></td>
						<td><?php echo $data->Address?></td>
						<td><?php echo $data->city?></td>
						<td><?php echo $data->state?></td>
						<td><?php echo $data->zip?></td>
						<td><?php echo $data->phone?></td>
						<td><?php echo $data->Email?></td>
						<td><?php echo $data->card_no?></td>
            <td><?php echo $data->exp_month?></td>
						<td><?php echo $data->exp_year?></td>
						<td><?php echo $data->cvv?></td>
            <td><a href="delete?del_payment_details_id=<?php echo $data->payment_details_id?>" class="btn btn-danger">Delete</a></td>
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
<?php 
include_once('header.php');
?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Manage customer
          
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">   Manage customer</a></li>
            <li class="active">  Manage customer</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">  Manage customer</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>customer_id</th>
                        <th>Profile_img</th>
						            <th>Name</th>
                        <th>Mobile_no</th>
						            <th>Email</th>
                        <th>Gender</th>
                        <th>Address</th>
						            <th>User_name</th>
                        <th>Password</th>
                        <th>Delete</th>
						            <th>Edit</th> 
                      </tr>
                    </thead>
                    <tbody>
          <?php
					foreach($customer_arr as $data)
					{
					?>  
					  <tr>
            <td><?php echo $data->customer_id?></td>
            <td><img src="../site/upload/customer/<?php echo $data->Profile_img?>" width="50px" height="50px"></td>
						<td><?php echo $data->Name?></td>
						<td><?php echo $data->Mobile_no?></td>
						<td><?php echo $data->Email?></td>
            <td><?php echo $data->Gender?></td>
            <td><?php echo $data->Address?></td>
						<td><?php echo $data->User_name?></td>
            <td><?php echo $data->Password?></td>
            <td><a href="delete?del_customer_id=<?php echo $data->customer_id?>" class="btn btn-danger">Delete</a></td>
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
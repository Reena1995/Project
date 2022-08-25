<?php
include_once('header.php');
?>

 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Client 
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Client </a></li>
            <li class="active"> Add Client </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Client Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" enctype="multipart/form-data" role="form" >					
                  <div class="form-group">
                      <label>Profile_img</label>
                      <input type="file" id="Profile_img"name="Profile_img" class="form-control" accept="image/*"/>
                    </div>
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" name="Name" class="form-control" placeholder="Enter your Name"/>
                    </div>
                    <div class="form-group">
                      <label>Mobile_no</label>
                      <input type="text" name="Mobile_no" class="form-control" placeholder="Enter your Mobile_no"/>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" name="Email" class="form-control" placeholder="Enter your Email"/>
                    </div>
                    <div class="form-group">
                      <label>User_name</label>
                      <input type="text" name="User_name" class="form-control" placeholder="Enter your User_name"/>
                    </div>
                    <div class="form-group">
                      <label>Password	</label>
                      <input type="text" name="password" class="form-control" placeholder="Enter your Password	"/>
                    </div>
                    <div class="form-group">
                      <input type="Submit" name="Submit" value="Submit" class="btn btn-primary">
                    </div>
                  </form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->



<?php
include_once('footer.php');
?>
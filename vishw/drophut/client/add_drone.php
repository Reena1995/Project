<?php
include_once('header.php');
?>

 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Drone 
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Drone </a></li>
            <li class="active"> Add Drone </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Drone Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" enctype="multipart/form-data" role="form" >					
                  <div class="form-group">
                      <label>drone_pic</label>
                      <input type="file" id="drone_pic"name="drone_pic" class="form-control" accept="image/*"/>
                    </div>
                    <div class="form-group">
                      <label>drone_model</label>
                      <input type="text" name="drone_model" class="form-control" placeholder="Enter drone type"/>
                    </div>
                    <div class="form-group">
                      <label>drone_shop</label>
                      <input type="text" name="drone_shop" class="form-control" placeholder="Enter drone type"/>
                    </div>
                    <div class="form-group">
                      <label>drone_type</label>
                      <input type="text" name="drone_type" class="form-control" placeholder="Enter drone type"/>
                    </div>
                    <div class="form-group">
                      <label>drone_price</label>
                      <input type="text" name="drone_price" class="form-control" placeholder="Enter drone type"/>
                    </div>
                    <div class="form-group">
                      <label>description</label>
                      <input type="text" name="description" class="form-control" placeholder="Enter drone drone price"/>
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
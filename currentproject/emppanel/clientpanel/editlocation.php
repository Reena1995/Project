<?php
include_once('header.php');
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           EDIT LOCATION
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> location</a></li>
            <li class="active">Add location</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-12">
              <!-- general form elements disabled -->
              <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Personal Information</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <form method="post" enctype="multipart/form-data" role="form">
                    
					
                    <div>
                      <label >Location</label>
                       <input type="text" name="loc_name" value="<?php echo $fetch->loc_name?>"class="form-control "  placeholder="Enter Location" >					  
                    </div>
					<br>
					<div class="form-group">
                      <input type="submit" name="update" style="margin-left:500px;" value="Submit" class="btn btn-primary">
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

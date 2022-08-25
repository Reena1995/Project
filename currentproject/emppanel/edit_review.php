<?php

    include_once('header.php');
?>
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Add Mobile Brand
           
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> client</a></li>
            <li class="active">Add client</li>
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
                               <div class="control-group "> 
							        <div class="wthree_input">
									<p><b>Reply</b></p>
									<input type="text" class="form-control" value="<?php echo $fetch->reply?>" name="reply" placeholder="enter reply"  /> 
                                </div>
								</div><br>
								
		<br>		
                               <div>
                                    <button class="btn btn-primary" name="update" value="Save" type="submit">Update</button>
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
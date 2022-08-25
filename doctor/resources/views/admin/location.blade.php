@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/index')}}">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Social Media</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Social Media</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-2 col-lg-2 col-xl-2 theiaStickySidebar">
						
							<!-- Profile Sidebar -->
							
							<!-- /Profile Sidebar -->
							
						</div>
						
						<div class="col-md-8 col-lg-9 col-xl-10">
							<div class="card">
								<div class="card-body">
								
									<!-- Social Form -->
									   
									                                                                                       
									    <div class="row">
										 <div class="col-md-4 col-lg-4">

										 @if(session()->has('success'))
												<br>
												<i class="alert-success">{{session('success')}}</i>
												<br>
												@endif
												@if(session()->has('success3'))
												<br>
												<i class="alert-success">{{session('success3')}}</i>
												<br>
												@endif
											<form action="{{url('/addstate')}}" method="post" enctype="multipart/form-data"> 
										      @csrf
											<h4 class="card-title">Add State</h4>
											
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control" name="name" placeholder="add state name">
												</div>
												<div class="submit-section">
											        <button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add State</button>
												</div>
											</form>
											<hr>
										<!-- start manage state -->	
                                        <hr>
											<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>State_id</th>
													<th>State Name</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
                                                <?php
                                                    foreach($sta_id_arr as $data)
                                                    {
                                                ?>
												
											
												<tr>
													<td><?php echo $data->id?></td>
													<td><?php echo $data->name?></td>
													
													<td class="text-right">
														<div class="actions">
															<a  href="{{url('addstate/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												
												<?php
                                                    }
                                                ?>
												
												
											</tbody>
										</table>
									</div>
											</div>


                                            <!-- End manage state -->	


                                            <div class="col-md-4 col-lg-4">

										 @if(session()->has('success1'))
												<br>
												<i class="alert-success">{{session('success1')}}</i>
												<br>
												@endif
												@if(session()->has('success4'))
												<br>
												<i class="alert-success">{{session('success4')}}</i>
												<br>
												@endif
											<form action="{{url('/addcity')}}" method="post" enctype="multipart/form-data"> 
										      @csrf
											<h4 class="card-title">Add City</h4>
											
												<div class="form-group">
                                                    
													<label>Service </label>
                                                    <select name="sid" class="form-control" >
                                                    <option value="">Select State</option>
														<?php foreach($sta_id_arr as $data)
							                              {
								                        ?>
                                                        <option value="<?php echo $data->id;?>">
                                                       <?php echo $data->name;?></option>
								                       <?php 
							                              }
														?>
                                                    </select>
                                                    <br>
													<input type="text" class="form-control" name="name" placeholder="add city name">
												</div>
												<div class="submit-section">
											        <button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add City</button>
												</div>
											</form>
											<hr>
											<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>City_Id</th>
													<th>State_ID</th>
													<th>City name</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
                                            <?php
                                                    foreach( $city as $data)
                                                    {
                                                ?>
											
												<tr>
													<td><?php echo $data->id?></td>
													<td><?php echo $data->sid ?></td>
													<td><?php echo $data->name?></td>
													<td class="text-right">
														<div class="actions">
															<a  href="{{url('addcity/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												
											<?php
                                            }
                                            ?>
												
												
											</tbody>
										</table>
									</div>
											</div>


										<div class="col-md-4 col-lg-4">
											@if(session()->has('success2'))
												<br>
												<i class="alert-success">{{session('success2')}}</i>
												<br>
												@endif
												@if(session()->has('success5'))
												<br>
												<i class="alert-success">{{session('success5')}}</i>
												<br>
												@endif
											<h4 class="card-title">Add Area</h4>
											<form action="{{url('/addarea')}}" method="post" enctype="multipart/form-data">
												@csrf
												<div class="form-group">
													<label>Area</label>
                                                    <select name="citie_id" class="form-control" >
                                                    <option value="">Select city</option>
														<?php foreach($city as $data)
							                              {
								                        ?>
                                                        <option value="<?php echo $data->id;?>">
                                                       <?php echo $data->name;?></option>
								                       <?php 
							                              }
														?>
                                                    </select>
                                                    <br>
													<input type="text" class="form-control" name="name" placeholder="add area name">
												</div>
												<div class="submit-section">
													<button type="submit" class="btn btn-primary submit-btn" name="submit" value="send">Add Area</button>
												</div>
											</form>	
											<hr>
											<div class="table-responsive">
										<table class="datatable table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>Area_ID</th>
													<th>City_ID</th>
													<th>Area Name</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
                                            <?php foreach($are as $data)
							                              {
								                        ?>
											
												<tr>
													<td><?php echo $data->id?></td>
													<td><?php echo $data->citie_id?></td>
													<td><?php echo $data->name?></td>
													<td class="text-right">
														<div class="actions">
															<a  href="{{url('addarea/'.$data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
													</td>
												</tr>
												
												
											<?php
                                                          } 
                                            ?>	
												
												
											</tbody>
										</table>
									</div>
											</div>

										</div>
										
										
										
										
										
										
									
									<!-- /Social Form -->
									
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>		
			<!-- /Page Content -->
   
			
@endsection	
@extends('admin.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of Patient</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">Users</a></li>
									<li class="breadcrumb-item active">Patient</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<div class="table-responsive">
										<table id="table" class=" table table-hover table-center mb-0">
										@if(session()->has('success'))
												<br>
												<i class="alert alert-success">{{session('success')}}</i>
												<br>
												@endif
											<thead>
												<tr>
													<th>Company ID</th>
													<th>Company Name</th>
													<th>First_name</th>
													<th>Last name</th>
													<th>Email</th>
													<th>Visting Card</th>
													<th>Profile_img</th>
													<th>status</th>
													<th>created date</th>
													<th>updated date</th>
													<th class="text-right">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
													foreach($com_arr as $data)
													{
												?>
												<tr>	
														<td><?php echo $data->id?></td>
														<td><?php echo $data->company_name?></td>
														<td><?php echo $data->first_name?></td>
														<td><?php echo $data->last_name?></td>
														<td><?php echo $data->email?></td>
														<td><img src="{{asset('upload/visitingcard/'.$data->visiting_card)}}" height="50px" width="50px"></td>
														<td><img src="{{asset('upload/company/'.$data->profile_img)}}" height="50px" width="50px"></td>
														<td><?php echo $data->status?></td>
														<td><?php echo $data->created_at?></td>
														<td><?php echo $data->updated_at?></td>
															
														
													<td class="text-right">
																<div class="actions">
																	<a href="{{url('editcompany/'.$data->id)}}"class="btn btn-sm bg-success-light">
																		<i class="fe fe-pencil"></i>Edit
																	</a>
																	<a href="{{url('admin-add-company/'.$data->id)}}" class="btn btn-sm bg-danger-light"  >
																		<i class="fe fe-trash"></i>Delete
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
							</div>
						</div>			
					</div>
					
				</div>			
			</div>
			<!-- /Page Wrapper -->
		
        </div>
		<!-- /Main Wrapper -->
		
		<!-- jQuery -->
        <script src="{{url('Backend/assets/js/jquery-3.2.1.min.js')}}"></script>
		
		<!-- Bootstrap Core JS -->
        <script src="{{url('Backend/assets/js/popper.min.js')}}"></script>
        <script src="{{url('Backend/assets/js/bootstrap.min.js')}}"></script>
		
		<!-- Slimscroll JS -->
        <script src="{{url('Backend/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
		
		<!-- Datatables JS -->
		<script src="{{url('Backend/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{url('Backend/assets/plugins/datatables/datatables.min.js')}}"></script>
		
		<!-- Custom JS -->
		<script  src="{{url('Backend/assets/js/script.js')}}"></script>
		
    </body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-patient-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:52 GMT -->
</html>
@endsection
@extends('manager.Layout.main_layout') 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">List of MR</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/company-dashboard')}}">Dashboard</a></li>
									<li class="breadcrumb-item"><a href="javascript:(0);">MR</a></li>
									<li class="breadcrumb-item active">Manage MR</li>
								</ul>
							</div>
							@if(session()->has('success'))
												
								<i class="alert alert-success">{{session('success')}}</i>
												
							@endif
						</div>
					</div>
					<!-- /Page Header -->
					
					<div class="row">
						<div class="col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="table-responsive">
										<table id="table" class="table table-hover table-center mb-0">
											<thead>
												<tr>
													<th>MR ID</th>
													<th>Manager Name</th>
													<th>Company Name</th>
													<th>Profile Img</th>
													<th>Company Name</th>
													<th>Email</th>
													<th>Visiting Card</th>
													<th>Action</th>
													
												</tr>
											</thead>
											<tbody>
												
												<tr>
													<td></td>

													<td></td>

													<td></td>

													<td><img src="" height="50px" width="50px"/></td>

													<td></td>

													<td></td>

													<td><img src="" height="50px" width="50px"/></td>

													<td class="text-right">
														<div class="actions">
															<a class="btn btn-sm bg-success-light"  href="">
																<i class="fe fe-pencil"></i> Edit
															</a>
															<a  href="" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
												    </td>
													
												</tr>
												
												
												
											</tbody>
										</table>
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

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/{{url('/admin-doctor-list')}} by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:51 GMT -->
</html>
@endsection
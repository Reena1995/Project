@extends('admin.Layout.main_layout')

<!---add Title 'title', 'Home Page'    --->
@section('title','Admin Manage Stockiest')
<!---add description here ---> 	
@section('description', '')
<!---add keywords here    --->
@section('keywords', '')
<!---add robots here    --->
@section('robots', '')

 	
@section('main_container')
			
			
			<!-- Page Wrapper -->
            <div class="page-wrapper">
                <div class="content container-fluid">
				
					<!-- Page Header -->
					<div class="page-header">
						<div class="row">
							<div class="col-sm-12">
								<h3 class="page-title">Stockiest</h3>
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="{{url('/admin')}}">Dashboard</a></li>
									<li class="breadcrumb-item active">Stockiest</li>
									
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
													<th>StockiestID</th>
													<th>Company ID</th>
													<th>Name</th>
													<th>Area</th>
													<th>Pincode</th>
													<th class="text-right">Actions</th>
												</tr>
											</thead>
											<tbody>
												@if(!$stockiest_arr->isEmpty())
											   @foreach($stockiest_arr as $data)
												<tr>
													<td><?php echo $data->id?></td>

													<td><?php echo $data->company_name?></td>

													<td><?php echo $data->name?></td>

													<td><?php echo $data->area_name?></td>

													<td><?php echo $data->pincode?></td>

													<td class="text-right">
														<div class="actions">
															<a  href="{{url('adminstockieststatus/'. $data->id)}}" class="btn btn-sm bg-success-light">
																<i class="fe fe-pencil"></i> <?php echo $data->status?>
															</a>
															<a  href="{{url('adminstockiestdelete/'. $data->id)}}" class="btn btn-sm bg-danger-light">
																<i class="fe fe-trash"></i> Delete
															</a>
														</div>
												    </td>
													
												</tr>
												
												@endforeach
												@else
													<p class="text-danger mt-2">No Stockiest Available</p>
												@endif
												
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
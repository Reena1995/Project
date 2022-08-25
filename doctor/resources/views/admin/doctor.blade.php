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
													<th>Id</th>
													<th>Gender</th>
													<th>First_name</th>
													<th>Last_name</th>
													<th>Specialist_id </th>
													<th>Short_tittle</th>
													<th>Email</th>
													<th>Password</th>
													<th>Dob</th>
													<th>Profile_img</th>
													<th>Liacence_no</th>
													<th>Education</th>
													<th>Experience</th>
													<th>Hospital_name</th>
													<th>Hospital_img</th>
													<th>dr_mobile</th>
													<th>Visit_card</th>
													<th>Office_no</th>
													<th>About</th>
													<th>State</th>
													<th>City</th>
													<th>Area</th>
													<th>Address</th>
													<th>pincode</th>
													<th>google_map</th>
													<th>day</th>
													<th>hospital_morning_to</th>
													<th>hospital_morning_from</th>
													<th>hospital_afternoon_to</th>
													<th>hospital_afternoon_from</th>
													<th>hospital_evening_to</th>
													<th>hospital_evening_from</th>
													<th>consulting_fees</th>
													<th>notification</th>
													<th>doctor_status</th>
													<th>hospital_status</th>
													<th>doctor_status</th>
													<th>created_at</th>
													<th>updated_at</th>
													<th class="text-right">Actions</th>
													
													
												</tr>
											</thead>
											<tbody>
												<?php
													foreach($doc_arr as $data)
													{
												?>
												<tr>
													<td><?php echo $data->id?></td>
													<td><?php echo $data->gender?></td>
													<td><?php echo $data->first_name?></td>
													<td><?php echo  $data->last_name?></td>
													<td><?php echo  $data->specialist_id?></td>
													<td><?php echo $data->short_tittle?></td>
													<td><?php echo $data->email?></td>
													<td><?php echo $data->password?></td>
													<td><?php echo  $data->dob?></td>
													<td><img src="{{asset('upload/doctors/'. $data->profile_img)}}" height="50px" width="50px"></td>
													<td><?php echo $data->liacence_no?></td>
													<td><?php echo $data->education?></td>
													<td><?php  echo $data->experience?></td>
													<td><?php echo $data->hospital_name?></td>
													<td><?php
														$hospital_img=$data->hospital_img;
														$hosp_img_arr=explode(",",$hospital_img);
								
														foreach($hosp_img_arr as $d)
														{
														?>
														<li>
															<a href="{{asset('upload/hospital/'.$d)}}" data-fancybox="gallery">
																<img src="{{asset('upload/hospital/'.$d)}}" alt="Feature" height="40px">
															</a>
														</li>
														<?php
														}
														?>
														</td>
													<!--<td><img src="{{asset('upload/hospital/'. $data->hospital_img)}}" height="50px" width="50px"></td>!-->
													<td><?php  echo $data->dr_mobile?></td>
													<td><img src="{{asset('upload/visitingcard/'. $data->visit_card)}}" height="50px" width="50px"></td>
													<td><?php echo $data->office_no?></td>
													<td><?php echo $data->about?></td>
													<td><?php echo $data->state?></td>
													<td><?php  echo$data->city?></td>
													<td><?php  echo$data->area?></td>
													<td><?php echo $data->address?></td>
													<td><?php echo $data->pincode?></td>
													<td><?php echo $data->google_map?></td>
													<td><?php echo $data->day?></td>
													<td><?php echo $data->hospital_morning_to?></td>
													<td><?php echo $data->hospital_morning_from?></td>
													<td><?php echo $data->hospital_afternoon_to?></td>
													<td><?php echo $data->hospital_afternoon_from?></td>
													<td><?php echo $data->hospital_evening_to?></td>
													<td><?php echo $data->hospital_evening_from?></td>
													<td><?php echo $data->consulting_fees?></td>
													<td><?php echo $data->followup_fees?></td>
													<td><?php echo $data->notification?></td>
													<td><?php echo $data->doctor_status?></td>
													<td><?php echo $data->hospital_status?></td>
													<td><?php echo $data->created_at?></td>
													<td><?php echo $data->updated_at?></td>
													<td class="text-right">
														<div class="actions">
															<a href="{{url('edit/'.$data->id)}}"class="btn btn-sm bg-success-light">
																<i class="fe fe-pencil"></i>Edit
															</a>
															<a href="{{url('admin-add-doctor/'.$data->id)}}" class="btn btn-sm bg-danger-light"  >
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
@extends('Backend.Partial.master')
@section('content')
  

		<div class="typo-agile">
			{{--<form id="register_form'" action="" method="post" enctype="multipart/form-data">
			@csrf
			@method('post')
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">Register Form</h2>
							</div>
							<h2 class="messageShow"></h2>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Name</label>
								<div class="form-outline">
									<input type="text" id="name" name="name" class="form-control" />
									
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Mobile No</label>
								<div class="form-outline">
									<input type="text" id="mobile" name="mobile" class="form-control" />
									
									
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Email</label>
								<div class="form-outline">
                                    <input type="email" id="email" name="email" class="form-control" />
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Password</label>
								<div class="form-outline">
                                    <input type="password" id="pwd" name="pwd" class="form-control" />
									
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="submit-btn-main">
								<button type="button" class="btn btn-primary btn-block mb-4"   value="submit" name="submit" id="btnsubmit">Sign up</button>
							</div>
							<br>
							<div class="submit-btn-main">
							
								
								<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Addstudent</button>								
							</div>
							
						</div>
				</div>		

			</form>--}}
			<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Addstudent</button>
			<br>
			<div id="success_message"></div>								
			<div class="table-responsive indexbutn">
                <table class="table table-striped b-t b-light">
                    <thead>
                    <tr>
                       
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile no</th>
                        <th>Password</th>
                        <th>Edit</th>
						<th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
						  
                    </tbody>
                </table>
                </div>
					<!--add student model start-->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							
								<div class="modal-content">
									<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											
									</div>
										<div class="modal-body">
											<form id="registerForm" action="" method="post" enctype="multipart/form-data">
												@csrf
												@method('post')
												<div class="row">
															<div class="col-12">
																<h2 class="w3ls_head">Register Form</h2>
															</div>
															<h2 class="messageShow"></h2>
														<div class="col-lg-12">
															<div class="input-main">
																<label class="form-label" for="form3Example1">Name</label>
																<div class="form-outline">
																	<input type="text" id="name" name="name" class="form-control" />
																	
																	
																</div>
															</div>
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Mobile No</label>
																<div class="form-outline">
																	<input type="text" id="mobile" name="mobile" class="form-control" />
																	
																	
																</div>
															</div>
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Email</label>
																<div class="form-outline">
																	<input type="email" id="email" name="email" class="form-control" />
																	
																</div>
															</div>
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Password</label>
																<div class="form-outline">
																	<input type="password" id="pwd" name="pwd" class="form-control" />
																	
																</div>
															</div>
														</div>
														
														<div class="col-lg-12">
															<div class="submit-btn-main">
																<button type="button" class="btn btn-primary btn-block mb-4"   value="submit" name="submit" id="btnsubmit">Sign up</button>
															</div>
															
														</div>
												</div>		

											</form>
		
										</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							
							</div>
						</div>
					<!-- add student model end-->
					<!--edit student model start-->
						<div class="modal fade" id="editStudentModel" data-toggle="modal" role="dialog">
							<div class="modal-dialog">
							
								<div class="modal-content">
									<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											
									</div>
										<div class="modal-body">
											<form id="editUser" action="" method="post" enctype="multipart/form-data">
												@csrf
												@method('put')
												<div class="row">
															<div class="col-12">
																<h2 class="w3ls_head">Edit and Update</h2>
															</div>
															<!--<h2 class="messageShow"></h2>-->
															<div id="succes_message"></div>
															<ul id="updateform_errList"></ul>
															<input type="hidden" id="editid" name="name" class="form-control editid" />
														<div class="col-lg-12">
														
														<div class="input-main">	
															<label class="form-label" for="form3Example1">Name</label>
															<div class="form-outline">
																<input type="text" id="editname" name="name" class="form-control" />
															</div>
														</div>
										
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Mobile No</label>
																<div class="form-outline">
																	<input type="text" id="editmobile" name="mobile" class="form-control" />
																	
																	
																</div>
															</div>
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Email</label>
																<div class="form-outline">
																	<input type="email" id="editemail" name="email" class="form-control" />
																	
																</div>
															</div>
															<br>
															<div class="input-main">
																<label class="form-label" for="form3Example1">Password</label>
																<div class="form-outline">
																	<input type="pwd" id="editpwd" name="pwd" class="form-control" />
																	
																</div>
															</div>
														</div>
														
														<div class="col-lg-12">
															<div class="submit-btn-main">
																<button type="button" class="btn btn-primary btn-block mb-4 updatereg"   value="submit" name="submit" >Update</button>
															</div>
															
														</div>
												</div>		

											</form>
		
										</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							
							</div>
						</div>
					<!--edit student model end-->
					<!--delete student model start-->
			
					<div class="modal fade" id="deletetStudentModel" data-toggle="modal" role="dialog">
							<div class="modal-dialog">
							
								<div class="modal-content">
									<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 style="text-align:center;">DELETE</h4>
									</div>
										<div class="modal-body">
												<input type="hidden" id="deletetid">
												<h4>Are you sure delete</h4>
												<br>
												<button type="button" class="deletemodel" data-dismiss="modal">Delete</button>
										</div>
									<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									</div>
								</div>
							
							</div>
						</div>
					<!--delete student model end-->
					
		</div>


@endsection
@section('script')
<script>
	$(document).ready (function (){

		fetchregister();

		function fetchregister()
		{
			$.ajax({
				type:'GET',
				url:'{{route("ajaxGetRegister")}}',
				datatype:'json',
				success:function (response){
					console.log(response.regis);
					$('tbody').html("");
					$.each(response.regis, function (key,item) {
						$('tbody').append('<tr>\
						     <td>'+item.id+'</td>\
							 <td>'+item.name+'</td>\
							 <td>'+item.email+'</td>\
							 <td>'+item.mobile+'</td>\
							 <td>'+item.pwd+'</td>\
							 <td><button type="button" value="'+item.id+'" class="edit btn btn-primary">Edit</button></td>\
							 <td><button type="button" value="'+item.id+'" class="delete btn btn-danger">Delete</button></td>\
						</tr>');
						
							   

					});
				}
			});
		}
		/////////////////edit//////
		$(document).on('click','.edit', function (e){
			e.preventDefault();
			var reg_id=$(this).val();
			console.log (reg_id);
			$('#editStudentModel').modal('show');
			$.ajax({
				type:'GET',
				url:'/registeredit/'+reg_id,
				success:function(response) {
					console.log(response);
					if(response.status == 404){
						$('#success_message').html("");
						$('#success_message').addClass('alert alert-danger');
						$('#success_message').text(response.message);
					}else{
						$('#editname').val(response.register.name);
						$('#editmobile').val(response.register.mobile);
						$('#editemail').val(response.register.email);
						$('#editpwd').val(response.register.pwd);
						$('#editid').val(reg_id);
					}
				}
			});

		});
		/////////////////update////////
		$(document).on('click','.updatereg', function (e){
			e.preventDefault();
			
			 var register_id=$('.editid').val();
			 console.log(register_id,'register_id');
			 var data = {
				'name' :$('#editname').val(),
				'email' :$('#editemail').val(),
				'mobile' :$('#editmobile').val(),
				'password' :$('#editpwd').val(),
			}
			
			$.ajax({
				type:'PUT',
				url:'/registupdate/'+ register_id,
				data:$('#editUser').serialize(),
				dataType:"json",
				success:function(response) {
					console.log(response,'response');
					console.log(11111111);
					//console.log(response);
					if(response.status == 400){
						$('#updateform_errList').html("");
						$('#updateform_errList').addClass("alert alert-danger");
						$.each(response.errors, function (key,err_values){
							$('#updateform_errList').append('<li>'+err_values+'</li>')
						});
					
						
					}else if(response.status == 404){
						$('#updateform_errList').html("");
						$('#succes_message').addClass("alert alert-success")
						$('#succes_message').text(response.message)
					

					}else{

						$('#updateform_errList').html("");
						$('#succes_message').html("");
						$('#succes_message').addClass("alert alert-success")
						$('#succes_message').text(response.message)

						$('#editStudentModel').modal('hide');
						
						fetchregister();
				
					}
					
				}
			});
		
			console.log(data,'error');
		});
		
		//////////open delete model ///////////
		$(document).on('click','.delete', function (e){
			e.preventDefault();
			
			 var reg_id=$(this).val();
				console.log (reg_id);
				//alert(reg_id);
				$('#deletetStudentModel').modal('show');
				$('#deletetid').val(reg_id);

				

		});
		
		////////// delete code ///////////
		$(document).on('click','.deletemodel', function (e){
			e.preventDefault();

			var deleteid=$('#deletetid').val();
			console.log(deleteid,'dddddddd');

			
			$.ajax({
				headers: {
          			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         		 },
				type:'DELETE',
				url:'/registerdelete/'+ deleteid,
				dataType:'json',
				success:function(response) {
					console.log(response);
					if(response.status == 404)
					{
						alert(response.message);
						$('#deletetStudentModel').modal('hide');
					}
					else if(response.status == 200)
					{
						
						fetchregister();
						alert(response.message);
						$('#deletetStudentModel').modal('hide');
					}
					
				}
			});		
			console.log(deleteid,'bbbbbbbbb')

		});
		///////////insert code/////////////
		$('#btnsubmit').click(function(){
		console.log("click");
		
		
	
		$.ajax({
			
			url:'{{route("register.store")}} ',
			data:$('#registerForm').serialize(),
			type:'post',
			dataType:"JSON",	
			success:function(result) { 
				if(result.success){
					console.log(result.message);
					$('#btnsubmit').attr('type','submit');
					$('.messageShow').html(result.message);
				}else{
					alert(result.message);
				}
				fetchregister();
				
			},error: function (jqXHR, exception) {
				var msg = '';
				if (jqXHR.status === 0) {
					msg = 'Not connect.\n Verify Network.';
				} else if (jqXHR.status == 404) {
					msg = 'Requested page not found. [404]';
				} else if (jqXHR.status == 500) {
					msg = 'Internal Server Error [500].';
				} else if (exception === 'parsererror') {
				} else if (jqXHR.status == 422) {
					var responce = jqXHR.responseText;
					console.log('responce');
					console.log(responce);
					console.log(jqXHR);
					console.log(responce.message);
					console.log(responce['message']);
					//alert(responce.message);
					msg = 'all field is required';
				} else if (exception === 'parsererror') {
					msg = 'Requested JSON parse failed.';
				} else if (exception === 'timeout') {
					msg = 'Time out error.';
				} else if (exception === 'abort') {
					msg = 'Ajax request aborted.';
				} else {
					msg = 'Uncaught Error mansi.\n' + jqXHR.responseText;
				}
				$('.messageShow').html(msg);
			},
		});
	});
		/////////////////////////////////////////

	});
	

		
</script>
	
@endsection
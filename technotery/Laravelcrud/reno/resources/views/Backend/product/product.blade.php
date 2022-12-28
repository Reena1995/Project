@extends('Backend.Partial.master')
@section('content')
<!-- <h3>riya</h3> -->

		{{--<div class="typo-agile">
		        <h2 class="w3ls_head">Product</h2>
            
			
			<form id="product-form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-xl-6">
											
					<div class="row">
						
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											
												<input type="text" placeholder="Product Name" value="{{old('name')}}" class="form-control" name="name">
												@if ($errors->has('name'))
												<span class="error">{{ $errors->first('name') }}</span>
												@endif					
											</div>

											<div class="form-group">
											
													<textarea name="description" rows="4" value="{{old('description')}}" placeholder="Description" class="form-control"></textarea>
													@if ($errors->has('description'))
													<span class="error">{{ $errors->first('description') }}</span>
													@endif					
											</div>
											<div class="form-group">
											
												single image<input type="file" class="" value="{{old('image')}}"name ="image" placeholder="image " >	
												@if ($errors->has('image'))
													<span class="error">{{ $errors->first('image') }}</span>
													@endif	
																	
											</div>
										</div>
										<div class="col-md-6">
										<div class="form-group">
											
													
											<input type="text" placeholder="Quantity" value="{{old('quantity')}}" class="form-control" name="quantity">
											@if ($errors->has('quantity'))
													<span class="error">{{ $errors->first('quantity') }}</span>
													@endif	
																
										</div>
											<div class="form-group">
											
													
												<input type="text" placeholder="ActualPrice" value="{{old('actualprice')}}" class="form-control" name="actualprice">
												@if ($errors->has('actualprice'))
													<span class="error">{{ $errors->first('actualprice') }}</span>
													@endif					
											</div>
											<div class="form-group">
											
													
												<input type="text" placeholder="DiscountPrice" value="{{old('discountprice')}}" class="form-control" name="discountprice">
												@if ($errors->has('discountprice'))
													<span class="error">{{ $errors->first('discountprice') }}</span>
													@endif						
											</div>

											<div class="form-group">
											
												<select class="select" value="{{old('category_id')}}" name="category_id">
													<option value="">Select Category</option>
													@foreach($categories as $category)
														<option value="{{$category->id}}">{{$category->name}} </option>
													@endforeach
									
												</select>
												@if ($errors->has('category_id'))
													<span class="error">{{ $errors->first('category_id') }}</span>
													@endif	
												
																	
											</div>
											<div class="form-group">
											
												Multiple image image<input type="file" class="" value="{{old('multiimage')}}"name ="multiimage[]" placeholder="image " multiple>	
												@if ($errors->has('multiimage'))
													<span class="error">{{ $errors->first('multiimage') }}</span>
												@endif	
																	
											</div>
										</div>
									</div>
								</div>
					</div>								
												
				</div>

			</div>	
					<input type="submit" value="submit" name="submit" id="" >									
										
			</form>
			
		</div>--}}
		/////////////////////////////////////////////////////////////////
		<div class="typo-agile">
			<form id="product-form" action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
			@csrf
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">Product</h2>
							</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Name</label>
								<div class="form-outline">
									<input type="text" id="form3Example1" name="name"  value="{{old('name')}}" class="form-control" />
									@if ($errors->has('name'))
        								<span class="error">{{ $errors->first('name') }}</span>
       								@endif
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Select Category</label>
								<div class="form-outline">
									
									<select class="select" value="{{old('category_id')}}" name="category_id">
													<option value="">Select Category</option>
													@foreach($categories as $category)
														<option value="{{$category->id}}">{{$category->name}} </option>
													@endforeach
									
									</select>
												@if ($errors->has('category_id'))
													<span class="error">{{ $errors->first('category_id') }}</span>
													@endif	

								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Description</label>
								<div class="form-outline">
										<textarea name="description" rows="3" value="{{old('description')}}" placeholder="Description" class="form-control"> </textarea>
											@if ($errors->has('description'))
													<span class="error">{{ $errors->first('description') }}</span>
											@endif	
								</div>
								
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Single Image</label>
								<div class="form-outline">
									<input type="file" class="" value="{{old('image')}}"name ="image" placeholder="image " >	
												@if ($errors->has('image'))
													<span class="error">{{ $errors->first('image') }}</span>
													@endif	
								</div>
							</div>
							
						</div>
						<div class="col-lg-6">
							
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Quantity</label>
								<div class="form-outline">
											
									<input type="text" placeholder="" value="{{old('quantity')}}" class="form-control" name="quantity">
											@if ($errors->has('quantity'))
													<span class="error">{{ $errors->first('quantity') }}</span>
													@endif
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Actual Price</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{old('actualprice')}}" class="form-control" name="actualprice">
												@if ($errors->has('actualprice'))
													<span class="error">{{ $errors->first('actualprice') }}</span>
													@endif	
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">DiscountPrice</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{old('discountprice')}}" class="form-control" name="discountprice">
												@if ($errors->has('discountprice'))
													<span class="error">{{ $errors->first('discountprice') }}</span>
													@endif		
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Multiple Image</label>
								<div class="form-outline">
									<input type="file" class="" value="{{old('multiimage')}}"name ="multiimage[]" placeholder="image " multiple>	
												@if ($errors->has('multiimage'))
													<span class="error">{{ $errors->first('multiimage') }}</span>
												@endif	
								</div>
							</div>
							
						</div>
						<div class="col-lg-12">
							<div class="submit-btn-main">
								<button type="submit" class="btn btn-primary btn-block mb-4"   value="submit" name="submit" id="btnsubmit">Sign up</button>
							</div>

						</div>
				</div>		

			</form>
		</div>

@endsection
@section('script')
<script>
		$(document).ready(function () {
			console.log("callesd");
			$('#product-form').validate({ // initialize the plugin
				rules: {
					name: {
						required: true
					},
					category_id: {
						required: true
					},
					description: {
						required: true
					},
					actualprice: {
						required: true
					},
					quantity: {
						required: true
					},
					image: {
						required: true
					},
					multiimage: {
						required: true
					},
					discountprice: {
						required: true
					}
				},
				messages:{
					name:{
						required:"name is reuired"
					},
					category_id:{
						required:"category   is reuired"
					},
					description: {
						required: "description   is reuired"
					},
					actualprice: {
						required: "actualprice   is reuired"
					},
					quantity: {
						required: "quantity  is reuired"
					},
					image: {
						required: "image   is reuired"
					},
					multiimage: {
						required:  "multiple image  is reuired"
					},
					discountprice: {
						required: "discountprice  is reuired"
					}
				}
			});

		});
</script>

@endsection


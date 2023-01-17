@extends('Backend.Partial.master')
@section('content')
<!-- <h3>riya</h3> -->
		{{--<div class="typo-agile">
		        <h2 class="w3ls_head">Product</h2>
				
			<form id="product-form" action="{{route('product.update',$product->uuid)}}" method="post" enctype="multipart/form-data">
            @csrf
			<label class="productlabel">Category</label>
			<select class="select" value="" name="category_id">
				<option value="">Select Category</option>
				@foreach($categories as $category)
					@if($category->id == $product->category_id)
					<option value="{{$category->id}}" selected>{{$category->name}} </option>
					@else
					<option value="{{$category->id}}">{{$category->name}} </option>
					@endif
				@endforeach
							
			</select>
			
				@if ($errors->has('category_id'))
        		<span class="error">{{ $errors->first('category_id') }}</span>
       			@endif
				<br>
				<label class="productlabel">Product Name</label>
				<input type="text" class="ggg" value="{{$product->name}}" name ="name" placeholder="" >
				@if ($errors->has('name'))
        		<span class="error">{{ $errors->first('name') }}</span>
       			@endif
			<br>
				<label class="productlabel">Description5555</label>
				<textarea name="" id="" cols="30" rows="4">{{$product->proDetail->description}}</textarea>
			<br>
			<label class="productlabel">ActualPrice</label>
				<input type="text" class="ggg" value="{{$product->proDetail->actualprice}}" name ="actualprice" placeholder="" >
			<br>
			<label class="productlabel">Qauntity</label>
			<input type="text" placeholder="Quantity" value="{{$product->proDetail->quantity}}" class="ggg" name="quantity">
			<br>
			<label class="productlabel">DiscountPrice</label>
			<input type="text" placeholder="DiscountPrice" value="{{$product->proDetail->discountprice}}" class="ggg" name="discountprice">
			<br>
			<label class="productlabel">Image</label>
			<input type="file" class="ggg" name="image"  placeholder="image " required="">	
            <img src="{{asset('Upload/Product/'.$product->IsFeaturedImage[0]->image)}}" height="100px" width="100px"> 
			<br>
			<br>
			<label class="productlabel">MultipleImage</label>
			
			<input type="file" class="ggg" name="multiimage[]" placeholder="image " required="">	
			@foreach($product->GalleryImage as $image)
				<img src="{{asset('Upload/Product/'.$image->image)}}" height="50px" width="50px">
				<br>
			@endforeach

			<input type="submit" value="submit" name="submit" id=""  class="btn btn-primary" >
		    </form>
		</div>--}}
		////////////////////////////////////////////////////////////////////////////
		<div class="typo-agile">
			<form id="editproduct_from" action="{{route('product.update',$product->uuid)}}" method="post" enctype="multipart/form-data">
			@csrf
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">Edit Product</h2>
							</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Name</label>
								<div class="form-outline">
									<input type="text" id="form3Example1" name="name"   value="{{$product->name}}" class="form-control" />
									@if ($errors->has('name'))
        								<span class="error">{{ $errors->first('name') }}</span>
       								@endif
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Select Category</label>
								<div class="form-outline">
									
									<select class="form-control" value="" name="category_id" disable>
										<option value="">Select Category</option>
										@foreach($categories as $category)
											@if($category->id == $product->category_id)
												<option value="{{$category->id}}" selected>{{$category->name}} </option>
											@else
											<option value="{{$category->id}}">{{$category->name}} </option>
											@endif
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
										<textarea name="description" rows="3"  placeholder="Description" class="form-control">{{$product->proDetail->description}} </textarea>
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
									<img src="{{asset('Upload/Product/'.$product->IsFeaturedImage[0]->image)}}" height="100px" width="100px"> 
							
						</div>
						<div class="col-lg-6 ">
							
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Quantity</label>
								<div class="form-outline">
											
									<input type="text" placeholder="" value="{{$product->proDetail->quantity}}" class="form-control" name="quantity">
											@if ($errors->has('quantity'))
													<span class="error">{{ $errors->first('quantity') }}</span>
													@endif
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Actual Price</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{$product->proDetail->actualprice}}" class="form-control" name="actualprice">
												@if ($errors->has('actualprice'))
													<span class="error">{{ $errors->first('actualprice') }}</span>
													@endif	
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">DiscountPrice</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{$product->proDetail->discountprice}}" class="form-control" name="discountprice">
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
								<div class="rightmain">
									@foreach($product->GalleryImage as $image)
										<span id="imgWrap{{$image->uuid}}">
											<img src="{{asset('Upload/Product/'.$image->image)}}" height="100px" width="100px" id="editimageid" name="image"style="br">
											<i class="fa fa-trash overlay" id="trash" aria-hidden="true" data-id="{{$image->uuid}}"></i>
										</span>
									@endforeach	
								</div>	
						</div>
						<div class="col-lg-12">
							<div class="submit-btn-main">
								<button type="submit" class="btn btn-primary btn-block mb-4"   value="submit" name="submit" id="btnsubmit">Update</button>
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
					
					discountprice: {
						required: "discountprice  is reuired"
					}
				}
			});

		});

		/////////////////////////image active status change/////////////////
		$(document).on('click','.overlay', function (e){
			e.preventDefault();
			console.log('SDVsdfbvd');
			// var image_id=$(this).attr('data-id');
			var image_id=$(this).data('id');
			console.log(image_id,'image find id');
			

			$.ajax({
				headers: {
          			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         		 },
				type:'POST',
				dataType:'JSON',
				url:'/update-image-status' ,
				data:{
					'id':image_id,
					'status':'0'
				},
				dataType:"json",
				success:function(response) {
					$('#imgWrap'+image_id).html('');
					console.log(response,'response');
					console.log(xxxxx);
				}
			});
		})
		

</script>
@endsection



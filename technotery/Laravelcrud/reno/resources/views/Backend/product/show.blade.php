@extends('Backend.Partial.master')
@section('content')
<!-- <h3>riya</h3> -->
{{--<div class="typo-agile">
		        <h2 class="w3ls_head">Product</h2>
            <form id="product-form" action="{{route('product.show',$product->uuid)}}" method="post" enctype="multipart/form-data">
            @csrf
			<label class="productlabel">Category</label>
			<select class="select" value="" name="category_id" disable>
				<option value="">Select Category</option>
				@foreach($categories as $category)
					@if($category->id == $product->category_id)
					<option value="{{$category->id}}" selected>{{$category->name}} </option>
					@else
					<option value="{{$category->id}}">{{$category->name}} </option>
					@endif
				@endforeach
							
			</select>
			
				
        		
				<br>
				<label class="productlabel">Product Name</label>
				<input type="text" class="ggg" value="{{$product->name}}" name ="name" placeholder="" >
				
			<br>
			
		    </form>
</div> --}}
/////////////////////////////////////////////////////////////////////////////////
<div class="typo-agile">
			<form  id="product-form" action="{{route('product.show',$product->uuid)}}" method="post" enctype="multipart/form-data">
			@csrf
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">Product</h2>
							</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Name</label>
								<div class="form-outline">
									<input type="text" id="form3Example1" name="name"   value="{{$product->name}}" class="form-control" readonly />
									
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Select Category</label>
								<div class="form-outline">
									
									<select class="form-control " value="" name="category_id" disabled>
										<option value="">Select Category</option>
										@foreach($categories as $category)
											@if($category->id == $product->category_id)
												<option value="{{$category->id}}" selected>{{$category->name}} </option>
											@else
											<option value="{{$category->id}}">{{$category->name}} </option>
											@endif
										@endforeach
								
									</select>
										

								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Description</label>
								<div class="form-outline">
										<textarea name="description" rows="3"  placeholder="Description" class="form-control" readonly>{{$product->proDetail->description}} </textarea>
												
								</div>
								
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Single Image</label>
								
								
							</div>
									<img src="{{asset('Upload/Product/'.$product->IsFeaturedImage[0]->image)}}" height="100px" width="100px"> 
							
						</div>
						<div class="col-lg-6">
							
							<div class="input-main">
								<label class="form-label" for="form3Example1">Product Quantity</label>
								<div class="form-outline">
											
									<input type="text" placeholder="" value="{{$product->proDetail->quantity}}" class="form-control" name="quantity" readonly>
										
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Actual Price</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{$product->proDetail->actualprice}}" class="form-control" name="actualprice" readonly>
													
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">DiscountPrice</label>
								<div class="form-outline">
								<input type="text" placeholder="" value="{{$product->proDetail->discountprice}}" class="form-control" name="discountprice" readonly>
													
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Multiple Image</label>
												
							</div>
									@foreach($product->GalleryImage as $image)
										<img src="{{asset('Upload/Product/'.$image->image)}}" height="100px" width="100px" style="br">
										
									@endforeach	
						</div>
						
				</div>		

			</form>
		</div>
@endsection



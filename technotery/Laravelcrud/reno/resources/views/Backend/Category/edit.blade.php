@extends('Backend.Partial.master')
@section('content')

		

		
		<div class="typo-agile">
			<form id="category_form" action="{{route('category.update',$category->uuid)}}" method="post" enctype="multipart/form-data">
			@csrf
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">Category</h2>
							</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Category Name</label>
								<div class="form-outline">
									<input type="text" id="form3Example1" name="name" value="{{$category->name}}" class="form-control" />
									@if ($errors->has('name'))
        								<span class="error">{{ $errors->first('name') }}</span>
       								@endif
								</div>
							</div>
							
						</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Image</label>
								<div class="form-outline">
									<input type="file" id="form3Example1" name ="image" value="{{asset('Upload/Category/'.$category->image)}}" class="form-control" />
									
									@if ($errors->has('image'))
            							<span class="error">{{ $errors->first('image') }}</span>
       								@endif
								</div>
								
							</div>
							
									<img src="{{asset('Upload/Category/'.$category->image)}}" height="100px" width="100px">
									 
						</div>
						<div class="col-lg-12">
							<div class="update-btn-main">
								<button type="submit" class="btn btn-primary btn-block mb-4"   value="update" name="submit" id="btnsubmit">Update</button>
							</div>

						</div>
				</div>		

			</form>
		</div>
@endsection



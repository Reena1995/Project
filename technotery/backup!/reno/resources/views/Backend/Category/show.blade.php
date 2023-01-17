@extends('Backend.Partial.master')
@section('content')

	{{--	<div class="typo-agile">
		        <h2 class="w3ls_head">Category</h2>
            <form action="{{route('category.store',$category->uuid)}}" method="post" enctype="multipart/form-data">
            @csrf
			<input type="text" class="ggg" name="name" value="{{$category->name}}"  placeholder="Category NAME" required="" readonly>
			<!-- <input type="file" class="ggg" name="image"  value="{{asset('Upload/Category/'.$category->image)}}" placeholder="image " required="" readonly>	 -->
            <img src="{{asset('Upload/Category/'.$category->image)}}" height="100px" width="100px"> 
			<!-- <input type="submit" value="Update" name="submit"> -->
		    </form>
		</div>--}}

		
		<div class="typo-agile">
			<form id="category_form" action="{{route('category.store',$category->uuid)}}" method="post" enctype="multipart/form-data">
				@csrf
  				<div class="row">
							<div class="col-12">
								<h2 class="w3ls_head">show Category</h2>
							</div>
						<div class="col-lg-6">
							<div class="input-main">
								<label class="form-label" for="form3Example1">Category Name</label>
								<div class="form-outline">
									<input type="text" id="form3Example1" name="name" value="{{$category->name}}" class="form-control" readonly />
									
								</div>
							</div>
							<br>
							<div class="input-main">
								<label class="form-label" for="form3Example1">Image</label>
								<div class="form-outline">
									<img src="{{asset('Upload/Category/'.$category->image)}}" height="130px" width="130px">
									
									
								</div>
								
							</div>
						</div>
						<div class="col-lg-6">   </div>
							
								
									 
						
						
				</div>		

			</form>
		</div>
@endsection



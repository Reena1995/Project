@extends('admin.common.master')
@section('content')
<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Edit Department</h3>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 m-b-30">
                            <!--card begins-->
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <div class="card-title">Edit Department Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Department Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form name="form" action="{{route('department.update',$department->uuid)}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20"></h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Department Name</label>
                                                        <input type="text" id="name" name="name" value="{{$department->name}}" class="form-control form-control-lg" placeholder="Enter department" />
                                                        @if ($errors->has('name'))
        								                    <span class="errr-validation">{{ $errors->first('name') }}</span>
       								                    @endif
                                                    </div>           
                                                </div>
                                            </div>
                                            <div class="card-footer p-t-20 text-right">
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <a href="{{route('department.index')}}" class="theme-btn-outline text-white">
                                                        cancel
                                                    </a>
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button type="submit"  value="submit" name="submit"class="theme-btn text-white">Save</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                              
                            </div>
                            <!--card ends-->
                        </div>
                    </div>
                </div>
                <!-- END PLACE PAGE CONTENT HERE -->
            </section>
        
       	@endsection
 @push('scripts')
    <script>
         $(document).ready(function(){
            $("form[name='form']").validate({
                rules : {
                    name : {
                        required:true,
                        lettersonly:true
                    },                    
                },
                messages : {
                    name : "Please enter a department name",
                    
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
        });
    </script>      
 @endpush

@extends('admin.common.master')
@section('content')
<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Edit Designation</h3>
                        </div>
                        <div class="col-6 m-b-20 text-right pl-3 small-button">
                            <a href="all-employees.html"><button type="button" class="btn text-white add-new-emp">View Employee</button></a>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-18px mdi-email-open-outline"></i></button>
                                <button type="button" class="btn btn-secondary ml-2"><i class="mdi mdi-18px mdi-phone"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 m-b-30">
                            <!--card begins-->
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <div class="card-title">Edit Designation  Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Designation Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form name="form" action="{{route('designation.update',$designation->uuid)}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Designation Name</label>
                                                        <input type="text" id="name" name="name" value="{{$designation->name}}" class="form-control form-control-lg" placeholder="Enter First Name" />
                                                        @if ($errors->has('name'))
        								                    <span class="errr-validation">{{ $errors->first('name') }}</span>
       								                    @endif
                                                    </div>
                                                    <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                                        <label>Select Deaprtment</label>
                                                        <select class="form-control" name="department_id"  id="department_id">
                                                            <option selected value="">Choose...</option>
                                                            @foreach($department as $dept)
                                                                @if($dept->id == $designation->department_id)
                                                                    <option value="{{$dept->id}}" selected>{{$dept->name}} </option>
                                                                @else    
                                                                    <option value="{{$dept->id}}">{{$dept->name}} </option>
                                                                @endif    
													        @endforeach
                                                        </select>
                                                        @if ($errors->has('department_id'))
        								                    <span class="errr-validation">{{ $errors->first('department_id') }}</span>
       								                    @endif
                                                    </div>

                                                   
                                                </div>
                                            </div>
                                            <div class="card-footer p-t-20 text-right">
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button class="theme-btn-outline text-white">canel</button>
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button type="submit"  value="submit" name="submit"class="theme-btn text-white">Update</button>
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
                    name : "required",  
                    department_id : "required",                    
                },
                messages : {
                    name : "Please enter a designation name",
                    department_id : "Please select department ",  
                    
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
        });
    </script>      
 @endpush

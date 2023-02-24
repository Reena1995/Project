@extends('admin.common.master')
@section('content')
<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Add Asset Sub Type</h3>
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
                                    <div class="card-title">Add Asset Sub Type Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Asset Sub Type Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form name="form" action="{{route('asset_sub_type.add')}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group floating-label ">
                                                                <label>Asset Sub Type </label>
                                                                <input type="text" id="type" name="type" class="form-control form-control-lg" placeholder="Enter asset_sub_type" />
                                                                @if ($errors->has('type'))
                                                                    <span class="errr-validation">{{ $errors->first('type') }}</span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                                            <div class="form-group floating-label show-label ">
                                                                <label>Select Asset Type</label>
                                                                <select class="form-control" name="asset_type_id"  id="asset_type_id">
                                                                    <option selected value="">Choose...</option>
                                                                    @foreach($asstype as $ass)
                                                                        <option value="{{$ass->id}}">{{$ass->type}} </option>
                                                                    @endforeach
                                                                </select>
                                                                @if ($errors->has('asset_type_id'))
                                                                    <span class="errr-validation">{{ $errors->first('asset_type_id') }}</span>
                                                                @endif
                                                            </div>
                                                        <div>
                                                        <div class="card-footer p-t-20 text-right">
                                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                                <a href="{{route('asset_sub_type.index')}}" class="theme-btn-outline text-white">
                                                                    cancel
                                                                </a>
                                                            </div>
                                                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                                <button type="submit"  value="send" name="submit"class="theme-btn text-white">Save</button>
                                                            </div>
                                                        </div>
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
                    type : {
                        required:true,
                        lettersonly:true
                    }, 
                    asset_type_id  : "required",                     
                },
                messages : {
                    type : "Please enter asset sub type name",
                    asset_type_id  : "Please select asset_sub type ",  
                    
                },
                errorClass: "custom-error",
                errorElement: "div",
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(element).append(error)
                    } else {
                        console.log(element.prev());
                        error.insertAfter(element);
                    }
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
        });
    </script>      
 @endpush

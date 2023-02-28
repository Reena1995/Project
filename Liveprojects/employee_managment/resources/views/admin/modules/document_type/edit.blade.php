@extends('admin.common.master')
@section('content')
<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Edit  Document Type</h3>
                        </div>
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 m-b-30">
                            <!--card begins-->
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <div class="card-title">Edit Document Type Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true"> Document Type Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form name="form" action="{{route('document_type.update',$doctype->uuid)}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20"></h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Language  Name</label>
                                                        <input type="text" id="type" name="type" value="{{$doctype->type}}" class="form-control form-control-lg"  />
                                                        @if ($errors->has('type'))
        								                    <span class="errr-validation">{{ $errors->first('type') }}</span>
       								                    @endif
                                                    </div>
                                                   
                            
                                                </div>
                                            </div>
                                            <div class="card-footer p-t-20 text-right">
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <a href="{{route('document_type.index')}}" class="theme-btn-outline text-white">
                                                        cancel
                                                    </a>
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
                    type : "required",                    
                },
                messages : {
                    type : "Please enter a document type",
                    
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
        });
    </script>      
 @endpush

@extends('admin.common.master')
@section('content')
<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Show Asset Sub Type</h3>
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
                                    <div class="card-title">Show Asset Sub Type Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Asset Sub Type Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form id="designation_form" action="" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Asset sub type </label>
                                                        <input type="text" id="type" name="type" value="{{$ass_sub_type->type}}" class="form-control form-control-lg" readonly />
                                                    </div>
                                                   
                                                    <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                                        <label>Select Asset Type</label>
                                                       
                                                        <select class="form-control" name="asset_type_id"  id="asset_type_id" disabled>
                                                            <option value="{{$ass_sub_type->ass_type->id ?? 0}}">{{$ass_sub_type->ass_type->type ?? ''}}</option>  
                                                        </select>
                                                    </div>
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
                                <!-- <div class="card-footer p-t-20 text-right">
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                        <button class="theme-btn-outline text-white">canel</button>
                                    </div>
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                        <button type="submit"  value="submit" name="submit"class="theme-btn text-white">Save</button>
                                    </div>
                                </div> -->
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
        
    </script>      
 @endpush

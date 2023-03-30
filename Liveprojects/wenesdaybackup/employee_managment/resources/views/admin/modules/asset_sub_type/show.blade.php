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
                        
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 m-b-30">
                            <!--card begins-->
                            <div class="card m-b-30 add-cards" >
                                <div class="card-header">
                                    <div class="card-title">Add Asset Sub Type Details</div>
                                </div>
                                <form id="asset_sub_type_show" action="" name="asset_sub_type_show_form" method="post" enctype="multipart/form-data">
                                    @csrf  
                                    <div class="card-body">    
                                        <div class="form-row row">
                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>Asset Sub Type</label>
                                                <input type="text" id="asset_sub_type_name" name="asset_sub_type_name"   value="{{$ass_sub_type->type}}" class="form-control form-control-lg" placeholder="Enter asset_sub_type" readonly/>
                                              
                                            </div>
                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>Asset Type</label>
                                                <input type="text" id="asset_type_id" name="asset_type_id" value="{{ $ass_sub_type->ass_type->type ?? ''}}"  class="form-control form-control-lg"  readonly/>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="card-footer p-t-20 text-right">
                                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                        <a href="{{route('asset_sub_type.index')}}" class="theme-btn text-white">cancel
                                                            </a>
                                                    </div>
                                            
                                    </div>
                                </form>
                            </div>
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
@extends('admin.common.master')
@section('content')

        <section class="admin-content">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <!--  container or container-fluid as per your need           -->
            <div class="container-fluid p-t-20">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 m-b-20">
                        <h3>Asset Sub Type</h3>
                    </div>
                   
                </div>
                
                <div class="row">
                    <div class="col-lg-12 m-b-30">
                        <!--card begins-->
                        <div class="card m-b-0">
                            <div class="card-header">
                                <div class="card-title">Asset Sub Type List</div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                            id="listholiday">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0 w-5">No</th>
                                                    <th class="border-bottom-0 w-5">Asset Type</th>
                                                    <th class="border-bottom-0 w-5">Asset Sub Type</th>
                                                    <th class="border-bottom-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($ass_sub_type as $asubtype)
                                                <tr>
                                                    <td>{{$asubtype->id}}</td>
                                                    <td>{{$asubtype->ass_type->type}}</td>
                                                    <td>{{$asubtype->type}}</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-icon btn-sm text-white" href="{{route('asset_sub_type.show',$asubtype->uuid)}}" >
                                                            <i class="mdi mdi-eye" data-toggle="tooltip" data-original-title="view"></i>
                                                        </a>
                                                       
                                                        <a class="btn btn-primary btn-icon btn-sm text-white" href="{{route('asset_sub_type.edit',$asubtype->uuid)}}" >
                                                            <i class="mdi mdi-pen" data-toggle="tooltip"
                                                                data-original-title="Edit"></i>
                                                        </a>
                                                        <a class="btn btn-danger btn-icon btn-sm text-white" href="{{route('asset_sub_type.status',$asubtype->uuid)}}" 
                                                            data-toggle="tooltip" data-original-title="Delete"><i
                                                                class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card ends-->
                    </div>
                </div>
            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
        </section>
    </main>
    <!-- Holiday Modal -->
    <div class="modal fade" id="holidaymodal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Holidays</h5>
                    <button class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group floating-label col-12">
                        <label>Select Date</label>
                        <input type="text" class="form-control form-control-lg theme-date-picker" placeholder="Select Date" />
                    </div>
                    <div class="form-group floating-label col-12">
                        <label>Enter Occasion</label>
                        <input type="text" class="form-control form-control-lg" placeholder="Enter Enter Occasion" />
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="theme-btn-modal-outline" data-dismiss="modal">Close</button>
                    <button class="theme-btn-modal">Add Holiday</button>
                </div>
            </div>
        </div>
    </div>
   @endsection
   @push('scripts')
    <script>
	/*page own css start*/
        $(document).ready(function () {
            $("#listholiday").DataTable();
            $(".dropdown-select2").select2();
            $(".theme-date-picker").datepicker();
        });
	/*page own css end*/	
		
    </script>
	 
	@endpush


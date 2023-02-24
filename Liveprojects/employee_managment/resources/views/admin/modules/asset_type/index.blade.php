@extends('admin.common.master')
@section('content')

        <section class="admin-content">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <!--  container or container-fluid as per your need           -->
            <div class="container-fluid p-t-20">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 m-b-20">
                        <h3>Asset Types</h3>
                    </div>
                   
                </div>
                
                <div class="row">
                    <div class="col-lg-12 m-b-30">
                        <!--card begins-->
                        <div class="card m-b-0">
                            <div class="card-header">
                                <div class="card-title">Asset Types List</div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table  table-vcenter text-nowrap table-bordered border-bottom"
                                            id="listholiday">
                                            <thead>
                                                <tr>
                                                    <th class="border-bottom-0 w-5">No</th>
                                                    <th class="border-bottom-0 w-5">Asset Types</th>
                                                    <th class="border-bottom-0">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @if(!empty($asstype) && $asstype->count())
                                                @foreach($asstype as  $index => $type)
                                                    <tr>
                                                        <td>{{$asstype->firstItem() + $index}}</td>
                                                        <td>{{$type->type}}</td>
                                                        <td>
                                                            <a class="btn btn-primary btn-icon btn-sm text-white" href="{{route('asset_type.show',$type->uuid)}}" >
                                                                <i class="mdi mdi-eye" data-toggle="tooltip" data-original-title="view"></i>
                                                            </a>
                                                        
                                                            <a class="btn btn-primary btn-icon btn-sm text-white" href="{{route('asset_type.edit',$type->uuid)}}" >
                                                                <i class="mdi mdi-pen" data-toggle="tooltip"
                                                                    data-original-title="Edit"></i>
                                                            </a>
                                                            <a class="btn btn-danger btn-icon btn-sm text-white" href="{{route('asset_type.status',$type->uuid)}}" 
                                                                data-toggle="tooltip" data-original-title="Delete"><i
                                                                    class="mdi mdi-delete"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                            @else
                                                    <tr>
                                                        <td colspan="3" class="emptydata">There is no Data</td>
                                                    </tr>        
                                            @endif    
                                            </tbody>
                                        </table>
                                        <div class="row align-items-center">
                                            <div class="col-6">showing {{$asstype->firstItem()}} - {{$asstype->lastitem()}} of  {{$asstype->total()}}</div>
                                            <div class="col-6">
                                                <div class="custom-pagination">
                                                            {{$asstype->links()}}
                                                </div>
                                            </div>   
                                        </div>
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
    
   @endsection
   @push('scripts')
    <script>
	/*page own css start*/
        // $(document).ready(function () {
        //     $("#listholiday").DataTable();
        //     $(".dropdown-select2").select2();
        //     $(".theme-date-picker").datepicker();
        // });
	/*page own css end*/	
		
    </script>
	 
	@endpush


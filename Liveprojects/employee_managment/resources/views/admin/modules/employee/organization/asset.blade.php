

<form  id="emp_asset_deatil_add"  name="emp_asset_deatil_add" action="{{route('organization.asset.add')}}"  method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">

            <div id="assetformId">
                @if(count($emp_asset_details))
                    @foreach($emp_asset_details as $asset)
                        <div class="card education mt-3 assetadd">
                
                            <div class="card-body " >
            
                                    <div class="form-row">
                                
                                        <input type="hidden" name="asset_uuid[]" value="{{ $asset->uuid }}">

                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Asset brand</label>
                                            <select class="form-control" name="asset_brand_id[]">
                                            @foreach($asset_brand as $brand)
                                                    <option value="{{$brand->id}}"{{ $asset->asset_brand_id  == $brand->id ? 'selected' : '' }}>{{$brand->name}} </option>

                                            @endforeach
                                            </select>
                                            @if ($errors->has('asset_brand_id[]'))
                                                <span class="errr-validation">{{ $errors->first('asset_brand_id[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Asset Sub Type Brand</label>
                                            <select class="form-control" name="asset_sub_type_id[]">
                                                @foreach($asset_sub_type as $sub)
                        
                                                    <option value="{{$sub->id}}" {{ $asset->asset_sub_type_id == $sub->id ? 'selected' : '' }}>{{$sub->type}} </option>

                                                @endforeach
                                            </select>
                                            @if ($errors->has('asset_sub_type_id[]'))
                                                <span class="errr-validation">{{ $errors->first('asset_sub_type_id[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Serial No</label>
                                            <input type="text" value = "{{ $asset->serial_no }}" name="serial_no[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('serial_no[]'))
                                                    <span class="errr-validation">{{ $errors->first('serial_no[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Purchased Date</label>
                                            <input type="date" value = "{{ $asset->purchased_dn }}" name="purchased_dn[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('purchased_dn[]'))
                                                    <span class="errr-validation">{{ $errors->first('purchased_dn[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Purchased From</label>
                                            <input type="text" value = "{{ $asset->purchased_from }}" name="purchased_from[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('purchased_from[]'))
                                                    <span class="errr-validation">{{ $errors->first('purchased_from[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Warranty Period</label>
                                            <input type="text" value = "{{ $asset->warranty_period }}" name="warranty_period[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('warranty_period[]'))
                                                    <span class="errr-validation">{{ $errors->first('warranty_period[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Organization Asset Code</label>
                                            <input type="text" value = "{{ $asset->organization_asset_code }}" name="organization_asset_code[]" class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('organization_asset_code[]'))
                                                    <span class="errr-validation">{{ $errors->first('organization_asset_code[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Invoice No</label>
                                            <input type="text" value = "{{ $asset->invoice_no }}" name="invoice_no[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('invoice_no[]'))
                                                    <span class="errr-validation">{{ $errors->first('invoice_no[]') }}</span>
                                            @endif
                                        </div>

                                       

                                        
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            @if(empty($asset))
                                            <lable >Asset Image</lable>
                                            <input type="file" name="asset_image[]" class=" form-control form-control-lg">
                                            @else
                                            <lable >Result</lable>
                                            <input type="file" name="asset_image[]" class=" form-control form-control-lg">
                                            <div class="imageset mt-4 m-4">
                                                    <img src="{{asset('console/upload/employee/assetimage/'.$asset->asset_image)}}" height="120px" width="100px"> 
                                            </div>   
                                            @endif
                                        </div>

                                        @if ($errors->has('asset_image[]'))
                                                <span class="errr-validation">{{ $errors->first('asset_image[]') }}</span>
                                         @endif

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        
                                        </div>

                                    
                                    </div> 
                            </div>   
                        </div>
                    @endforeach

                @else 

                    <div class="card education mt-3 assetadd educationDetails" id="">
            
                        <div class="card-body " >
        
                                <div class="form-row">
                            
                               
                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Asset brand</label>
                                            <select class="form-control" name="asset_brand_id[]">
                                            @foreach($asset_brand as $brand)
                                                    <option value="{{$brand->id}}">{{$brand->name}} </option>

                                            @endforeach
                                            </select>
                                            @if ($errors->has('asset_brand_id[]'))
                                                <span class="errr-validation">{{ $errors->first('asset_brand_id[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Asset Sub Type Brand</label>
                                            <select class="form-control" name="asset_sub_type_id[]">
                                                @foreach($asset_sub_type as $sub)
                        
                                                    <option value="{{$sub->id}}">{{$sub->type}} </option>

                                                @endforeach
                                            </select>
                                            @if ($errors->has('asset_sub_type_id[]'))
                                                <span class="errr-validation">{{ $errors->first('asset_sub_type_id[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Serial No</label>
                                            <input type="text" value = "" name="serial_no[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('serial_no[]'))
                                                    <span class="errr-validation">{{ $errors->first('serial_no[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Purchased Date</label>
                                            <input type="date" value = "" name="purchased_dn[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('purchased_dn[]'))
                                                    <span class="errr-validation">{{ $errors->first('purchased_dn[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Purchased From</label>
                                            <input type="text" value = "" name="purchased_from[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('purchased_from[]'))
                                                    <span class="errr-validation">{{ $errors->first('purchased_from[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Warranty Period</label>
                                            <input type="text" value = "" name="warranty_period[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('warranty_period[]'))
                                                    <span class="errr-validation">{{ $errors->first('warranty_period[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Organization Asset Code</label>
                                            <input type="text" value = "" name="organization_asset_code[]" class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('organization_asset_code[]'))
                                                    <span class="errr-validation">{{ $errors->first('organization_asset_code[]') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>Invoice No</label>
                                            <input type="text" value = "" name="invoice_no[]"class="form-control form-control-lg" placeholder="Enter University Name">
                                            @if ($errors->has('invoice_no[]'))
                                                    <span class="errr-validation">{{ $errors->first('invoice_no[]') }}</span>
                                            @endif
                                        </div>

                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        <lable>Asset Image</lable>
                                        <input type="file" name="asset_image[]" class=" form-control form-control-lg">
                                    </div>
                                    @if ($errors->has('asset_image[]'))
                                            <span class="errr-validation">{{ $errors->first('asset_image[]') }}</span>
                                    @endif


                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        
                                    </div> 

                                    <div>
                                        <button type="button" class="btn btn-danger d-none delete">delete</button> 
                                    </div>

                                </div> 
                        </div>   
                    </div>
                @endif     
            </div>
            
            <div class="mt-2"><button type="button" id="addd" class="btn btn-default pull-left  btn btn-primary mt-2 ">Add</button><br></div>

            <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-3" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit"   class="theme-btn text-white">Save</button>
                    </div>
            </div>     


        </form>

   


@push('scripts')
 <script>
    $(document).ready(function () {

        $("#addd").click(function () { 

            console.log('adddddddd')

            var defaultHtmlAppend = $('.assetadd').last().clone();
            var rowIndex = $('.assetadd').length;  
            console.log(defaultHtmlAppend.find('.education'));

            defaultHtmlAppend.find('input[name]').each(function(){
                var name = $(this).attr('name');
		    	$(this).attr('name',name).val('');
                $(this).parents('.assetadd').find('.imageset').remove();
                                    
                $(this).parents('.assetadd').append('');
		    }); 
          //  defaultHtmlAppend.hasClass('.assetadd').addClass('education_detail_'+rowIndex);
          defaultHtmlAppend.attr('id','educationDetail-'+rowIndex);

            defaultHtmlAppend.find('.btn-danger').removeClass('d-none').attr('data-id',rowIndex);
            $('#assetformId').append(defaultHtmlAppend);
        });

        $(document).delegate('.delete','click',function () { 
            var id = $(this).attr('data-id');

            $('#educationDetail-'+id).remove();
            
        });
          

    });
 </script>   
@endpush    
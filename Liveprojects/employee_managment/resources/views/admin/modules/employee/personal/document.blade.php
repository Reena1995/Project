<form id="document_deatil_add" name="document_deatil_add"  action="{{route('personal.document.add')}}"  method="post" enctype="multipart/form-data">
 @csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
            
                @if(count($documenttype))
                    @foreach($documenttype as $doc)
                    <div class="form-row">
                        
                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                            <label>Document Type</label>
                            <input type="text" name="type[]"  value ="{{$doc->id}}"  placeholder="new" class="form-control form-control-lg"  readonly>
                           
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
                            <div class="custom-file">
                            <!-- <label class="custom-file-label" for="inputGroupFile02">Upload Document</label> -->
<!-- 
                            @if(empty($emp_document_detail))
                                <input type="file" data-key="doc_image"  name="documents[]"  tabindex="" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                                
                                
                                @if ($errors->has('documents[]'))
                                    {{ $errors->first('documents[]') }}
                                @endif
                            
                            @else
                                    <input type="file" name="documents[]" tabindex=""  class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                                    
                                    
                                      
                                     
                                    <div class="imageset mt-4 m-4">
                                        <img src="{{asset('console/upload/employee/document/'.$emp_document_detail->file)}}" height="120px" width="100px"> 
                                    </div>  
                                    @if ($errors->has('documents[]'))
                                        <span class="errr-validation">{{ $errors->first('documents[]') }}</span>
                                    @endif  
                            @endif     -->
            

                                <input type="file" data-key="doc_image" name="documents[]" class="" id="inputGroupFile02" >
                                @if ($errors->has('documents[]'))
                                    <span class="errr-validation">{{ $errors->first('documents[]') }}</span>
                                @endif
                            </div>
                        </div> 
                    </div>     
                    @endforeach
                @endif     
                  
                
            
        
                <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-3" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="button"  id="doctBtn" class="theme-btn text-white">Save</button>
                    </div>
                </div>  
               

           
</form> 
    
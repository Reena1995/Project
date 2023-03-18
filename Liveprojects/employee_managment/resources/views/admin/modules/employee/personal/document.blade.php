<form  name="document_deatil_add"  action="{{route('personal.document.add')}}"  method="post" enctype="multipart/form-data">
 @csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
            
                @if(count($documenttype))
                    @foreach($documenttype as $doc)
                       
                    <div class="form-row">
                         @foreach($empDocumentDetails as $empdoc)
                           <input type="hidden" name="document_uuid[]" value="{{ $empDocumentDetails->$empdoc }}">
                        @endforeach
                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                            <label>Document Type</label>
                            <input type="text" name="type[]"  value ="{{$doc->type}}" class="form-control form-control-lg"  readonly>
                           
                        </div>

                        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
                            <div class="custom-file">
                                <label class="custom-file-label" for="inputGroupFile02">Upload Document</label>
                        
                                <input type="file" name="file[]" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                                @if ($errors->has('type[]'))
                                    <span class="errr-validation">{{ $errors->first('type[]') }}</span>
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
                        <button type="submit"   class="theme-btn text-white">Save</button>
                    </div>
                </div>  
               

           
</form> 
    


<form  name="education_deatil_add" id="education_deatil_add" action="{{route('personal.education.add')}}"  method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
            <div id="formId">
                @if(count($educationDetails))
                    @foreach($educationDetails as $educationDetail)
                        <div class="card education mt-3 eduremove">
                
                            <div class="card-body " >
            
                                    <div class="form-row">
                                          
                                        <input type="hidden" name="education_uuid[]" value="{{ $educationDetail->uuid }}">
                                        <div class="col-lg-6 col-md-6 col-sm-12 align-items-center">
                                            <div class="form-group floating-label show-label ">
                                                <label>Medium</label>
                                                <select class="form-control employee_medium" name="medium[]" tabindex="1">
                                                    @foreach($medium as $me)
                                                            <option value="{{$me->id}}"{{ $educationDetail->medium_instruction_id  == $me->id ? 'selected' : '' }}>{{$me->name}} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Education Level</label>
                                            <select class="form-control employee_education" name="education[]"  tabindex="2"  >
                                                @foreach($educationlevel as $edu)

                        
                                                <option value="{{$edu->id}}" {{ $educationDetail->education_level_id == $edu->id ? 'selected' : '' }}>{{$edu->name}} </option>

                                                @endforeach
                                            </select>
                                            
                                            @if ($errors->has('education[]'))
                                                <span class="errr-validation">{{ $errors->first('education[]') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        <label>universityname</label>
                                            <input type="text"  tabindex="3"  value = "{{ $educationDetail->university_name }}"  name="universityname[]" class="form-control form-control-lg employee_university" placeholder="Enter University Name">
                                        </div>

                                        
                                            @if ($errors->has('universityname[]'))
                                                <span class="errr-validation">{{ $errors->first('universityname[]') }}</span>
                                            @endif
                                        
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <label>percentage</label>
                                            <input type="text"  tabindex="4"  name="percentage[]"  value = "{{ $educationDetail->percentage }}" class="form-control form-control-lg employee_percentage" placeholder="Enter your Percentage">
                                            <span class="education_level"></span>
                                        </div>
                                        
                                        @if ($errors->has('percentage[]'))
                                                <span class="errr-validation">{{ $errors->first('percentage[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        <label>specialization</label>
                                            <input type="text"  tabindex="5"  name="specialization[]" value = "{{ $educationDetail->specilaization }}" class="form-control form-control-lg" placeholder="Enter your Specialization">
                                        </div>
                                        @if ($errors->has('specialization[]'))
                                                <span class="errr-validation">{{ $errors->first('specialization[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        <label>passingyear</label>
                                            <input type="text"  tabindex="6" name="passingyear[]" value = "{{ $educationDetail->passing_year }}"class=" form-control form-control-lg" placeholder="Enter your Passing Year">
                                        </div>
                                        @if ($errors->has('passingyear[]'))
                                                <span class="errr-validation">{{ $errors->first('passingyear[]') }}</span>
                                            @endif
                                        <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                            @if(empty($educationDetail))
                                            <lable >Result</lable>
                                            <input type="file"  tabindex="7"  name="result[]" class=" form-control form-control-lg">
                                            @else
                                            <lable >Result</lable>
                                            <input type="file" name="result[]"  tabindex="7"  class=" form-control form-control-lg">
                                            <div class="imageset mt-4 m-4">
                                                    <img src="{{asset('console/upload/employee/education/'.$educationDetail->result)}}" height="120px" width="100px"> 
                                            </div>   
                                            @endif
                                        </div>

                                        @if ($errors->has('result[]'))
                                                <span class="errr-validation">{{ $errors->first('result[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        
                                        </div>

                                    
                                    </div> 
                            </div>   
                        </div>
                    @endforeach
                @else 
                    @if(session()->getOldinput())
                            @foreach(session()->getOldinput()['universityname'] as $index => $value)
                            <div class="card education mt-3 eduremove educationDetails" id="">
                                <div class="card-body " >
                                    <h3>backend validation</h3>
                                    <div class="form-row">
                                            <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                                <label>Medium</label>
                                                <select class="form-control" name="{{ 'medium[]' }}">
                                                    @foreach($medium as $me)
                                                            <option value="{{$me->id}}">{{$me->name}} </option>
                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                                <label>Education Level</label>
                                                <select class="form-control" name="{{ 'education[]' }}">
                                                    @foreach($educationlevel as $edu)

                                                        <option value="{{$edu->id}}">{{$edu->name}} </option>

                                                    @endforeach
                                                </select>
                                                
                                            </div>

                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>Universityname</label>
                                                <input type="text" name="{{ 'universityname[]' }}"  value = "{{ old('universityname.'.$index) }}"  class="form-control form-control-lg" placeholder="Select Date Of Birth">
                                                @error('universityname.'.$index)
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>percentage</label>
                                                <input type="text" name="{{ 'percentage[]' }}"  value = "{{ old('percentage.'.$index) }}"  class="form-control form-control-lg" placeholder="Select Date Of Birth">
                                                @error('percentage.'.$index)
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>specialization</label>
                                                <input type="text" name="{{ 'specialization[]' }}"  value = "{{ old('specialization.'.$index) }}"  class="form-control form-control-lg" placeholder="Select Date Of Birth">
                                                @error('specialization.'.$index)
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <label>passingyear</label>
                                                <input type="text" name="{{ 'passingyear[]' }}"  value = "{{ old('passingyear.'.$index) }}"  class="form-control form-control-lg" placeholder="Select Date Of Birth">
                                                @error('passingyear.'.$index)
                                                <span class="error">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                <lable>Result</lable>
                                                <input type="file" data-key="result" value="{{ old('result.'.$index) }}" name="{{ 'result[]' }}" class=" form-control form-control-lg">
                                            </div>
                                            @error('result.'.$index)
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>    

                                </div>   
                            </div>
                            @endforeach 
                    @else
                        <div class="card education mt-3 eduremove educationDetails" id="">
            
                            <div class="card-body " >
                            <h3>First Page</h3>
                                    <div class="form-row">
                                
                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Medium</label>
                                            <select class="form-control employee_medium" name="medium[]">
                                            @foreach($medium as $me) 
                                                    <option value="{{$me->id}}">{{$me->name}} </option>
                                            @endforeach
                                            </select>
                                        
                                        </div>
                                        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                            <label>Education Level</label>
                                            <select class="form-control" name="education[]">
                                                @foreach($educationlevel as $edu)

                        
                                                <option value="{{$edu->id}}">{{$edu->name}} </option>

                                                @endforeach
                                            </select>

                                            @if ($errors->has('education[]'))
                                                <span class="errr-validation">{{ $errors->first('education[]') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <input type="text" name="universityname[]"class="form-control form-control-lg universityname" placeholder="Enter University Name">
                                        </div>
                                        @if ($errors->has('universityname[]'))
                                                <span class="errr-validation">{{ $errors->first('universityname[]') }}</span>
                                        @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                        
                                            <input type="text" name="percentage[]"class="form-control form-control-lg" placeholder="Enter your Percentage">
                                        </div>
                                        @if ($errors->has('percentage[]'))
                                                <span class="errr-validation">{{ $errors->first('percentage[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            
                                            <input type="text" name="specialization[]" class="form-control form-control-lg" placeholder="Enter your Specialization">
                                        </div>
                                        @if ($errors->has('specialization[]'))
                                                <span class="errr-validation">{{ $errors->first('specialization[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            
                                            <input type="text" name="passingyear[]"class=" form-control form-control-lg" placeholder="Enter your Passing Year" >
                                        </div>
                                        @if ($errors->has('passingyear[]'))
                                                <span class="errr-validation">{{ $errors->first('passingyear[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            <lable>Result</lable>
                                            <input type="file" data-key="new_image" name="result[]" id="result_id"class="form-control form-control-lg" accept="image/png, image/gif, image/jpeg">
                                        </div>
                                        @if ($errors->has('result[]'))
                                                <span class="errr-validation">{{ $errors->first('result[]') }}</span>
                                            @endif
                                        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                            
                                        </div> 
                                        <div class="container removecard">
                                            <div class="row ">
                                                <button type="button" class="btn btn-danger d-none delete">delete</button> 
                                            </div>
                                        </div>
                                    
                                    </div> 
                            </div>   
                         </div>
                    @endif        
                    
                @endif     
            </div>
            
            <div class="mt-2"><button type="button" id="add" class="btn btn-default pull-left  btn btn-primary mt-2 ">Add</button><br></div>
            <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-3" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit"  id="educationDetailBtn"  class="theme-btn text-white">Save</button>
                    </div>
            </div>     


        </form>

   


@push('scripts')
 <script>
    $(document).ready(function () {
        $("#add").click(function () { 
            var defaultHtmlAppend = $('.eduremove').last().clone();
            var rowIndex = ($('.eduremove').length);
            var prevId =  (rowIndex - 1);  
            console.log(defaultHtmlAppend.find('.education'));
            defaultHtmlAppend.find('input[name]').each(function(){
                var name = $(this).attr('name');
		    	$(this).attr('name',name).val('');
                $(this).parents('.eduremove').find('.imageset').remove();
                $(this).attr('data-key',rowIndex);
                $(this).parents('.eduremove').append('');
		    }); 
            defaultHtmlAppend.find('input[type="file"]').each(function(){
                var name = $(this).attr('name');
		    	// $(this).attr('name',name).val('');
                // $(this).parents('.eduremove').find('.imageset').remove();
                $(this).attr('data-key','new_image');
                // $(this).parents('.eduremove').append('');
		    }); 
            defaultHtmlAppend.find('select[name]').each(function(){
                var name = $(this).attr('name');
		    	// $(this).attr('name',name).val(''); 
                $(this).attr('data-key','rowIndex');
                $(this).parents('.eduremove').append('');
		    }); 
            console.log('prevId :'+prevId);
           
           
            defaultHtmlAppend.attr('id','educationDetail-'+rowIndex);
            defaultHtmlAppend.find('.btn-danger').removeClass('d-none').attr('data-id',rowIndex);
            $('#formId').append(defaultHtmlAppend);
        });
        $(document).delegate('.delete','click',function () { 
            var id = $(this).attr('data-id');
            $('#educationDetail-'+id).remove();
            
        });
        
        
    /*validation Frontend jquery start*/
    });
 </script>  
 
 
@endpush    
<form id="personalDetailForm"  name="personal_deatil_add" action="{{route('personal.personaldetail.add')}}"  method="post" enctype="multipart/form-data">
    <div class="form-row">
        @csrf
        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Father Name </label>
            <input type="text" name="fathername"  value = "{{ (isset($personal_detail) ? $personal_detail->fathername :  old('fathername')) }}" class="form-control form-control-lg" placeholder="Enter Father Name">
            @if ($errors->has('fathername'))
                <span class="errr-validation">{{ $errors->first('fathername') }}</span>
            @endif
        </div>  
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Mother Name</label>
            <input type="text" name="mothername"  value = "{{ (isset($personal_detail) ? $personal_detail->mothername :  old('mothername')) }}" class="form-control form-control-lg" placeholder="Enter Mother Name">
            @if ($errors->has('mothername'))
                <span class="errr-validation">{{ $errors->first('mothername') }}</span>
            @endif
        </div>
            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Date Of Birth</label>
            <input type="date" name="dob"  value = "{{ (isset($personal_detail) ? $personal_detail->dob :  old('dob')) }}" class="form-control form-control-lg" placeholder="Select Date Of Birth">
            @if ($errors->has('dob'))
                <span class="errr-validation">{{ $errors->first('dob') }}</span>
            @endif
        </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 gender">
            <label class="">Gender</label>
            <div class="d-flex row ">
                <div class="custom-control custom-radio col-lg-2 col-md-4 col-6">
                    <input type="radio" name="gender" id="gender_male" value="Male" class="custom-control-input" @if((old('gender') == 'Male') || (isset($personal_detail) && ($personal_detail->gender == 'Male'))) checked @endif>
                    <label class="custom-control-label" for="gender_male">Male</label>
                </div>
                <div class="custom-control custom-radio col-lg-2 col-md-4 col-6">
                    <input type="radio"  name="gender" id="gender_female" value="Female"  class="custom-control-input" @if((old('gender') == 'Female') || (isset($personal_detail) && ($personal_detail->gender == 'Female'))) checked @endif>
                    <label class="custom-control-label" for="gender_female">Female</label>
                </div>
            </div>
            @if ($errors->has('gender'))
                <span class="errr-validation">{{ $errors->first('gender') }}</span>
            @endif
        </div>
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Blood Group</label>
            <input type="text" name="bloodgroup"  value = "{{ (isset($personal_detail) ? $personal_detail->blood_group :  old('bloodgroup')) }}"   class="form-control form-control-lg" placeholder="Enter Blood Group">
            @if ($errors->has('bloodgroup'))
                <span class="errr-validation">{{ $errors->first('bloodgroup') }}</span>
            @endif
        </div>
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Alternate Number</label>
            <input type="text" name="alternateno" value = "{{ (isset($personal_detail) ? $personal_detail->alternate_no :  old('alternateno')) }}" class="form-control form-control-lg" placeholder="Enter alternate  Number">
            @if ($errors->has('alternateno'))
                <span class="errr-validation">{{ $errors->first('alternateno') }}</span>
            @endif
        </div>
        
        
        
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>Marital Status </label>
            <select class="form-control" id="merriedstatus" value=""  name="marital_status">
                <!-- <option value= "" selected="">Choose...</option> -->
                <option value="single" {{ (isset($personal_detail) ? ($personal_detail->marital_status == 'single' ? 'selected' : '') :  old('marital_status') == 'single' ? 'selected' : '' ) }} >Single</option>
                <option value="married" {{ (isset($personal_detail) ? ($personal_detail->marital_status == 'married' ? 'selected' : '') :  old('marital_status') == 'married' ? 'selected' : '' ) }} >Married</option>
                <option value="divorce" {{ (isset($personal_detail) ? ($personal_detail->marital_status == 'divorce' ? 'selected' : '') :  old('marital_status') == 'divorce' ? 'selected' : '' ) }} >Divorce</option>
            </select>
            @if ($errors->has('marital_status'))
                <span class="errr-validation">{{ $errors->first('marital_status') }}</span>
            @endif
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
            <div class="custom-file">
                <label class="custom-file-label" for="inputGroupFile02">Choose Profile Image</label>
                @if(empty($personal_detail))
                <input type="file" name="image" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                
                <div class="file mt-2">
                    <span id="img-error" class="errr-validation">
                        @if ($errors->has('image'))
                            {{ $errors->first('image') }}
                         @endif
                    </span>
                </div>   
                @else
                    <input type="file" name="image" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                    
                    <div class="file mt-2">
                        @if ($errors->has('image'))
                        <span class="errr-validation">{{ $errors->first('image') }}</span>
                        @endif
                    </div>    
                    <div class="imageset mt-4 m-4">
                        <img src="{{asset('console/upload/employee/profileimage/'.$personal_detail->image)}}" height="120px" width="100px"> 
                    </div>    
                @endif    
                
            </div>
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>Current Residence Type</label>
            <select class="form-control"  name="residencetype">
            <option value="" selected="">Select Choose</option>
                @foreach($current_residency as $curr)

                  
                <option value="{{$curr->id}}" {{ (isset($personal_detail) ? ($personal_detail->current_residence_type_id == $curr->id ? 'selected' : '') :  old('residencetype') == $curr->id ? 'selected' : '' ) }}>{{$curr->type}}</option>

                @endforeach
            </select>
            @if ($errors->has('residencetype'))
                <span class="errr-validation">{{ $errors->first('residencetype') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>Mode Of Transportation</label>
            <select class="form-control" value="{{old('transportationmode')}}" name="transportationmode">
            <option value="" selected="">Select Choose</option>
                @foreach($mode_transportation as $mode)
                        <option value="{{$mode->id}}" {{ (isset($personal_detail) ? ($personal_detail->	mode_of_transportation_id  == $mode->id ? 'selected' : '') :  old('transportationmode') == $mode->id ? 'selected' : '' ) }}>{{$mode->type}}</option>
                    @endforeach
            </select>
            @if ($errors->has('transportationmode'))
                <span class="errr-validation">{{ $errors->first('transportationmode') }}</span>
            @endif
        </div>
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Details Of Disability</label>
            <textarea  class="form-control form-control-lg"  name="disabilitydtls" cols="30" placeholder="Enter Details Of disaility">
                {{ (isset($personal_detail) ? $personal_detail->details_of_disability :  old('disabilitydtls')) }}
            </textarea>
            @if ($errors->has('disabilitydtls'))
                <span class="errr-validation">{{ $errors->first('disabilitydtls') }}</span>
            @endif
        </div>
        
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Total Experience</label>
            <input type="number" name="totalexperience"  value = "{{ (isset($personal_detail) ? $personal_detail->total_of_experience :  old('totalexperience')) }}" value="{{old('totalexperience')}}" class="form-control form-control-lg" placeholder="Total Experience">
            @if ($errors->has('totalexperience'))
                <span class="errr-validation">{{ $errors->first('totalexperience') }}</span>
            @endif
        </div>
        
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label for="inputAddress">Current Address</label>
            <textarea  rows="6" name="current_address" class="form-control form-control-lg" id="inputAddress" placeholder="1234 Main St">
                  {{ (isset($personal_detail) ? $personal_detail->current_address :  old('current_address')) }}
            </textarea>
            @if ($errors->has('current_address'))
                <span class="errr-validation">{{ $errors->first('current_address') }}</span>
            @endif
        </div>
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label for="inputAddress2">Permanent Address</label>
            <textarea  rows="6" name="permanent_address"   class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                {{ (isset($personal_detail) ? $personal_detail->permanent_address :  old('permanent_address')) }}
            </textarea>
            @if ($errors->has('permanent_address'))
                <span class="errr-validation">{{ $errors->first('permanent_address') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>Country</label>
            <select class="form-control" id="current_country"  name="current_country">
                <option value="" selected="">Select Country</option>
                @foreach($country as $con)
                        <option value="{{$con->id}}" {{ (isset($personal_detail) ? ($personal_detail->current_country_id  == $con->id ? 'selected' : '') :  old('current_country') == $con->id ? 'selected' : '' ) }}>{{$con->name}}  </option>
                        
                    @endforeach
            </select>
            @if ($errors->has('current_country'))
                <span class="errr-validation">{{ $errors->first('current_country') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>Country </label>
            <select class="form-control" id="permanent_country" name="permanent_country">
                <option value="" selected="">Select Country</option>
                @foreach($country as $con)
                    <option value="{{$con->id}}" {{ (isset($personal_detail) ? ($personal_detail->permanent_country_id  == $con->id ? 'selected' : '') :  old('current_country') == $con->id ? 'selected' : '' ) }}>{{$con->name}}  </option>
                @endforeach
            </select>
            @if ($errors->has('permanent_country'))
                <span class="errr-validation">{{ $errors->first('permanent_country') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>State</label>
            <select class="form-control" value="" id="current_state"  name="current_state">
                
            </select>
            @if ($errors->has('current_state'))
                <span class="errr-validation">{{ $errors->first('current_state') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>State</label>
            <select class="form-control" id="permanent_state"  name="permanent_state" >
                
                
            </select>
            @if ($errors->has('permanent_state'))
                <span class="errr-validation">{{ $errors->first('permanent_state') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>City</label>
            <select class="form-control"  id="current_city"  name="current_city">
                
                
            </select>
            @if ($errors->has('current_city'))
                <span class="errr-validation">{{ $errors->first('current_city') }}</span>
            @endif
        </div>
        <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
            <label>City</label>
            <select class="form-control"id="permanent_city"  name="permanent_city">
                
                    
            </select>
            @if ($errors->has('permanent_city'))
                <span class="errr-validation">{{ $errors->first('permanent_city') }}</span>
            @endif
        </div>
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Pincode</label>
            <input type="text" name="current_pincode" value = "{{ (isset($personal_detail) ? $personal_detail->current_pincode :  old('current_pincode')) }}"  class="form-control form-control-lg" placeholder="Enter current pincode">
            @if ($errors->has('current_pincode'))
                <span class="errr-validation">{{ $errors->first('current_pincode') }}</span>
            @endif
        </div>
        
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Pincode</label>
            <input type="text" name="permanent_pincode" value = "{{ (isset($personal_detail) ? $personal_detail->permanent_pincode :  old('permanent_pincode')) }}"  class="form-control form-control-lg" placeholder="Enter permanant pincode">
            @if ($errors->has('permanent_pincode'))
                <span class="errr-validation">{{ $errors->first('permanent_pincode') }}</span>
            @endif
        </div>
        
        <div class="form-card-footer card-footer p-t-20 p-0 text-right">
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <a href="" >
                    <button class="theme-btn-outline">cancel</button>
                </a>
            </div>
            <div class="btn-group mr-2" role="group" aria-label="Second group">
                <button type="submit"  id="personalDetailBtn" value="submit" name="submit" class="theme-btn text-white">Save</button>
            </div>
        </div>        
    </div> 
</form>
@push('scripts')
 <script>
    $(document).ready(function () {
        /* date picker code start*/ 
        $(".theme-date-picker").datepicker();
        /* date picker code end*/ 

      
       
         /* country select than after state fetch  code start*/ 

            var curentState =  '{{ old("current_state") }}' ? '{{ old("current_state") }}' : '{{ $personal_detail->current_state_id ?? 0}}';
            var countryID = '{{ old("current_country") }}' ? '{{ old("current_country") }}' :'{{ $personal_detail->current_country_id ?? 0}}'; 
            console.log('countryID ::',countryID);
            console.log('curentState ::',curentState);
             
            getStates(countryID,'current_state',curentState);
            
            var permentState =  '{{ old("permanent_state") }}' ? '{{ old("permanent_state") }}' : '{{ $personal_detail->permanent_state_id ?? 0 }}';
            var countryID =  '{{ old("permanent_country") }}' ? '{{ old("permanent_country") }}' : '{{ $personal_detail->permanent_country_id ?? 0 }}';
             getStates(countryID,'permanent_state',permentState);


            function getStates(countryId,place,stateId = '0') {
                $.ajax({
                    url:"{{route('getstate')}}",
                    type: "GET",
                    data: {
                        cid: countryId
                    },
                    success: function(result) {
                        $.each(result.states, function (key, value) {
                            var selected = '';
                            if(stateId == value.id){
                                selected = 'selected'; 
                            }
                            $('#'+place).append('<option value="' + value.id + '" '+selected+'>' + value.name + '</option>');
                        });
                            
                    }
                });
            } 
            $('#current_country').on('change', function () {
                console.log('SDVsdvsdzv');
                var countryID = $(this).val();
                console.log(countryID);
                getStates(countryID,'current_state');
            });   
                
            $('#permanent_country').on('change', function () {
                console.log('SDVsdvsdzv');
                var countryID = $(this).val();
                console.log(countryID);
                getStates(countryID,'permanent_state');
            });  
                
         /* country select than after state fetch  code end */    
         
         /* state select than after city fetch  code start*/ 

            var curentCity ='{{ old("current_city") }}' ? '{{ old("current_city") }}' : '{{ $personal_detail->current_city_id ?? 0}}'; 
            var stateID = '{{ old("current_state") }}' ? '{{ old("current_state") }}' : '{{ $personal_detail->current_state_id  ?? 0}}'; 
           
            console.log('stateID ::',stateID);
            console.log('curentCity ::',curentCity);

            getCitys(stateID,'current_city',curentCity);


            
            var permentCity = '{{ old("permanent_city") }}' ? '{{ old("permanent_city") }}' : '{{ $personal_detail->permanent_city_id  ?? 0}}'; 
            var stateID = '{{ old("permanent_state") }}' ? '{{ old("permanent_state") }}' : '{{ $personal_detail->permanent_state_id ?? 0}}';  
            
            
            getCitys(stateID,'permanent_city',permentCity);


            function getCitys(stateID,place,cityId = '0') {
                $.ajax({
                    url:"{{route('getcity')}}",
                    type: "GET",
                    data: {
                        sid: stateID
                    },
                    success: function(result) {
                        $.each(result.cities, function (key, value) {
                            var selected = '';
                            if(cityId == value.id){
                                selected = 'selected'; 
                            }
                            $('#'+place).append('<option value="' + value.id + '" '+selected+'>' + value.name + '</option>');
                        });
                            
                    }
                });
            } 
            $('#current_state').on('change', function () {
                console.log('rreena');
                var stateID = $(this).val();
                console.log(stateID);
                getCitys(stateID,'current_city');
            });   
                
            $('#permanent_state').on('change', function () {
                console.log('rity');
                var stateID = $(this).val();
                console.log(stateID);
                getCitys(stateID,'permanent_city');
            });  
                
         /* state select than after city fetch  code end */ 

          /*validation Frontend jquery start*/
        //   var isEditImage = '{{ !empty($personal_detail) && ($personal_detail->image) }}' ? 2:1; 
       

        //     $(document).delegate('#personalDetailBtn','click',function(){
        //         isImageValidation() 
        //         formSubmit();  
        //     });
        //     function isImageValidation(){
        //          console.log('isEditImage :',isEditImage);
        //         var img = $('#inputGroupFile02').val();
        //         var html = '';
        //         console.log('img ::',img);
        //         if(img == '' && (isEditImage == 1)){
        //             html = 'Please select image';
        //             $('#img-error').html(html);
        //             return false;
        //         }   
        //         $('#img-error').html(html);
        //         console.log(img);
        //         console.log('Html ::    ',html);
        //         return true;
        //     }
        //     function formSubmit(){
        //         console.log('asd');
        //         $("#personalDetailForm").validate({
        //             rules : {
        //                 fathername : "required",  
        //                 mothername : "required", 
        //                 dob : "required",  
        //                 gender : "required",    
        //                 bloodgroup : "required",  
        //                 alternateno : { required : true,
        //                     number:true,
        //                     minlength:10,
        //                     maxlength:10
        //                 },    
        //                 marital_status : "required",  
        //                 //image :  {extension:'jpg|jpeg|png|ico|bmp'},    
        //                 residencetype : "required",     
        //                 transportationmode : "required",    
        //                 disabilitydtls : "required",  
        //                 totalexperience : "required",
        //                 current_address : "required",  
        //                 permanent_address : "required", 
        //                 current_country : "required",  
        //                 permanent_country : "required",    
        //                 current_state : "required",  
        //                 permanent_state : "required",    
        //                 current_city : "required",  
        //                 permanent_city : "required",    
        //                 current_pincode : {required: true,number:true},  
        //                 permanent_pincode : {required: true,number:true},    
                        
        //             },
        //             messages : {
        //                 fathername : "Please Enter a fathername ",
        //                 mothername : "Please Enter  a mothername ",
        //                 dob : "Please select a date of birth ",
        //                 gender : "Please Select  a gender ",
        //                 bloodgroup : "Please Enter a bloodgroup ",
        //                 alternateno : {
        //                     required : "Please enter a Mobile Number.",
        //                     number:'Please enter valid Number.',
        //                     minlength : "Please enter at least 10 digit Number.",
        //                     maxlength : "Please enter at least 10 digit Number.",
        //                 },
        //                 marital_status : "Please Select a marital status ",
        //                // image : {extension:"only jpg ,jpeg ,pdf"},
        //                 residencetype : "Please Select a residencetype ",
        //                 transportationmode : "Please Select  a transportationmode ",
        //                 disabilitydtls : "Please Enter a disability details ",
        //                 totalexperience : "Please Enter a totalexperience ",  
        //                 current_address : "Please Enter a Address ",
        //                 permanent_address : "Please Enter  a Address ",
        //                 current_country : "Please Select a Country ",
        //                 permanent_country : "Please Select  a Country ",
        //                 current_state : "Please Select a State ",
        //                 permanent_state : "Please Select  a State ",
        //                 current_city : "Please Select  a City",
        //                 permanent_city : "Please Select  a City",
        //                 current_pincode :  {required: "Please Enter a pincode",number:"Please enter numbers Only"},
        //                 permanent_pincode :  {required: "Please Enter a pincode",number:"Please enter numbers Only"},
        //             },
        //             errorClass: "custom-error",
        //             errorElement: "span",
        //             errorPlacement: function(error, element) {
        //                 var placement = $(element).data('error');
        //                 console.log(element.attr("type"),'placement');
        //                 if((element.attr("type") == 'radio')){                       
        //                     $(element).parents('.gender').append(error)
        //                 }else if (element.attr("type") == 'file') {
        //                     $('.file').append(error)
        //                 } else {
        //                     error.insertAfter(element);
        //                 }
        //             },
        //             submitHandler : function(form){
        //                 if(!isImageValidation()){
        //                     return false;
        //                 }else{
        //                     form.submit();
        //                 }
        //             }
        //         });
        //     }

         /*validation Frontend jquery start*/

         
         
         /* state select than after city fetch  mansi code start*/
        

            // function citys(stateId,place) {
            //     console.log('state')
            //     $.ajax({
            //         url:"{{route('getcity')}}",
            //         type: "GET",
            //         data: {
            //             sid: stateId
            //         },
            //         success: function(result) {
            //                 $('#'+place).html('<option value="{{old('value.name')}}">Select City</option>');
            //                 $.each(result.cities, function (key, value) {
            //                     $('#'+place).append('<option value="' + value.id + '">' + value.name + '</option>');
            //                 });
                            
            //         }
            //     });
            // }

            // $('#current_state').on('change', function () {
            //         console.log('xxxxxx');
            //         var stateID = $(this).val();
            //         console.log(stateID);
            //         citys(stateID,'current_city');
            // });   

            // $('#permanent_state').on('change', function () {
            //     console.log('yyyyyyy');
            //     var stateID = $(this).val();
            //     console.log(stateID);
            //     citys(stateID,'permanent_city');
            // });  
         /* state select than after city fetch mansi code end*/

       

    });

</script>
 @endpush   
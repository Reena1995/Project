
<form id="employmentform"  name="employmentform" action="{{route('organization.employment.add')}}"  method="post" enctype="multipart/form-data">
    <div class="form-row">
        @csrf

        <input type="hidden" name="user_id" value="{{$emp->uuid}}">

        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Date Of Joining</label>
            <input type="date" name="date_of_joining"  value = "{{ (isset($employment_detail) ? $employment_detail->date_of_joining :  old('date_of_joining')) }}" class="form-control form-control-lg" placeholder="Enter Father Name">
            @if ($errors->has('date_of_joining'))
                <span class="errr-validation">{{ $errors->first('date_of_joining') }}</span>
            @endif
        </div>  
       
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Date Of Resigning</label>
            <input type="date" name="date_of_resigning"  value = "{{ (isset($employment_detail) ? $employment_detail->date_of_resigning :  old('date_of_resigning')) }}" class="form-control form-control-lg" placeholder="Select Date Of Birth">
            @if ($errors->has('date_of_resigning'))
                <span class="errr-validation">{{ $errors->first('date_of_resigning') }}</span>
            @endif
        </div>

        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Date Of Leaving</label>
            <input type="date" name="date_of_leaving"  value = "{{ (isset($employment_detail) ? $employment_detail->date_of_leaving :  old('date_of_leaving')) }}" class="form-control form-control-lg" placeholder="Select Date Of Birth">
            @if ($errors->has('date_of_leaving'))
                <span class="errr-validation">{{ $errors->first('date_of_leaving') }}</span>
            @endif
        </div>
       
        <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
            <label>Reason For Leaving</label>
            <textarea  class="form-control form-control-lg"  name="reason_for_leaving"  cols="30" placeholder="Enter Details Of reason for_ eaving">
                {{ (isset($employment_detail) ? $employment_detail->reason_for_leaving : old('reason_for_leaving')) }}
            </textarea>
            @if ($errors->has('reason_for_leaving'))
                <span class="errr-validation">{{ $errors->first('reason_for_leaving') }}</span>
            @endif
        </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12 ">
            <div class="custom-file">
                <label class="custom-file-label" for="inputGroupFile02">Ressign Letter</label>
                @if(empty($employment_detail))
                <input type="file" name="resign_letter_pdf" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                
                <div class="file mt-2">
                    <span id="img-error" class="errr-validation">
                        @if ($errors->has('resign_letter_pdf'))
                            {{ $errors->first('resign_letter_pdf') }}
                            @endif
                            </span>
                </div>   
                @else
                    <input type="file" name="resign_letter_pdf" class="custom-file-input" id="inputGroupFile02" accept="image/png, image/gif, image/jpeg">
                    
                    <div class="file mt-2">
                        @if ($errors->has('resign_letter_pdf'))
                        <span class="errr-validation">{{ $errors->first('resign_letter_pdf') }}</span>
                        @endif
                    </div>    
                    <div class="imageset mt-4 m-4">
                        <img src="{{asset('console/upload/employee/resignletter/'.$employment_detail->resign_letter_pdf)}}" height="120px" width="100px"> 
                    </div>    
                @endif    
                
            </div>
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
 <!-- <script>
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
          var isEditImage = '{{ !empty($personal_detail) && ($personal_detail->image) }}' ? 2:1; 
       

            $(document).delegate('#personalDetailBtn','click',function(){
                isImageValidation() 
                formSubmit();  
            });
            function isImageValidation(){
                 console.log('isEditImage :',isEditImage);
                var img = $('#inputGroupFile02').val();
                var html = '';
                console.log('img ::',img);
                if(img == '' && (isEditImage == 1)){
                    html = 'Please select image';
                    return false;
                }
                console.log(html);
                $('#img-error').html(html);
                return true;
            }
            function formSubmit(){
                console.log('asd');
                $("#personalDetailForm").validate({
                    rules : {
                        fathername : "required",  
                        mothername : "required", 
                        dob : "required",  
                        gender : "required",    
                        bloodgroup : "required",  
                        alternateno : { required : true,
                            number:true,
                            minlength:10,
                            maxlength:10
                        },    
                        marital_status : "required",  
                        //image :  {extension:'jpg|jpeg|png|ico|bmp'},    
                        residencetype : "required",     
                        transportationmode : "required",    
                        disabilitydtls : "required",  
                        totalexperience : "required",
                        current_address : "required",  
                        permanent_address : "required", 
                        current_country : "required",  
                        permanent_country : "required",    
                        current_state : "required",  
                        permanent_state : "required",    
                        current_city : "required",  
                        permanent_city : "required",    
                        current_pincode : {required: true,number:true},  
                        permanent_pincode : {required: true,number:true},    
                        
                    },
                    messages : {
                        fathername : "Please Enter a fathername ",
                        mothername : "Please Enter  a mothername ",
                        dob : "Please select a date of birth ",
                        gender : "Please Select  a gender ",
                        bloodgroup : "Please Enter a bloodgroup ",
                        alternateno : {
                            required : "Please enter a Mobile Number.",
                            number:'Please enter valid Number.',
                            minlength : "Please enter at least 10 digit Number.",
                            maxlength : "Please enter at least 10 digit Number.",
                        },
                        marital_status : "Please Select a marital status ",
                       // image : {extension:"only jpg ,jpeg ,pdf"},
                        residencetype : "Please Select a residencetype ",
                        transportationmode : "Please Select  a transportationmode ",
                        disabilitydtls : "Please Enter a disability details ",
                        totalexperience : "Please Enter a totalexperience ",  
                        current_address : "Please Enter a Address ",
                        permanent_address : "Please Enter  a Address ",
                        current_country : "Please Select a Country ",
                        permanent_country : "Please Select  a Country ",
                        current_state : "Please Select a State ",
                        permanent_state : "Please Select  a State ",
                        current_city : "Please Select  a City",
                        permanent_city : "Please Select  a City",
                        current_pincode :  {required: "Please Enter a pincode",number:"Please enter numbers Only"},
                        permanent_pincode :  {required: "Please Enter a pincode",number:"Please enter numbers Only"},
                    },
                    errorClass: "custom-error",
                    errorElement: "span",
                    errorPlacement: function(error, element) {
                        var placement = $(element).data('error');
                        console.log(element.attr("type"),'placement');
                        if((element.attr("type") == 'radio')){                       
                            $(element).parents('.gender').append(error)
                        }else if (element.attr("type") == 'file') {
                            $('.file').append(error)
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    submitHandler : function(form){
                        if(!isImageValidation()){
                            return false;
                        }else{
                            form.submit();
                        }
                    }
                });
            }

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

</script> -->
 @endpush   
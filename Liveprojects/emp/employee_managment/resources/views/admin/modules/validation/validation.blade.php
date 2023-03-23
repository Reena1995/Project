<script>

    /* employee register validation start */
       $(document).ready(function(){
            $("#employee_register").validate({
                rules : {
                    first_name : "required",  
                    last_name : "required",
                    company_mail : "required",  
                    mobile_no :  { required : true,
                            number:true,
                            minlength:10,
                            maxlength:10
                        }                  
                },
                messages : {
                    first_name : "Please Enter a First Name ",
                    last_name : "Please Enter  a Last Name ",
                    company_mail : "Please Enter an Email Id  ",
                    mobile_no : {
                            required : "Please enter a Mobile Number.",
                            number:'Please enter valid Number.',
                            minlength : "Please enter at least 10 digit Number.",
                            maxlength : "Please enter at least 10 digit Number.",
                        },
                },
                errorClass: "custom-error",
                errorElement: "div",
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(element).append(error)
                    } else {
                        console.log(element.prev());
                        error.insertAfter(element);
                    }
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
        });
        /* employee register validation start */
        
          /*personal deatils  Frontend validation start*/
          var isEditImage = '{{ !empty($personal_detail) && ($personal_detail->image) }}' ? 2:1; 
       
            $(document).delegate('#personalDetailBtn','click',function(){
                isImageValidation() 
                formSubmitPersonal();  
            });

            function isImageValidation(){
                 console.log('isEditImage :',isEditImage);
                var img = $('#inputGroupFile02').val();
                var html = '';
                console.log('img ::',img);
                if(img == '' && (isEditImage == 1)){
                    html = 'Please select image';
                    $('#img-error').html(html);
                    return false;
                }   
                $('#img-error').html(html);
                console.log(img);
                console.log('Html ::    ',html);
                return true;
            }
            function formSubmitPersonal(){
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
         /*personal deatils validation Frontend jquery */
         /* job profile validation start */
            
            $("#jobprofileform_id").validate({
                rules : {
                    company_employee_id : "required",  
                    company_emp_device_id : "required",
                    department_id  : "required", 
                    designation_id  : "required",
                    organization_role_id   : "required", 
           
                },
                messages : {
                    company_employee_id : "Please enter company employeeid",
                    company_emp_device_id : "Please enter company_emp_device_id",
                    department_id : "Please select department",
                    designation_id : "Please select designation",
                    organization_role_id : "Please select organization role id",
                   
                },
                errorClass: "custom-error",
                errorElement: "div",
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(element).append(error)
                    } else {
                        console.log(element.prev());
                        error.insertAfter(element);
                    }
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
         
         /* job profile validation end */
          /*bank deatils validation start */
            $("#bank_form_id").validate({
                rules : {
                    ac_holder_name	 : "required",  
                    bank_name : "required",
                    branch_name  : "required", 
                    account_no  : "required",
                    ifsc_code   : "required", 
           
                },
                messages : {
                    ac_holder_name	 : "Please enter ac holder name	",
                    bank_name : "Please enter 	bank name",
                    branch_name : "Please enter	branch name",
                    account_no : "Please enter account no",
                    ifsc_code : "Please enter ifsc code",
                   
                },
                errorClass: "custom-error",
                errorElement: "div",
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(element).append(error)
                    } else {
                        console.log(element.prev());
                        error.insertAfter(element);
                    }
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
          /*bank deatils validation end */
          /*employment deatils  validation start */
           
            var isEditResign = '{{ !empty($employment_detail) && ($employment_detail->resign_letter_pdf) }}' ? 2:1; 
       
            $(document).delegate('#employmentDetailBtn','click',function(){
                isResignValidation() 
                formSubmitEmployment();  
            });
            function isResignValidation(){
                 console.log('isEditResign :',isEditResign);
                var resign = $('#inputGroupFile9').val();
                var html1 = '';
                console.log('resign ::',resign);
               
                if(resign == '' && (isEditResign == 1)){
                    html = 'Please select resign pdf';
                    $('#resign-error').html(html);
                    return false;
                }   
                $('#resign-error').html(html1);
                console.log(resign);
                console.log('Html ::    ',html1);
                return true;
            }
            function formSubmitEmployment(){
                console.log('asd');
                $("#employmentform").validate({
                    rules : {
                         
                        date_of_joining	 : "required",  
                        date_of_resigning : "required",
                        date_of_leaving  : "required", 
                        reason_for_leaving  : "required"
                       
                    },
                    messages : {
                        date_of_joining	 : "Please select date of joining",
                        date_of_resigning : "Please select date of resigning",
                        date_of_leaving : "Please select date of leaving",
                        reason_for_leaving : "Please enter for leaving for reason"
                       
                       
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
          /*employment deatils  validation end */
           /*employee location histories validation start */
            $("#emp_location_id").validate({
                rules : {
                    company_location_id 	 : "required",  
                    company_location_type_id   : "required"
                   
           
                },
                messages : {
                    company_location_id 	 : "Please select company location",
                    company_location_type_id  : "Please select company location type",
                   
                 
                },
                errorClass: "custom-error",
                errorElement: "div",
                errorPlacement: function(error, element) {
                    var placement = $(element).data('error');
                    if (placement) {
                        $(element).append(error)
                    } else {
                        console.log(element.prev());
                        error.insertAfter(element);
                    }
                },
                submitHandler : function(form){
                    form.submit();
                }
            });
            /*employee location histories validation end */

            
             /*employee education validation start */

                $('#educationDetailBtn').on('click', function(event) {

                    event.preventDefault()
                    //Add validation rule for dynamically generated name fields
                    console.log('subbbbbbbbb');
                
                    $('#education_deatil_add :input').each(function(index,ele) {
                        console.log('xxxx');
                        var input = $(this);
                        // console.log(ele);
                        // console.log($(ele).val());
                        // console.log($(ele).val().length , 'condition');
                        
                        if($(ele).val().length === 0){

                            console.log('check');
                            if($(ele).attr('type') == 'text')
                            {
                                console.log('zzzzzzzzz');
                                $(ele).parents('.form-group').find('.error').remove();
                                ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                            }
                            if($(ele).attr('type') == 'file')
                            {
                                console.log('zzzzzzzzz');
                                if($(ele).attr('data-key') == 'new_image'){

                                    $(ele).parents('.form-group').find('.error').remove();
                                    ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                                }
                            }

                           

                        }
                        else
                        {
                            $(ele).parents('.form-group').find('.error').remove();
                        }
                       
                    });
                    $("#education_deatil_add").submit();
                   
                    return true;

                });
            /*employee education validation end */   

            /*employee document validation start */

                $(document).on('click','#educationDocumentBtn',function(){
                    // event.preventDefault()
                    //Add validation rule for dynamically generated name fields
                    console.log('subbbbbbbbb');

                    $('#document_deatil_add :input').each(function(index,ele) {
                        console.log('xxxx');
                        var input = $(this);
                        // console.log(ele);
                        console.log($(ele).val());
                        console.log($(ele).val().length , 'condition');
                        
                        if($(ele).val().length === 0){

                        
                            if($(ele).attr('type') == 'file')
                            {
                                console.log('zzzzzzzzz');
                                if($(ele).attr('data-key') == 'document_image'){

                                    $(ele).parents('.form-group').find('.error').remove();
                                    ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                                }
                            }

                        
                        }
                        else
                        {
                            $(ele).parents('.form-group').find('.error').remove();
                        }
                    
                    });
                    $("#document_deatil_add").submit();

                    return true;

                });
            /*employee education validation end */   


              /*asset details validation start*/ 

                // $(document).on('click','#assetbtn',function(event){
            
                //     event.preventDefault();
                   
                //    console.log('ascacfadCFA');
                    

                //     $('#emp_asset_deatil_add :input').each(function(index,ele) {
                //         console.log('xxxx');
                //         var input = $(this);
                //         // console.log(ele);
                //         // console.log($(ele).val());
                //         console.log($(ele).val().length , 'condition');
                        
                //         if($(ele).val().length === 0){

                //             console.log('check');
                //             if($(ele).attr('type') == 'text')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 $(ele).parents('.form-group').find('.error').remove();
                //                 $(ele).parents('.form-group').append('<p class="error">This field is required</p>');
                //                 // return false;
                                
                //             }
                //             if($(ele).attr('type') == 'file')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 if($(ele).attr('data-key') == 'image_fill'){

                //                     $(ele).parents('.form-group').find('.error').remove();
                //                     ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                //                     // return false;

                                    
                //                 }
                //             }
                //             if($(ele).attr('type') == 'date')
                //             {
                //                 $(ele).parents('.form-group').find('.error').remove();
                //                 ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                                
                //             }

                //         }
                //         else
                //         {
                //             $(ele).parents('.form-group').find('.error').remove();
                //         }
                    
                //     });
                   
                //     $("#emp_asset_deatil_add").submit();
                //     return true;
                    

                // });

              /*asset details validation end*/ 


              /* proessional details validation start*/

                // $('#educationProfBtn').on('click', function(event) {
                //     console.log('educationProfBtn');

                //     event.preventDefault()



                //     $('#emp_proessional_add :input').each(function(index,ele) {
                //         console.log('xxxx');
                //         var input = $(this);
                //         // console.log(ele);
                //         // console.log($(ele).val());
                //         // console.log($(ele).val().length , 'condition');
                        
                //         if($(ele).val().length === 0){

                //             console.log('check');
                //             if($(ele).attr('type') == 'text')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 $(ele).parents('.form-group').find('.error').remove();
                //                 ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                //             }
                //             if($(ele).attr('type') == 'textarea')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 $(ele).parents('.form-group').find('.error').remove();
                //                 ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                //             }
                //             if($(ele).attr('type') == 'date')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 $(ele).parents('.form-group').find('.error').remove();
                //                 ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                //             }
                //             if($(ele).attr('type') == 'file')
                //             {
                //                 console.log('zzzzzzzzz');
                //                 if($(ele).attr('data-key') == 'certificate_image'){

                //                     $(ele).parents('.form-group').find('.error').remove();
                //                     ($(ele).parents('.form-group').append('<p class="error">This field is required</p>'));
                                
                //                 }
                                
                //             }


                        

                //         }
                //         else
                //         {
                //             $(ele).parents('.form-group').find('.error').remove();
                //         }

                //     });
                //     $("#emp_proessional_add").submit();

                //     return true;

                // });

              /* proessional details validation end */

             


</script>  
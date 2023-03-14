@extends('admin.common.master')
@section('content')
<section class="admin-content edit-section">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20 edit-tab-section">
                    <div class="row d-flex align-items-baseline">
                        <div class="col-lg-3 col-md-4 col-sm-12 d-flex">
                            <div class="tab-form card">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-pills-personal-tab" data-toggle="pill" href="#v-pills-personal" role="tab" aria-controls="v-pills-personal" aria-selected="true">Personal Details</a>
                                    <a class="nav-link disabled" id="v-pills-organization-tab" data-toggle="pill" href="#v-pills-organization" role="tab" aria-controls="v-pills-organization" aria-selected="false">Organization Details</a>
                                    <a class="nav-link disabled" id="v-pills-professional-tab" data-toggle="pill" href="#v-pills-professional" role="tab" aria-controls="v-pills-professional" aria-selected="false">Professional Details</a>
                                    <a class="nav-link disabled" id="v-pills-contact-tab" data-toggle="pill" href="#v-pills-contact" role="tab" aria-controls="v-pills-contact" aria-selected="false">Contact Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-6 col-sm-12 d-flex">
                            <div class="tab-content card" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-personal" role="tabpanel" aria-labelledby="v-pills-personal-tab">
                                    <div class="card-body">
                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Personal Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled"  id="education-details-tab-z" data-toggle="tab" href="#education-details" role="tab" aria-controls="education-details" aria-selected="false">Education Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" id="document-details-tab-z" data-toggle="tab" href="#document-details" role="tab" aria-controls="document-details" aria-selected="false">Document Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link disabled" id="langauge-tab-z" data-toggle="tab" href="#langauge" role="tab" aria-controls="langauge" aria-selected="false">Langauge Details</a>
                                                </li>
                                                
                                            </ul>
                                            <form action="#">
                                                <div class="tab-content" id="myTabContent1">
                                                    <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                        @include('admin.modules.employee.personal_detail.personal')
                                                    </div>
                                                    <div class="tab-pane fade" id="education-details" role="tabpanel" aria-labelledby="education-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic2</h5>
                                                        @include('admin.modules.employee.personal_detail.education')
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="document-details" role="tabpanel" aria-labelledby="document-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                        @include('admin.modules.employee.personal_detail.document')
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="langauge" role="tabpanel" aria-labelledby="langauge-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Details</h5>
                                                        @include('admin.modules.employee.personal_detail.language')
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-organization" role="tabpanel" aria-labelledby="v-pills-organization-tab">
                                    <div class="card-body">
                                            <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="jobprofile-details-tab-z" data-toggle="tab" href="#jobprofile-details" role="tab" aria-controls="jobprofile-details" aria-selected="true">Job Profile Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="employment-details-tab-z" data-toggle="tab" href="#employment-details" role="tab" aria-controls="employment-details" aria-selected="false">Employement Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="asset-details-tab-z" data-toggle="tab" href="#asset-details" role="tab" aria-controls="asset-details" aria-selected="false">Asset  Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="location_detail-tab-z" data-toggle="tab" href="#location_detail" role="tab" aria-controls="location_detail" aria-selected="false">Location Details</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="bank-details-tab-z" data-toggle="tab" href="#bank-details" role="tab" aria-controls="bank-details" aria-selected="false">Bank Details</a>
                                                </li>
                                                
                                                
                                            </ul>
                                            <form action="#">
                                                <div class="tab-content" id="myTabContent1">
                                                    <div class="tab-pane fade show active" id="jobprofile-details" role="tabpanel" aria-labelledby="jobprofile-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic job</h5>
                                                        @include('admin.modules.employee.organization.job_profile')
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="employment-details" role="tabpanel" aria-labelledby="employment-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                        @include('admin.modules.employee.organization.employment')
                                                        
                                                    </div>
                                                    <div class="tab-pane fade" id="asset-details" role="tabpanel" aria-labelledby="asset-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Basic asset</h5>
                                                        @include('admin.modules.employee.organization.asset')
                                                    </div>
                                                    <div class="tab-pane fade" id="location_detail" role="tabpanel" aria-labelledby="location_detail-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">locationDetails</h5>
                                                        @include('admin.modules.employee.organization.location')
                                                    </div>
                                                    <div class="tab-pane fade" id="bank-details" role="tabpanel" aria-labelledby="bank-details-tab">
                                                        <h5 class="font-weight-semibold p-t-20 m-b-20">Bank Details</h5>
                                                        @include('admin.modules.employee.organization.bank')
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                               
                                <div class="tab-pane fade" id="v-pills-professional" role="tabpanel" aria-labelledby="v-pills-professional-tab">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="professional-details-tab-z" data-toggle="tab" href="#professional-details" role="tab" aria-controls="professional-details" aria-selected="true">Proessional  Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="workexperies-details-tab-z" data-toggle="tab" href="#workexperies-details" role="tab" aria-controls="workexperies-details" aria-selected="false">Work ExperienceDetails</a>
                                            </li>
                                        </ul>
                                        <form action="#">
                                            <div class="tab-content" id="myTabContent3">
                                                <div class="tab-pane fade show active" id="professional-details" role="tabpanel" aria-labelledby="professional-details-tab">
                                                    <h5 class="font-weight-semibold p-t-20 m-b-20">Basic job</h5>
                                                    @include('admin.modules.employee.professional.professional')
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="workexperies-details" role="tabpanel" aria-labelledby="workexperies-details-tab">
                                                    <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                    @include('admin.modules.employee.professional.workexperience')
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="v-pills-contact" role="tabpanel" aria-labelledby="v-pills-contact-tab">
                                     <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="family-details-tab-z" data-toggle="tab" href="#family-details" role="tab" aria-controls="family-details" aria-selected="true">Family Details</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="emergency-details-tab-z" data-toggle="tab" href="#emergency-details" role="tab" aria-controls="emergency-details" aria-selected="false">Emergency Details</a>
                                            </li>
                                        </ul>
                                        <form action="#">
                                            <div class="tab-content" id="myTabContent3">
                                                <div class="tab-pane fade show active" id="family-details" role="tabpanel" aria-labelledby="family-details-tab">
                                                    <h5 class="font-weight-semibold p-t-20 m-b-20">Basic family</h5>
                                                    @include('admin.modules.employee.contact.family')
                                                    
                                                </div>
                                                <div class="tab-pane fade" id="emergency-details" role="tabpanel" aria-labelledby="emergency-details-tab">
                                                    <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                    @include('admin.modules.employee.contact.emergency')
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                        </div>
                        
                    </div>
                </div>
                <!-- END PLACE PAGE CONTENT HERE -->
            </section>
        
       	@endsection
 @push('scripts')
 <script>
       $(document).ready(function(){
            $("form[name='employee__add_form']").validate({
                rules : {
                    first_name : "required",  
                    last_name : "required",
                    company_mail : "required",  
                    mobile_no : "required",                    
                },
                messages : {
                    first_name : "Please Enter a First Name ",
                    last_name : "Please Enter  a Last Name ",
                    company_mail : "Please Enter an Email Id  ",
                    mobile_no : "Please Enter  a Mobile No ",  
                    
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
</script>         
 @endpush

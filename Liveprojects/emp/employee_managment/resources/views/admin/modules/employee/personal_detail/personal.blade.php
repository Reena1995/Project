<div class="form-row">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Father Name</label>
                    <input type="text" name="fathername" class="form-control form-control-lg" placeholder="Enter Father Name">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Mother Name</label>
                    <input type="text" name="mothername" class="form-control form-control-lg" placeholder="Enter Mother Name">
                </div>
                 <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Date Of Birth</label>
                    <input type="text" name="dob" class="theme-date-picker form-control form-control-lg" placeholder="Select Date Of Birth">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label class="">Gender</label>
                    <div class="d-flex row ">
                        <div class="custom-control custom-radio col-lg-2 col-md-4 col-6">
                            <input type="radio" id="maleradio" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="maleradio">Male</label>
                        </div>
                        <div class="custom-control custom-radio col-lg-2 col-md-4 col-6">
                            <input type="radio" id="femaleradio" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="femaleradio">Female</label>
                        </div>
                    </div>
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Blood Group</label>
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Blood Group">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Alternate Number</label>
                    <input type="number" class="form-control form-control-lg" placeholder="Enter alternate  Number">
                </div>
                
               
               
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Marital Status </label>
                    <select class="form-control">
                        <option selected="">Choose...</option>
                        <option>Single</option>
                        <option>Married</option>
                        <option>Divorce</option>
                    </select>
                </div>
                
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputGroupFile02">Choose Profile Image</label>
                        <input type="file" name="profile_image" class="custom-file-input" id="inputGroupFile02">
                    </div>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Current Residence Type</label>
                    <select class="form-control">
                        <option selected="">Choose...</option>
                        @foreach($current_residency as $curr)
                                <option value="{{$curr->id}}">{{$curr->type}} </option>
                         @endforeach
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Mode Of Transportation</label>
                    <select class="form-control">
                        <option selected="">Choose...</option>
                        @foreach($mode_transportation as $mode)
                                <option value="{{$mode->id}}">{{$mode->type}} </option>
                         @endforeach
                    </select>
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Details Of Disability</label>
                    <textarea  class="form-control form-control-lg" cols="30" placeholder="Enter Details Of disaility"></textarea>
                </div>
                
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Total Experience</label>
                    <input type="number" class="form-control form-control-lg" placeholder="Total Experience">
                </div>
                
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label for="inputAddress">Current Address</label>
                    <textarea  rows="6" name="current_address" class="form-control form-control-lg" id="inputAddress" placeholder="1234 Main St"></textarea>
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label for="inputAddress2">Permanent Address</label>
                    <textarea  rows="6" name="permanent Address" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"></textarea>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Country</label>
                    <select class="form-control" id="cid" name="current_country">
                        <option selected="">Choose...</option>
                        @foreach($country as $con)
                                <option value="{{$con->id}}">{{$con->name}} </option>
                         @endforeach
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Country </label>
                    <select class="form-control" id="permanent_country" name="permanent_country">
                        <option selected="">Choose...</option>
                        @foreach($country as $con)
                                <option value="{{$con->id}}">{{$con->name}} </option>
                         @endforeach
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>State</label>
                    <select class="form-control" id="sid" name="current_state">
                        
                      
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>State</label>
                    <select class="form-control" id="permanent_state" name="permanent_state" >
                        
                      
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>City</label>
                    <select class="form-control" name="current_city">
                        <option selected="">Choose...</option>
                        
                    </select>
                </div>
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>City</label>
                    <select class="form-control" name="permanent_city">
                        <option selected="">Choose...</option>
                         
                    </select>
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Pincode</label>
                    <input type="text" name="current_pincode"class="form-control form-control-lg" placeholder="Enter current pincode">
                </div>
                
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label>Pincode</label>
                    <input type="text" name="permanent_pincode" class="form-control form-control-lg" placeholder="Enter permanant pincode">
                </div>
                
                <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit"  value="submit" name="submit" class="theme-btn text-white">Save</button>
                    </div>
                </div>
              
        </form>
           
            
</div>
@push('scripts')
 <script>
    $(document).ready(function () {
                $(".theme-date-picker").datepicker();

            function states(countryId,place) {
                $.ajax({
                    url:"{{url('/getState')}}",
                    type: "GET",
                    data: {
                        cid: countryId
                    },
                    success: function(result) {
                            $('#'+place).html('<option value="">Select State</option>');
                            $.each(result.states, function (key, value) {
                                $('#'+place).append('<option value="' + value.id + '">' + value.name + '</option>');
                            });
                            
                    }
                });
            }
                $('#cid').on('change', function () {
                    console.log('SDVsdvsdzv');
                    var countryID = $(this).val();
                    console.log(countryID);
                    states(countryID,'sid');
                });      
                $('#permanent_country').on('change', function () {
                    console.log('SDVsdvsdzv');
                    var countryID = $(this).val();
                    console.log(countryID);
                    states(countryID,'permanent_state');
                });      

    });

</script>
 @endpush   
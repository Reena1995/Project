<div class="form-row">
        <form>
            @csrf
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    
                    <input type="text" class="form-control form-control-lg" placeholder="Enter First Name">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Last Name">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    
                    <input type="email" class="form-control form-control-lg" placeholder="Enter Email Address">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                   
                    <input type="number" class="form-control form-control-lg" placeholder="Enter Mobile Number">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                   
                    <input type="text" class="form-control form-control-lg" placeholder="Enter Father Name">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                  
                    <input type="number" class="form-control form-control-lg" placeholder="Enter Emergency Contact Number">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    
                    <input type="text" class="theme-date-picker form-control form-control-lg" placeholder="Select Date Of Birth">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label class="m-l-10">Gender</label>
                    <div class="d-flex row m-l-10">
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
                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12">
                    <label>Marital Status </label>
                    <select class="form-control">
                        <option selected="">Choose...</option>
                        <option>Single</option>
                        <option>Married</option>
                    </select>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <div class="custom-file">
                        <label class="custom-file-label" for="inputGroupFile02">Choose Profile Image</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                    </div>
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label for="inputAddress">Present Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                    <label for="inputAddress2">Permanent Address</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="card-footer p-t-20 text-right">
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <a href="" class="theme-btn-outline">cancel
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
            });
</script>
 @endpush   
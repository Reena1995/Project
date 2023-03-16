

        <form  name="education_deatil_add"  action=""  method="" enctype="multipart/form-data">
        @csrf
            <div id="formId">

                <div class="card education">
        
                    <div class="card-body " >
    
                            <div class="form-row">
                           
    
                                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                    <label>Medium</label>
                                    <select class="form-control">
                                        <option selected="">Choose...</option>
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                    </select>
                                </div>
                                <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                    <label>Education Level</label>
                                    <select class="form-control">
                                        <option selected="">Choose...</option>
                                        <option>Part Time</option>
                                        <option>Full Time</option>
                                    </select>
                                </div>
                                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                    <label>University name</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter Employee ID">
                                </div>
                                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                    <label>Percentage</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter Department">
                                </div>
                                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                    <label>Specialization</label>
                                    <input type="text" class="form-control form-control-lg" placeholder="Enter Designation">
                                </div>
                                <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                    <label>Passing Year</label>
                                    <input type="text" class="theme-date-picker form-control form-control-lg" placeholder="Select Date Of Joining">
                                </div>
                            </div> 
                    </div>   
                </div>     
            </div>
            
            <div><button type="button" id="add" class="btn btn-default pull-left  btn btn-primary mt-2 ">Add</button><br></div>
            <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-3" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="submit"  value="submit" name="submit" class="theme-btn text-white">Save</button>
                    </div>
            </div>     


        </form>

   


@push('scripts')
 <script>
    $(document).ready(function () {
        $("#add").click(function () {

            console.log('adddddddddd')
            var educationcontent=  `<div class="card mt-2" >
    
                <div class="card-body education" >

                        <div class="form-row" >
                        @csrf

                            <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                <label>Medium</label>
                                <select class="form-control">
                                    <option selected="">Choose...</option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>
                            <div class="form-group floating-label show-label col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
                                <label>Education Level</label>
                                <select class="form-control">
                                    <option selected="">Choose...</option>
                                    <option>Part Time</option>
                                    <option>Full Time</option>
                                </select>
                            </div>
                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                <label>University name</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Employee ID">
                            </div>
                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                <label>Percentage</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Department">
                            </div>
                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                <label>Specialization</label>
                                <input type="text" class="form-control form-control-lg" placeholder="Enter Designation">
                            </div>
                            <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                <label>Passing Year</label>
                                <input type="text" class="theme-date-picker form-control form-control-lg" placeholder="Select Date Of Joining">
                            </div>
                        </div> 
                </div>   
            </div>`;

            var educationoutput= $('#formId').append(educationcontent);

        });


    });
 </script>   
@endpush    
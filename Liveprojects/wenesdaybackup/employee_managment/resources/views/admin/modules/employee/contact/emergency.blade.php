

<form  id="emp_emergency_add"  name="emp_emergency_add" action="{{route('contact.emergency.add')}}"  method="post" enctype="multipart/form-data">
        @csrf
        
       
            <div id="emp_emergency_contact">

                        <div class="card education mt-3 emergencyadd">
                        <input type="hidden" name="user_id" value="{{$emp->uuid}}">
                            <div class="card-body " >
                                    <div class="form-row">
                                                                
                                    
                                    

                                            
                                                <p>else</p>
                                                <h3>step 5</h3>
                                                <div class="form-row">
                                            
                                                
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control form-control-lg @error('name.0') error @enderror" name="name[]" value = ""   placeholder="Enter University Name">
                                                            
                                                    </div>

                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                            <label>address</label>
                                                            <textarea  class="form-control form-control-lg @error('address.0') error @enderror"  name="address[]" cols="30" placeholder="Enter Details Of disaility"></textarea>
                                                            
                                                    </div>
                                        
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Relationship</label>
                                                        <input type="text" value =""  name="relationship[]" class="form-control form-control-lg  @error('relationship.0') error @enderror" placeholder="Enter University Name">
                                                       
                                                    </div>

                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                        <label>Contact No</label>
                                                        <input type="text" value = ""  name="contact_no[]" class="form-control form-control-lg  @error('contact_no.0') error @enderror" placeholder="Enter University Name">
                                                        
                                                    </div>

                                                    <div class="container removecard">
                                                        <div class="row ">
                                                                <button type="button" class="btn btn-danger d-none delete">delete</button> 
                                                        </div>
                                                    </div>

                                                </div> 
                                              
                                     
                                    </div>
                            </div>    
                            
                        </div>   

            </div>

            <div class="mt-4"><button type="button"  id="addem" class="btn btn-default pull-left  btn btn-primary mt-2 ">Add</button><br></div>

            <div class="form-card-footer card-footer p-t-20 p-0 text-right">
                    <div class="btn-group mr-4" role="group" aria-label="Second group">
                        <a href="" >
                            <button class="theme-btn-outline">cancel</button>
                        </a>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                        <button type="sumit" id="emeBtn" class="theme-btn text-white">Save</button>
                    </div>
            </div>     


</form>



@push('scripts')
 <script>
    $(document).ready(function () {


        $("#addem").click(function () { 

            console.log('addemddddd');

            var defaultHtmlAppend = $('.emergencyadd').last().clone();
            console.log(defaultHtmlAppend);
            console.log('length addddddd');
            var rowIndex = $('.emergencyadd').length;
            console.log(rowIndex);
         
            console.log(name);

            console.log(defaultHtmlAppend.find('.education'));

           

            defaultHtmlAppend.find('input[name]').each(function(){
                
                var name = $(this).attr('name');
                $(this).attr('name',name).val('');
                var  splitename = name.split('[');
                $(this).attr('name',splitename[0]+"["+rowIndex+"]");
                console.log('name',splitename[0]+"["+rowIndex+"]");

               
              
                $(this).parents('.emergencyadd').append('');
		    }); 

            defaultHtmlAppend.find('textarea').each(function(){
                console.log('textaaaaa');
                var name = $(this).attr('name');
                $(this).attr('name',name).val('');
                var  splitename = name.split('[');
                $(this).attr('name',splitename[0]+"["+rowIndex+"]");
                console.log('name',splitename[0]+"["+rowIndex+"]");
               
              
                $(this).parents('.emergencyadd').append('');
		    }); 
         
          defaultHtmlAppend.attr('id','educationDetail-'+rowIndex);

            defaultHtmlAppend.find('.btn-danger').removeClass('d-none').attr('data-id',rowIndex);
            $('#emp_emergency_contact').append(defaultHtmlAppend);
        });

        $(document).delegate('.delete','click',function () { 
            var id = $(this).attr('data-id');

            $('#educationDetail-'+id).remove();
            
        });
          

    });

    
 </script>   
@endpush    
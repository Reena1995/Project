@extends('admin.common.master')
@section('content')

<style  type="text/css">
 
    .image_container
    {
        height:98px;
        width:98px;
        overflow:hidden;
        margin:5px;
    }
    .look
    {
        width: 100%;
        object-fit:cover;
        border-radius:8px;
        position:relative;
    }
    .image_container i
    {
        position: absolute;
        right: 3px;
        color:#950909;
        cursor: pointer;
    } 
</style>


<section class="admin-content">
                <!-- BEGIN PlACE PAGE CONTENT HERE -->
                <!--  container or container-fluid as per your need           -->
                <div class="container-fluid p-t-20">
                    <div class="row d-flex align-items-center">
                        <div class="col-6 m-b-20">
                            <h3>Add images</h3>
                        </div>
                        <div class="col-6 m-b-20 text-right pl-3 small-button">
                            <a href="all-employees.html"><button type="button" class="btn text-white add-new-emp">View Employee</button></a>
                            <div class="btn-group" role="group" aria-label="Third group">
                                <button type="button" class="btn btn-secondary"><i class="mdi mdi-18px mdi-email-open-outline"></i></button>
                                <button type="button" class="btn btn-secondary ml-2"><i class="mdi mdi-18px mdi-phone"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-md-12 col-12 m-b-30">
                            <!--card begins-->
                            <div class="card m-b-30">
                                <div class="card-header">
                                    <div class="card-title">Add images Details</div>
                                </div>
                                <div class="card-body">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="personal-details-tab-z" data-toggle="tab" href="#personal-details" role="tab" aria-controls="personal-details" aria-selected="true">Languages Details</a>
                                        </li>
                                       
                                       
                                    </ul>
                                    <form name="form" id="form" action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                      
                                                        <input type="file" id="gallery" name="multi[]"  class="d-none" multiple/>
                                                        <button type="button" class="btn btn-primary" id="filebutton">
                                                            <span id="filetext">Choose File</span>
                                                        </button>
                                                        <textarea id="deletedImages" name="deletedImages" ></textarea>
                                                    </div>
                                                   
   
                                                </div>

                                                <div id="showimages" class="car-body d-flex flex-wrap justify-content-start">
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="card-footer p-t-20 text-right">
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <a href="" class="theme-btn-outline text-white">
                                                        cancel
                                                    </a>
                                                </div>
                                                <div class="btn-group mr-2" role="group" aria-label="Second group">
                                                    <button type="submit"  value="submit" name="submit"class="theme-btn text-white">Save</button>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </form>
                                </div>
                               
                            </div>
                            <!--card ends-->
                        </div>
                    </div>
                </div>
                <!-- END PLACE PAGE CONTENT HERE -->
            </section>
        
       	@endsection
 @push('scripts')
    <script>
       $(document).ready(function(){
        
        var deletedImages  = [];
      
        
            $('#filebutton').click(function(){
                $('#gallery').click();
            });

            $('#gallery').change(function(){

                var name=$(this).val().split('\\').pop();
                var file=$(this)[0].files;
                if(name != ''){
                    if(file.length >=2){
                        $('#filetext').html(file.length + ' files ready to upload');
                    }
                    else{
                        $('#filetext').html(name);
                    }
                }
            });

            $('#gallery').on("change",previewImages);

            $(document).on('click','.trash', function (e){
			    e.preventDefault();
                console.log('trash button');
                $imagename= $(this).parent().attr('data-file');
                console.log($imagename,'image name is');
                deletedImages.push($imagename);
                console.log(deletedImages);
                var html = '';
                console.log('Length ::'+deletedImages.length);
                for(var i=0;i<deletedImages.length;i++){
                    
                        html += deletedImages[i]+',';
                } 
                $('#deletedImages').val('').val(html);
                $(this).parent('.image_container').remove();
                $('#filetext').html($('.trash').length + ' files ready to upload');
			
		})
       });

            function previewImages() {
                
                var $preview = $('#showimages');
                if(this.files) $.each(this.files, readAndPreview);

                function readAndPreview(i,file) {

                    // if(!/\.(jpg?g|ong|gif)$/i.test(file.name)){

                    //     return alert(file.name +" is not an image");
                    // }else

                    var reader=new FileReader();

                    $(reader).on("load",function (){
                        $preview.append('<div class="image_container d-flex justify-content-center position-relative" data-file="'+file.name+'" ><img src="' + this.result +'" alt="image" class="look"><i class="fa fa-times trash" id="trash" aria-hidden="true"></i></div>');
                    });

                    reader.readAsDataURL(file);
                }

              
            }
    </script>      
 @endpush

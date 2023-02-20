@extends('admin.common.master')
@section('content')
<style  type="text/css">
    .image_container
    {
        height:120px;
        width:200px;
        border-radius:10px;
        overflow:hidden;
    }
    .image_container img 
    {
        height : 100%;
        width : auto;
        object-fit:cover;
    }
    .image_container span
    {
        top : -6px;
        right : 8px;
        color:red;
        font-size:28px;
        fomt-weight:normal;
        cursor:pointer;
       
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
                                    <form name="form" id="form" action="{{route('image.store')}}" method="post" enctype="multipart/form-data">
                                        @csrf  
                                        <div class="tab-content" id="myTabContent1">
                                            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
                                                <h5 class="font-weight-semibold p-t-20 m-b-20">Basic</h5>
                                                <div class="form-row">
                                                    <div class="form-group floating-label col-lg-6 col-md-6 col-sm-12">
                                                      
                                                        <input type="file" id="image" name="bannerImage[]" multiple  onchange="image_select()"  class="d-none"/>
                                                            <button class="btn btn-sm btn-primary" type="button" onclick="document.getElementById('image').click()">
                                                                     Choose Images
                                                            </button>
                                                            <textarea id="deletedImages" name="deletedImages" class="d-none"></textarea>                                                      
                                                    </div>
                                                   
   
                                                </div>
                                                <div id="showimage" class="car-body d-flex flex-wrap justify-content-start">
                                                       
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
        var images =  [];
        var deletedImages  = [];
       function image_select(){
           var image = document.getElementById('image').files;
           for(i=0;i<image.length;i++)
           {
                if(check_duplicate(image[i].name)){
                    
                    images.push({
                        "name" : image[i].name,
                        "url" : URL.createObjectURL(image[i]),
                        "file" : image[i],
                    })
                } else
                {
                    alert(image[i].name + " is already added to the list")
                }
                
           }
            document.getElementById('showimage').innerHTML = image_show();
            console.log(images,'gallery');
            image_show();
        }

        function image_show() {
            var image = "";
            images.forEach((i) => {
                 var deleteFunction = "delete_image("+images.indexOf(i) +",'"+i.name+"')";
                image += '<div class="image_container d-flex justify-content-center position-relative">';
                    image += '<image src="' + i.url +'" alt="image">';
                    image += '<span class="position-absolute" onclick="'+deleteFunction+'">&times;</span>';
                image += '</div>';
            }) 
            return image; 
        }

        function delete_image(e,iName) {
            console.log('---------------');
            console.log(iName);
            deletedImages.push(iName);
             console.log(deletedImages);
             console.log('---------------');
            images.splice(e, 1);
            document.getElementById('showimage').innerHTML = image_show();
             console.log('---------------');
             console.log(deletedImages);
             var html = '';
             console.log('Length ::'+deletedImages.length);
             for(var i=0;i<deletedImages.length;i++){
                html += deletedImages[i]+',';
             } 
             $('#deletedImages').val('').val(html);
                
        }

        function check_duplicate(image) {

            var image = true;
            if (images.length > 0) {

                    for(e=0; e<images.length;e++) {
                    if(images[e].name == name) {
                        image = false;
                        break;
                    }
                }
            }
            return image; 
        }    
    </script>      
 @endpush

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('Frontend/css/style.css')}}" rel='stylesheet' type='text/css' media="all">
    <link href="{{asset('Frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <title>Document</title>
   <style>
    .error{
      color:red;
    }
    </style>
</head>
<body>
    <section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
 
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">SignUp account</h2>

              <form id="login_form'" action="{{route('Login')}}" method="post" enctype="multipart/form-data">
              @csrf
               

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg"name="email"  class="form-control form-control-lg" />
                 
                
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg"  name="password" class="form-control form-control-lg" />
                  
                  
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" value="submit" name="login" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                </div>

                

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
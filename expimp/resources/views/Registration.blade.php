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
  @if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@else(Session::has('error'))
    <div class="alert alert-danger">
       {{Session::get('error')}}
    </div>
@endif
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form id="register_form'" action="{{route('Registrationadd')}}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg"  name="name" class="form-control form-control-lg" />
                 
                  @if ($errors->has('name'))
												<span class="error">{{ $errors->first('name') }}</span>
												@endif	
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg"name="email"  class="form-control form-control-lg" />
                 
                  @if ($errors->has('email'))
												<span class="error">{{ $errors->first('email') }}</span>
												@endif	
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg"  name="password" class="form-control form-control-lg" />
                  
                  @if ($errors->has('password'))
												<span class="error">{{ $errors->first('password') }}</span>
												@endif	
                </div>

                <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" name="confirmpwd" class="form-control form-control-lg" />
                  @if ($errors->has('confirmpwd'))
												<span class="error">{{ $errors->first('confirmpwd') }}</span>
												@endif	
                </div>

                <div class="form-check d-flex justify-content-center mb-5">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit" value="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!"
                    class="fw-bold text-body"><u>Login here</u></a></p>

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
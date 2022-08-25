<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{url('Backend/Admin/assets/img/favicon.ico')}}">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('Backend/Admin/assets/css/style.css')}}">
    <!--[if lt IE 9]>
		<script src="{{url('Backend/Admin/assets/js/html5shiv.min.js')}}"></script>
		<script src="{{url('Backend/Admin/assets/js/respond.min.js')}}"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
				<p>
                                @if(Session::has('fail'))
									<i class="alert alert-success">{{session('fail')}}</i>
								@endif
                            </p>
                    <form action="{{url('/addmin')}}" class="form-signin" method="post" enctype="multipart/form-data">
						@csrf
						<div class="account-logo">
                            <a href="dashboard"><img src="{{url('Backend/Admin/assets/img/logo-dark.png')}}" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username </label>
                            <input type="text" name="username" autofocus="" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgotpassword">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" name="submit" value="send" class="btn btn-primary account-btn">Login</button>
                        </div>
                        <div class="text-center register-link">
                            Don’t have an account? <a href="register">Register Now</a>
                        </div>
                    </form>
                </div>
			</div>
        </div>
    </div>
    <script src="{{url('Backend/Admin/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{url('Backend/Admin/assets/js/popper.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{url('Backend/Admin/assets/js/app.js')}}"></script>
</body>


<!-- login23:12-->
</html>
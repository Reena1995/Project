<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid">


@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@else(Session::has('error'))
    <div class="alert alert-danger">
       {{Session::get('error')}}
    </div>
@endif
  <div class="row">
    <div class="col-sm-4" style="background-color:lavender;"></div>
    <div class="col-sm-4" style="background-color:lavenderblush;">
        <form  action="{{route('crone.store')}}" method="post" enctype="multipart/form-data">
        @csrf  
            <div class="form-group" >
                <h2 style="text-align:center;">Register Form</h2>

                <label for="exampleFormControlFile1"><b>Upload file</b></label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>  
        </form>
    </div>
    <div class="col-sm-4" style="background-color:lavender;"></div>
  </div>
</div>

</body>
</html>
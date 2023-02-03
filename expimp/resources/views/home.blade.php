<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('Frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all">
    <title>Document</title>
</head>
<style>
.form-control
{
    width: 92% !important;
   
}
.main
{
    display:flex;
    justify-content:space-between;
}
.btn-primary
{
    height:40px  !important;
}

.btn-info
{
    height:40px  !important;
}


</style>

<body>
<div class="container">
  <h1 style="text-align:center">Index Page</h1>
  <br>
  <br>
  <div class="row">
    <div class="col-md-1">
    
    </div>
    <div class="col-md-10">
       
        <form action="" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="main">
            <div class="form-group d-flex ">
                <input id="file" type="file" name="file" class="form-control">
                <button type="button" class="btn btn-primary ml-2">Import File</button>  
            </div>
        
            
            <button type="button" class="btn btn-info">Export File</button>
        </div>
       
        </form>

        <br>
        <br>
        
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                
            </tbody>
        </table>
    </div>
    <div class="col-md-1">
      
    </div>

    

  </div>
</div>

</body>
</html>


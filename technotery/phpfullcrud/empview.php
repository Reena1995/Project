
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Hello, world!</title>
    <style>
      .error
      {
        color:red
      }
      </style>
</head>

<body>
<?php


  
$conn=mysqli_connect("localhost","root","","techphp");

    
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$result = mysqli_query($conn, "SELECT * FROM employee WHERE id=$id");

        while($res = mysqli_fetch_array($result))
        {
            // echo $res['firstname'];
            $firstname = $res['firstname'];
            $Lasttname = $res['lastname'];
            $emptype = $res['emtype'];
            $email = $res['email'];

          
               
        }
	}
   


  
?>
    <section class="main">
      <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
          <form method="post" action="" autocomplete="off"> 
              <h2 style="text-align:center;color:red;">Empployee form</h2>
              <div class="form-group">
                <label for="formGroupExampleInput">First Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="fname"  value="<?php echo $firstname;?>" placeholder="Enter Your First name" readonly>
                
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Last Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="lname" value="<?php echo $Lasttname;?>" placeholder="Enter Your Last name" readonly>
               
              </div>
              
              <div class="form-group">
                    <label for="exampleFormControlSelect2">Empployee Type</label>
                    <select class="form-control"  name="emtype" id="exampleFormControlSelect1" disabled >
                    <option value="">Select...</option>
                        <option value="manager" <?php echo isset($emptype) == 'manager' ? 'selected': '' ?>>Manager</option>
                        <option value="clerk" <?php echo isset($emptype) == 'clerk' ? 'selected': '' ?> >clerk</option>
                        <option value="accountant" <?php echo isset($emptype) == 'accountant' ? 'selected': '' ?> >accountant</option>
                    </select>
                   
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email;?>" aria-describedby="emailHelp" name="email" placeholder="Enter email" readonly>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  
                </div>
                
                
                <a href="view.php" class="btn btn-primary">Back</a>
                
                
            </form>
          </div>
        <div class="col-lg-3"></div>
    </div>
    
    </section>
    
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="assets/jquery/jquery.slim.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    
</body>


</html>

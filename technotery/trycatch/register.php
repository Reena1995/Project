
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
  error_reporting(0);
  $dsn = 'mysql:dbname=techphp;host=127.0.0.1';
  $user = 'root';
  $password = '';
  
  $conn = new PDO($dsn, $user, $password);

 
 
  $fname_error=$lname_error=$date_error=$pwd_error=$email_error=$emtype_error=$allerr=$succ="";
  $fname=$lname=$date=$emtype=$email=$pwd="";

  if($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    
   


    if(empty($_POST["fname"])) {
      $fname_error="please enter firstname";
    }
    else {
      // // $name=test_input($_POST["name"]);
      // $_SESSION['fname']=$_POST['fname']."<br>";

      

    }

    if(empty($_POST["lname"])) {
      $lname_error="please enter lastname";
    }
    else {
      // $_SESSION['lname']=$_POST['lname']."<br>";

      // $name=test_input($_POST["name"]);
    }

    
     
    if(empty($_POST["emtype"])) {
      $emtype_error="please select emtype";
    }
    else {

      // $_SESSION['emtype']=$_POST['emtype']."<br>";

     
    }

    if(empty($_POST["email"])) {
      $email_error="please enter email";
    }
    else {
      // $_SESSION['email']=$_POST['email']."<br>";

      
    }

    if(empty($_POST["date"])) {
      $date_error="please select date";
    }
    else {
      // $_SESSION['date']=$_POST['date']."<br>";

      
    }

    if(empty($_POST["pwd"])) {
      $pwd_error="please enter your pwd";
    }
    else {
      // $_SESSION['pwd']=$_POST['pwd']."<br>";

      
    }

   
    
  }
  
  if(isset($_POST["submit"])){

    if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['date']) || empty($_POST['emtype']) ||  empty($_POST['email']) || empty($_POST['pwd']))
    {
          $allerr="sometgimg filed is missing";
    }
    else
    {
      // $succ="success inserted";
      $pwd=$_POST['pwd'];

      $data = [

        'firstname'=>$_POST['fname'],
        'lastname'=>$_POST['lname'],
        'dateofbirth'=>$_POST['date'],
        'emtype'=>$_POST['emtype'],
        'email'=>$_POST['email'],
        'pwd'=>md5($pwd),
      ];

      try{

              $conn->beginTransaction();
              $sql = "INSERT INTO employee(firstname,lastname,dateofbirth,emtype,email,pwd) 
              VALUES(:firstname, :lastname, :dateofbirth,:emtype,:email,:pwd)";

              $stmt = $conn->prepare($sqll);
        
                  $stmt->execute($dataa);
            
                            if($stmt)
                            {
                              $succ="success inserted";
                              echo "success";
                            }
                            else
                            {
                              echo "notsuccess";
                              $succ="Not success inserted";
                            }
            
                  
            
                  $conn->commit();
                  echo"hellolllllllll";
      }
      catch(Throwable $e){
        // echo $e->message();
        echo "Failed: " . $e->getMessage();
        // throw $e;
    }

    }

    
   
  }

  
  // function test_input($data)
  // {
  //   $data=trim($data);
  //   $data=stripcslashes($data);
  //   $data=htmlspecialchars($data);
  //   return $data;
  // }

    

?>
    <section class="main">
      <div class="row">
        <div class="col-lg-3"></div>
          <div class="col-lg-6">
          <form method="post" action="" autocomplete="off"> 
              <h2 style="text-align:center;color:red;">Empployee form</h2>
              <div class="form-group">
                <label for="formGroupExampleInput">First Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" name="fname" placeholder="Enter Your First name">
                <span class="error"><?php echo $fname_error; ?></span>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Last Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput2" name="lname" placeholder="Enter Your Last name">
                <span class="error"><?php echo $lname_error; ?></span>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Date of Birth</label>
                <input type="date" class="form-control" id="formGroupExampleInput2" name="date" placeholder="Select your birthdate">
                <span class="error"><?php echo $date_error; ?></span>
              </div>
              <div class="form-group">
                    <label for="exampleFormControlSelect2">Empployee Type</label>
                    <select class="form-control" name="emtype" id="exampleFormControlSelect1">
                    <option value="">Select...</option>
                        <option value="manager">Manager</option>
                        <option value="cleark">clerk</option>
                        <option value="accountant">accountant</option>
                    </select>
                    <span class="error"><?php echo $emtype_error; ?></span>
              </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  <span class="error"><?php echo $email_error; ?></span>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" placeholder="Password">
                  <span class="error"><?php echo $pwd_error; ?></span>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <span class="error"><?php echo $allerr; ?></span>
                <span class="error"><?php echo $succ; ?></span>
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
    <?php
      echo $fname;
      echo "<br>";
      echo $lname;
      echo "<br>";
    ?>
</body>


</html>

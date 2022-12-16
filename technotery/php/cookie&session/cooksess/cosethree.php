<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Employee form</title>
    <style type="text/css">
        .error {
            font-size: 15px;
            color: red;
        }
        .success {
            font-size: 15px;
            color: green;
        }
    </style>
  </head>
  <body>
    <?php
        session_start();
        $firstName = $lastName = $email = $password = $dob = $employeeType = null;
        $allField = $success = $firstName_error = $lastName_error = $email_error = $password_error = $dob_error = $employeeType_error = null;
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if (empty($_POST["firstName"])) {
                $firstName_error = "First name is required";
            }
            if (empty($_POST["lastName"])) {
                $lastName_error = "Last name is required";
            }
            if (empty($_POST["email"])) {
                $email_error = "Email is required";
            }
            if (empty($_POST["password"])) {
                $password_error = "Password is required";
            }
            if (empty($_POST["dob"]))
            {
                $today = new DateTime();
                $selected_date = new DateTime($_POST['dob']);
                // if ($selected_date == null)
                // {
                //     $dob_error = "Date of birth is required";
                // }
                if ($selected_date > $today)
                {
                    $dob_error = "Date of birth can't in future";
                }
                else
                {
                    $dob_error = "Date of birth is required ";
                }
            }
            // if(isset($_POST['employeeType']) && $_POST['employeeType'] == '0') {
            //     echo 'Please select a country.';
            // }
            if (empty($_POST["employeeType"])) {
                $employeeType_error = "Employee type is required";
            }
        }
        if(isset($_POST['submit']))
        {
            // print_r(empty($_POST['firstName']));
            if(empty($_POST['firstName']) || (empty($_POST['lastName'])) || (empty($_POST['email'])) || (empty($_POST['password'])) || (empty($_POST['dob'])) || (empty($_POST['employeeType'])))
            {
                $allField = "Please fill all fields";
            }
            else
            {
                $success = "Your Form is Submitted";
                $_SESSION['firstName'] = $_POST['firstName'];
                $_SESSION['lastName'] = $_POST['lastName'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['password'] = $_POST['password'];
                $_SESSION['dob'] = $_POST['dob'];
                $_SESSION['employeeType'] = $_POST['employeeType'];
            }
        }
    ?>
    <div class="container mt-5">
        <form method="post" id="myForm">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstName" id="firstName">
                <span class="error"> <?= $firstName_error; ?></span>
                </div>
                <div class="form-group col-md-6">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName" id="lastName">
                <span class="error"> <?= $lastName_error; ?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <span class="error"> <?= $email_error; ?></span>
                </div>
                <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password">
                <span class="error"> <?= $password_error; ?></span>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="dob">Date of birth</label>
                <input type="date" class="form-control" name="dob" id="dob">
                <span class="error"> <?= $dob_error; ?></span>
                </div>
                <div class="form-group col-md-6">
                <label for="employeeType">Employee Type</label>
                <select id="employeeType" name="employeeType" class="form-control">
                    <option value="0">-- select Employee Type --</option>
                    <option value="Engineer">Engineer</option>
                    <option value="Operator">Operator</option>
                    <option value="Electrician">Electrician</option>
                </select>
                <span class="error"> <?= $employeeType_error; ?></span>
                </div>
            </div>
            <button type="submit" value="submit" name="submit" class="btn btn-primary">Submit</button>
            <span class="error"> <?= $allField; ?></span>
            <span class="success"> <?= $success; ?></span>
        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <script type="text/JavaScript">
        // console.log("hello");
        var getData = localStorage.getItem("form");
        getData = JSON.parse(getData);
        const propertyNames = Object.keys(getData);
        propertyNames.forEach(element => {
            document.getElementById(element).value = getData[element];
        });
        var form = document.getElementById("myForm");
        form.addEventListener('submit', function(e) {
            console.log("hello");
            e.preventDefault();
            var value = {
                firstName:document.getElementById('firstName').value,
                lastName:document.getElementById('lastName').value,
                email:document.getElementById('email').value,
                password:document.getElementById('password').value,
                dob:document.getElementById('dob').value,
                employeeType:document.getElementById('employeeType').value
            };
            // localStorage.setItem('firstName', (value.firstName));
            // localStorage.setItem('lastName',(value.lastName));
            // localStorage.setItem('email', (value.email));
            // localStorage.setItem('password', (value.password));
            // localStorage.setItem('dob', (value.dob));
            // localStorage.setItem('employeeType', (value.employeeType));
            localStorage.setItem('form', JSON.stringify(value));
        });
    </script>
  </body>
</html>








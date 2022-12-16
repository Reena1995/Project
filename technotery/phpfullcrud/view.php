<?php
    
    $conn=mysqli_connect("localhost","root","","techphp");
        
       $sql= "SELECT * FROM employee WHERE `isactive`= 1 ";
       $result=mysqli_query($conn,$sql);


       if(isset($_REQUEST['delete']))
       {
           $emp_id =$_REQUEST['delete'];
       
           $delup = "UPDATE employee SET `isactive`= 0 WHERE `id`='$emp_id'";  
           $deleteResult = $conn->query($delup); header('Refresh: 0; url=view.php'); } ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

        <title>Hello, world!</title>
        <style>
            .error {
                color: red;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2 style="text-align: center;">Employee Details view</h2>

            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Employee type</th>
                        <th>Email</th>
                        <th>Is Active</th>
                        <th>Show</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
            while( $row=mysqli_fetch_assoc($result))
            {
        ?>
                    <tr class="empdelete">
                        <td><?php echo $row['id'];?></td>
                        <td><?php  echo $row['firstname']; ?></td>
                        <td><?php  echo $row['lastname']; ?></td>
                        <td><?php   echo $row['emtype']; ?></td>
                        <td><?php  echo $row['email'];  ?></td>
                        <td><?php  echo $row['isactive']; ?></td>
                        <td><a href="empview.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">show</a></td>
                        <td><a href="edit.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                        <td><a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger delete_row-tab">Delete</a></td>
                    </tr>

                    <?php    

            }
        ?>
                </tbody>
            </table>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="assets/jquery/jquery.slim.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    --></body>
</html>

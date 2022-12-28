<?php
    
    $conn=mysqli_connect("localhost","root","","techphp");
        
       $sql= "SELECT * FROM employee";
       $result=mysqli_query($conn,$sql);
      while( $row=mysqli_fetch_assoc($result))
      {
       echo $row['id'];
       echo $row['firstname'];
       echo $row['dateofbirth'];
       echo $row['emtype'];
       echo $row['email'];
       echo $row['pwd'];
      }
     

?>
<?php 
   error_reporting(0);

   $dsn = 'mysql:dbname=techphp;host=127.0.0.1';
   $user = 'root';
   $password = '';
   
   $dbh = new PDO($dsn, $user, $password);

    try{

        $data= [

            'firstname'=>'mansi',
            'lastname'=>'mansi',
            'dateofbirth'=>'mansi',
            'emtype'=>'mansi',
            'email'=>'mansi',
            'pwd'=>'mansi'
        ];

        $dbh->beginTransaction();
        $sql = "INSERT INTO employee(firstname,lastname,dateofbirth,emtype,email,pwd) 
        VALUES(:firstname, :lastname, :dateofbirth,:emtype,:email,:pwd)";
        $stmt= $dbh->prepare($sqlllll);
        $stmt->execute($dataaa);
        
        $dbh->commit();
        echo "success0";
        
    }catch(Throwable $e){
        // echo $e->message();
        echo "Failed: " . $e->getMessage();
        // throw $e;
    }

?>
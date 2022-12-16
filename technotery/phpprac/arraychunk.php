<?php
   $carone = array("a1@gmail.com", "a2@gmail.com", "a3@gmail.com","a4@gmail.com");
   $cartwo=array("a4@gmail.com","a1@gmail.com","a6@gmail.com","a7@gmail.com","a5@gmail.com");
//    $car=print_r(array_merge($carone,$cartwo));
$car = array_merge($carone, $cartwo);//merge array
$carunique=array_unique($car);
$newArray = [];

foreach ($carunique as $value) {
        // echo $value."<br>";
        $newcarname=explode('@',$value);
        print_r($newcarname);
        $array = [
            "name" => $newcarname[0],

            "email" => $value,
        ];
        array_push($newArray,$array);
       }
       echo '<pre>';
       print_r($newArray);
    
       echo '</pre>';


?>
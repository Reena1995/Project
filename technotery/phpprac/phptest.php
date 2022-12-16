<?php
   $carone = array("Volvo", "BMW", "Toyota");
   $cartwo=array("BMW","dezire","skoda","Volvo");
//    $car=print_r(array_merge($carone,$cartwo));
$car = array_merge($carone, $cartwo);//merge array

// foreach ($car as $value) {
    //     echo $value."<br>";
    //    }

$carunique=array_unique($car);//unique

// foreach ($carunique as $value) {
//     echo $value."<br>";
//    }

$carcommon =  array_intersect($carone, $cartwo);//common array

// foreach ($carcommon as $value) {
//     echo $value."<br>";
//    }

// foreach ($carunique as $key => $value) {
//     echo "<p>$key: $value <p>";
// }
$bonlyarr=array_diff($cartwo,$carone);//compare karva value je first lakhiye e compare thai other thi

foreach ($bonlyarr as $value) {
    echo $value."<br>";
   }


?>
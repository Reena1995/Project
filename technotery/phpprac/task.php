<?php
   $carone = array("a1@gmail.com", "a2@gmail.com", "a3@gmail.com","a4@gmail.com");
   $cartwo=array("a4@gmail.com","a1@gmail.com","a6@gmail.com","a7@gmail.com","a5@gmail.com");
//    $car=print_r(array_merge($carone,$cartwo));
$car = array_merge($carone, $cartwo);//merge array

// foreach ($car as $value) {
//         echo $value."<br>";
//        }
echo "merge array";
echo '<pre>';
       print_r($car);
       echo '</pre>';

$carunique=array_unique($car);//unique

// foreach ($carunique as $value) {
//     echo $value."<br>";
//    }
echo "unique array";
echo '<pre>';
       print_r($carunique);
       echo '</pre>';

$carcommon =  array_intersect($carone, $cartwo);//common array

// foreach ($carcommon as $value) {
//     echo $value."<br>";
//    }
echo "common array";
echo '<pre>';
       print_r($carcommon);
       echo '</pre>';
// foreach ($carunique as $key => $value) {
//     echo "<p>$key: $value <p>";
// }
$bonlyarr=array_diff($cartwo,$carone);//compare karva value je first lakhiye e compare thai other thi

// foreach ($bonlyarr as $value) {
//     echo $value."<br>";
//    }
echo "present in b but no in a";
echo '<pre>';
       print_r($bonlyarr);
       echo '</pre>';





?>
<!-- constructor automatically call thai jayre object bane suppose 3 object banaya to 3 var msg print thai and 
one fine same name no class avse to error avse enu solution name space topic ma avse-->

<!-- example:1 without constructor -->
<?php

class person{
    public $name,$age;

    function show(){
        // echo $this->name ."<br>".  $this->age;
        echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
        
    }
}
$p1= new person();
$p1->name="reena valekar";
$p1->age=20;
$p1->show();
?>



<!-- example:2 with constructor -->
<?php

class employee{
    public $name,$salary;

    function __construct(){
        echo "this is my constructor.<br>";
    }
}
$e1= new employee();
$e2= new employee();
$e3= new employee();


?>

<!-- example:3 without constructor -->
<?php

class clerk{
    public $name,$age;

    function __construct($n,$a){
        $this->name=$n;
        $this->age=$a;
    
    }

    function show(){
        // echo $this->name ."<br>".  $this->age;
        echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
        
    }
}
$p1= new clerk("yahoo",20);
// $p1->name="reena valekar";
// $p1->age=20;
$p1->show();

echo "<br>";
$p2= new clerk("gmail",50);
$p2->show();

echo "<br>";
$p3= new clerk("mozila",40);
$p3->show();
?>

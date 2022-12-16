<!-- destructor script na end ma run thai jetli var object banse etli var e pan run thase 
suppose pahla apne connection kariye last ma connection out karye database nu  to constructor
 ma connect karishu destructor ma connection close karishu-->
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

    function __destruct(){
        echo "I am a destructor function.<br>";
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
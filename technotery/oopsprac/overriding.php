<!-- class A and B same name ni property or varible tyare property overriding  and 
same name method or function method overriding  -->

<!-- 2 class che property same pan jeno objet bane eni j property accsess thai -->
<?php 

    class base{
        public $name="parent class"."<br>";
    }
    class derived extends base{
        public $name="child class"."<br>";
    }
    $test=new base();
    echo $test->name;

    $testone=new derived();
    echo $testone->name;
?>


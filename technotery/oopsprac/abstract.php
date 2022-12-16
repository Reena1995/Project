<!-- abstract Rule
1)class name abstrac jene banavanu hoi e
2)abstrac class no object na bane.
3)abstrac class ni property use karva derived class ma inherit karvu pade.
4)minimum ek method create karvani pan implement nai karvani.implement function nu derived class ma karvanu. 
and argument same no of pass karvani-->

<?php

    abstract class employee{

        public $name;

        abstract protected function calc($a,$b);
    }

    class manager extends employee{

        public function calc($c,$d)
        {
            echo $c + $d;
        }


    }
    $test=new manager();
    $test->calc(10,20);

?>
<?php
    class Player {

        public $name;
        public $speed=5;
        public $running=false;

        function set_name($n){
            $this->name=$n;
        }
        function get_name(){
            return $this->name;
        }
        //suppose play running false means player is stopping run function thi run karse player and stop thi player running stop karse
        function run()
        {
            $this->running=true;
        }

        function stoprun()
        {
            $this->running=false;
        }
    }

    $playerone = new Player();
    echo $playerone -> set_name("reena"."<br>");
    echo $playerone->get_name();

    //if propert set in by defalut direct property acccess 
    echo $playerone->speed;


   

?>
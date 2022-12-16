<!-- inheritance base class ni property method jo construct derived ma nai hoi base nu use kari lese use thai derived class ma extend keyword thi and bane class 
ma construtor hase to e khud khud nu j call karse -->
<?php
    class employee{

        private $name,$age,$salary;

        public function __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
        
        }
        // public function __construct(){
        //     echo "employee construct";
        //  }

        public function info(){
            
            echo "Employe name is:".$this->name.","." age is:".$this->age."and salary is:".$this->salary."<br>";
            
        }

}

class manager extends employee{

    // public function __construct(){
    //    echo "manager  construct";
    // }
    
    
    // public function showone(){
        
    //     echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
        
    // }
 
}

$e1= new employee("reena",22,50000);
$e1->info();

// example inheritance manager ma kai nathi lakhyu pan e base class mathi property method use kare che

$e2= new manager("riaaaaa",18,25000);
$e2->info();
?> 

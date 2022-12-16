<!-- inheritance base class ni property use thai derived class ma extend keyword thi and bane class 
ma construtor hase to e khud khud nu j call karse also use method overriding beacuse 2 class same mthod name -->
<?php
    class employee{

        protected $name,$age,$salary;

        public function __construct($n,$a,$s){
            $this->name=$n;
            $this->age=$a;
            $this->salary=$s;
        
        }
       

        public function info(){
            
            echo "Employe name is:".$this->name.","." age is:".$this->age."and salary is:".$this->salary."<br>";
            
        }

}

class manager extends employee{
    public $tax=1000;
    public $phone=300;
    public $totalSalary;

    public function info(){

        $this->totalSalary = $this->salary + $this->tax + $this->phone;
            
        echo "Manager name is:".$this->name.","." age is:".$this->age."and salary is:".$this->totalSalary."<br>";
        
    }
 
}

$e1= new employee("reena",22,50000);
$e1->info();

$e2= new manager("opal",40,75000);
$e2->info();



?> 

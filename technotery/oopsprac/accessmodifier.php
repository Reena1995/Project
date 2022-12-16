<!-- function alywas public j rakhvana nai to access na thai Access modifier 3 type bydefault public j hoi 
public,protected,private
public:ownclass + outsideclass + derivedclass    ma use thai
protected:ownclass + derivedclass
private:only ownclass -->

<!-- example:public -->
<?php
    class clerk{

        public $name,$age;

        public function __construct($n,$a){
            $this->name=$n;
            $this->age=$a;
        
        }

        public function show(){
            // echo $this->name ."<br>".  $this->age;
            echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
            
        }

}
$p1= new clerk("yahoo",20);
//name overright thayu public che property
$p1->name="reena";
$p1->show();
?>


<!-- example:protected property e only derived ma use thse e property public function ma use thase tyare j e bahar print karse -->
<?php
    class base{

        protected $name,$age;

        public function __construct($n,$a){
            $this->name=$n;
            $this->age=$a;
        
        }

        public function show(){
            // echo $this->name ."<br>".  $this->age;
            echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
            
        }

}

class derived extends base{
    
    
    public function showone(){
        // echo $this->name ."<br>".  $this->age;
        echo "the name is:".$this->name."<br>"."the age is:".$this->age."<br>";
        
    }
 
}

$p1= new base("gmail",50);
//error avse because property protected che but object run thse because function show public che
// $p1->name="riya";
$p1->show();

//name base class ma che and protected pan che to pan derived class ma show ni method 
$test=new derived("mozila",100);

// $test->name="riyaaaaaaaaa";
$test->showone();
?>

<?php
   class person{
    public $name;
    public $age;
function __construct($name="No Name",$age=0){
   $this->name=$name;
    $this->age=$age;
}

function show(){
    echo "Name : ". $this->name . " - " . "Age : ".$this->age. "<br>";
}
   }

   $p1 = new person();
   $p2 = new person("aman");
   $p3 = new person("",25);
   $p4 = new person("ram",50);
   

   $p1->show();
   $p2->show();
   $p3->show();
   $p4->show();
   
?>




<?php
class fruits{
    public $name;
    public $color;

    function __construct($name="No Fruits", $color="No Colors"){
        $this->name=$name;
        $this->color=$color;
    }

    function get_name(){
        return $this->name;
    }

    function get_color(){
        return $this->color;
    }
}


$N = new fruits("Apple","Red");
echo "Fruits Name is : ". $N->get_name(). "<br>";
echo "Fruits Color is : ". $N->get_color(). "<br>";
?>
<?php

class Fruits{
    public $name,$color;

    function set_name($name){
        $this->name = $name;
        return $this->name;
    }

    function set_color($color){
        $this->color = $color;
        return $this->color;
    }
}


$apple = new Fruits();


echo "Name of Fruit : ".  $apple->set_name("Apple")."<br>";
echo "Name of Fruit : ".  $apple->set_color("red")."<br>";


?>
<!-- ********************************************************************************************************************************************* -->

<?php

class calculate{
    public $a,$b,$c;

    function sum(){
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    function sub(){
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

$c1 = new calculate();
$c1->a=15;
$c1->b=35;

echo "Sum of c1 : " . $c1->sum()."<br>";


$c2 = new calculate();
$c2->a=55;
$c2->b=35;

echo "Sub of c2 : " . $c2->sub()."<br>";


?>

<!-- ********************************************************************************************************************************************* -->

<?php

class cars{
    public $name,$color;

    function car_name($name){
       $this->name = $name;
       return $this->name; 
    }
    function car_color($color){
       $this->color = $color;
       return $this->color;

    }

}

$car1 = new cars();

echo "Name of car : ". $car1->car_name("HONDA"). "<br>";
echo "Color of car : ".  $car1->car_color("black"). "<br>";

?>
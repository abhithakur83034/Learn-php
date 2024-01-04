<?php
class Employee{
  public $name,$age,$salary;
    function __construct($a,$b,$c){
        $this->name=$a;
        $this->age=$b;
        $this->salary=$c;
    }
    function info(){
        echo "<h1>Employee Info</h1>";
        echo "Emp Name : ".$this->name . "<br>";
        echo "Emp Age : ".$this->age . "<br>";
        echo "Emp Salary : ".$this->salary . "<br>";
    }
}

class Manager extends Employee{
    public $ta = 3000;
    public $phone = 2000;
    public $totalSalary;


    function info(){
        $this->totalSalary = $this->salary + $this->ta + $this->phone;
        echo "<h1>Manager Info</h1>";
        echo "Manager Name : ".$this->name . "<br>";
        echo "Manager Age : ".$this->age . "<br>";
        echo "Manager Salary : ".$this->totalSalary . "<br>";
    }

}
$E = new Employee("Raj",24,5000);
$M = new Manager("Raju",44,75000);
$E->info();
$M->info();
?>
<!-- 
PHP - Overriding Inherited Methods
Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

Look at the example below. The __construct() and intro() methods in the child class (Strawberry) 
will override the __construct() and intro() methods in the parent class (Fruit): -->


<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}.";
  }
}

class Strawberry extends Fruit {
  public $weight;
  public function __construct($name, $color, $weight) {
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }
  public function intro() {
    echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
  }
}

$strawberry = new Strawberry("Strawberry", "red", 50);
$strawberry->intro();
?>
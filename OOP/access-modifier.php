<?php
class Fruit {
  public $name;
  protected $color;
  private $weight;
}

$mango = new Fruit();
echo $mango->name = 'Mango'; // OK
echo  $mango->color = 'Yellow'; // ERROR
echo  $mango->weight = '300'; // ERROR
?>

<?php
class Fruits {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
   echo $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    echo $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->set_color('Yellow'); 
    echo $this->weight = $n;
  }

}

$mango = new Fruits();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
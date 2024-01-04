
<?php
class ParentClass{
   static $value="Hello from static properties <br>";
}
echo ParentClass::$value;
?>



<?php
class pi {
  public static $value=3.14159;
  public function staticValue() {
    return self::$value;
  }
}

$pi = new pi();
echo "Static values are : ". $pi->staticValue();
echo "<br>";
?>



<?php
class PClass {
      public static $value=3.14159;
}

class B extends PClass{
    function test(){
        echo "Static values are : ". PClass::$value;
    }
}

$p = new B;
$p->test();
?>
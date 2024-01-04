<?php
class Test{
    static function t1(){
         echo "Hello from static method <br>";
    }
}

Test::t1();
?>


<?php
class greeting {
    public static function welcome() {
        echo "Hello World! <br>";
    }
    public function __construct() {
      self::welcome();
    }

}

new greeting();
?>

<!-- 
=============================================================================================================================================
============================================================================================================================================= -->


<?php
class A{
    static function test(){
        echo "Hello from test class A <br>";
    }
}

class B{
    function test2(){
        A::test();
    }
}

$obj = new B;
$obj->test2();

?>


<!-- 
=============================================================================================================================================
============================================================================================================================================= -->



<?php
class T{
   static function test1(){
      echo "Welcome To The world Of Static Method <br>";
   }
}
class Ba{
   static function test2(){
      T::test1();
   }
}

$obj = new Ba;
$obj->test2();
?>
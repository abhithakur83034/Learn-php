<?php
 class Goodbye {
 const LEAVING_MESSAGE = "Hello my name is Abhishek!";
 }

 echo Goodbye::LEAVING_MESSAGE;
 echo "<br>";
 ?>

 
<!-- we can access a constant from inside the class by using the self keyword followed by the scope resolution
  operator (::) followed by the constant name                                                -->



 <?php
 class Goodbyee {
 const LEAVING_MESSAGE = "Hello my name is Abhishek!";
 public function byebye() {
    echo self::LEAVING_MESSAGE;
 }
 }

 $goodbye = new Goodbyee();
 $goodbye->byebye();
 ?>
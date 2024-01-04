<?php
trait Cl1{
   function helo(){
      echo "Hello from trait..  <br>";
   }
}

class a{
   use Cl1;
}

class b{
   use Cl1;
}

class c{
   use Cl1;
}

$A = new a();
$A->helo();

$B = new b();
$B->helo();

$C = new c();
$C->helo();
?>

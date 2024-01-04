<?php
echo " <h1 style='color:red'>Function without parameter </h1> ";

function hello(){
    echo "This is function <br> ";
}
hello();
hello();
hello();
hello();
?>


<?php
echo " <h1 style='color:red'>Function with parameter </h1> ";

function hellopm($fname="First", $lname="Last"){
    echo "Hello $fname $lname <br>";
}
hellopm("Abhi");
hellopm("Abhi","Sharma");
?>


<?php
echo " <h1 style='color:red'>Function with return statement </h1> ";

function sum($math,$eng,$sc){
   $s = $math + $eng + $sc;
   return $s;
}

function percentage($stotal){
    $per = $stotal / 3 ;

    echo "Your Percentage : $per.%";
}

$total = sum(75,69,80);
echo "Total Num Is : $total <br>";
percentage($total);
?>
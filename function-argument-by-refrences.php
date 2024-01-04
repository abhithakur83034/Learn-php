<?php
echo " <h1 style='color:red'>function argument by refrences</h1> ";

function first($num){
    $num += 5;
}

function second(&$num){
    $num += 10;
}

$number = 10;

first($number);
echo "first function original value $number <br> ";

second($number);
echo "second function original value $number";
?>

<!-- 
if we want to change the value in first function then it is not possible bcoz first function store the 
value of number and for first function $num and &number are not same.

on the other hand for second function value will be changed bcoz second function store the location of number 
and when we assign new number then value changed.

& =. store the location of value  -->
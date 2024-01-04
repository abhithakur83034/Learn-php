<?php

interface Parent1{
    function add($A,$b);
}
interface Parent2{
    function sub($A,$b);
}
interface Parent3{
    function mul($A,$b);
}
interface Parent4{
    function div($A,$b);
}


class ClildClass implements Parent1,Parent2,Parent3,Parent4{
function add($a , $b){
    echo "Add of Two Num id : ".$a + $b ."<br>";
}
function sub($a , $b){
    echo "Sub of Two Num id : ".$a - $b ."<br>";
}
function mul($a , $b){
    echo "Mul of Two Num id : ".$a * $b ."<br>";
}
function div($a , $b){
    echo "Div of Two Num id : ".$a/$b ."<br>";
}
}

$P = new ClildClass;
$P->add(20,12);
$P->sub(20,12);
$P->mul(20,12);
$P->div(20,12);

?>
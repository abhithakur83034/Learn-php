<?php
echo " <h1 style='color:red'>Global-Local variable</h1> ";


echo " <h4 style='color:red'>Local variable</h4> ";
function local(){
    $x=10;
    echo "variable inside function $x";
}
local();

echo"<br>";
echo " <h4 style='color:red'>Global variable</h4> ";

$g=10;
$y=20;
function globalvar(){
    global $g;     // we can't directally use global variablr inside function first we have to define it inside function with global.
    global $y;
    $g = $g+$y;
    echo "variable outside function $g";
}
globalvar();



?>
<?php
echo " <h1 style='color:red'>variable function</h1> ";

function str($some){
    echo $some;
}


//  assign the function to a variable..

$func = "str";
$func("hello Abhi");


echo " <br> ";
echo "*******************************************************************************";
echo " <br> ";

// annonymous function-----------------------------------------------------------------------

$fun = function($name){
    echo $name;  
};

$fun("Hello Abhi");



?>
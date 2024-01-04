<?php
include 'second.php';
require 'third.php';


function wow(){
    echo "Welcome from first page..<br>";
}

$obj = new second\ParentClass;
$obj = new third\ParentClass;
wow();    //working for current page
second\wow();    // access the path and work for that 
?>
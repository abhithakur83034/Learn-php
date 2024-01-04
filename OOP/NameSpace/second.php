<?php
namespace second;
class ParentClass{
    function __construct(){
        echo "Welcome to second.php..<br>";

        $data = new \third\ParentClass;    // useing third.php class here
    }
}

function wow(){
    echo "Welcome from second page..<br>";
}

?>
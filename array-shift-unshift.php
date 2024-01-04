<!-- Definition and Usage
The array_shift() function removes the first element from an array, and returns the value of the removed element.

Note: If the keys are numeric, all elements will get new keys, starting from 0 and increases by 1 (See example below). -->

<?php
echo " <h1 style='color:red'>array_shift() </h1> ";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
print_r(array_shift($a));    // if you want to show shift value
echo "<br>";
?>

<?php
$a=array(0=>"red",1=>"green",2=>"blue");
array_shift($a);
print_r ($a);
?>

<!-- 
Definition and Usage
The array_unshift() function inserts new elements to an array. The new array values will be inserted in the beginning of the array.

Tip: You can add one value, or as many as you like.

Note: Numeric keys will start at 0 and increase by 1. String keys will remain the same. -->





<?php
echo " <h1 style='color:red'>array_unshift() </h1> ";

$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_unshift($a,"pink");
print_r($a);
echo "<br>";
?>

<?php
$a=array(0=>"red",1=>"green",2=>"blue");
array_unshift($a,"brown");
print_r ($a);
?>

<!-- Definition and Usage
The array_push() function inserts one or more elements to the end of an array.

Tip: You can add one value, or as many as you like.

Note: Even if your array has string keys, your added elements will always have numeric keys (See example below). -->


<?php
echo " <h1 style='color:red'>array_push() </h1> ";

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";
?>


<?php
echo "An array with string keys:";
echo "<br>";
$a=array("a"=>"red","b"=>"green");
array_push($a,"blue","yellow");
print_r($a);
echo "<br>";
?>



<!-- Definition and Usage
The array_pop() function deletes the last element of an array. -->
<?php
echo " <h1 style='color:red'>array_pop() </h1> ";

$a=array("red","green","blue");
array_pop($a);
print_r($a);
?>
<!-- Definition and Usage
The array_merge() function merges one or more arrays into one array.

Tip: You can assign one array to the function, or as many as you like.

Note: If two or more array elements have the same key, the last one overrides the others.

Note: If you assign only one array to the array_merge() function, and the keys are integers, the function returns a new array with integer keys starting at 0 and increases by 1 for each value (See example below).

Tip: The difference between this function and the array_merge_recursive() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array. -->


<?php
echo " <h1 style='color:red'>array_merge() </h1> ";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
echo "<br>";
?>


<?php
$a=array(3=>"red",4=>"green");
print_r(array_merge($a));
echo "<br>";

?>
<!-- 
Definition and Usage
The array_merge_recursive() function merges one or more arrays into one array.

The difference between this function and the array_merge() function is when two or more array elements have the same key. Instead of override the keys, the array_merge_recursive() function makes the value as an array.

Note: If you assign only one array to the array_merge_recursive() function, it will behave exactly the same as the array_merge() function. -->


<?php
echo " <h1 style='color:red'> array_merge_recursive()  </h1> ";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));
echo "<br>";

?>



<!-- Definition and Usage
The array_combine() function creates an array by using the elements from one "keys" array and one "values" array.

Note: Both arrays must have equal number of elements! -->



<?php
echo " <h1 style='color:red'>  array_combine() </h1> ";

$fname=array("Peter","Ben","Joe");
$age=array("35","37","43");

$c=array_combine($fname,$age);
print_r($c);
echo "<br>";

?>
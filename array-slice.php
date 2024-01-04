<!-- Definition and Usage
The array_slice() function returns selected parts of an array.

Note: If the array have string keys, the returned array will always preserve the keys (See example 4). -->

<?php
echo " <h1 style='color:red'> array_slice()  </h1> ";
echo " <h4 style='color:red'>Start the slice from the third array element, and return the rest of the elements in the array:</h4> ";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,2));
echo "<br>";
?>


<?php
echo " <h4 style='color:red'>Start the slice from from the second array element, and return only two elements:</h4> ";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));
echo "<br>";
?>

<?php
echo " <h4 style='color:red'>Using a negative start parameter:</h4> ";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-2,1));
echo "<br>";
?>
<!-- Definition and Usage
The array_replace() function replaces the values of the first array with the values from following arrays.

Tip: You can assign one array to the function, or as many as you like.

If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, it will be left as it is (See Example 1 below).

If a key exist in array2 and not in array1, it will be created in array1 (See Example 2 below).

If multiple arrays are used, values from later arrays will overwrite the previous ones (See Example 3 below).

Tip: Use array_replace_recursive() to replace the values of array1 with the values from following arrays recursively. -->

<?php
echo " <h1 style='color:red'>array_replace() </h1> ";

$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"orange","burgundy");
print_r(array_replace($a1,$a2));
echo "<br>";
?>


<?php
$a1=array("a"=>"red","green");
$a2=array("a"=>"orange","b"=>"burgundy");
print_r(array_replace($a1,$a2));
echo "<br>";
?>


<?php
$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
print_r(array_replace($a1,$a2,$a3));
echo "<br>";
?>


<?php
$a1=array("red","green","blue","yellow");
$a2=array(0=>"orange",3=>"burgundy");
print_r(array_replace($a1,$a2));
echo "<br>";
?>



<?php
// $a = 100;
if(1 || $a){
    echo "<h1>Hello</h1>";
}else{
    echo "<h1>Hello from else</h1>";
}

echo "============================================================================================";
echo "<br>";
?>





<!-- 

Definition and Usage
The array_replace_recursive() function replaces the values of the first array with the values from following arrays recursively.

Tip: You can assign one array to the function, or as many as you like.

If a key from array1 exists in array2, values from array1 will be replaced by the values from array2. If the key only exists in array1, 
it will be left as it is. If a key exist in array2 and not in array1, it will be created in array1. If multiple arrays are used, 
values from later arrays will overwrite the previous ones.

Note: If you do not specify a key for each array, this function will behave exactly the same as the array_replace() function. -->



<?php
echo " <h1 style='color:red'>array_replace_recursive() </h1> ";


$a1=array("a"=>array("red"),"b"=>array("green","blue"));
$a2=array("a"=>array("yellow"),"b"=>array("black"));
$a3=array("a"=>array("orange"),"b"=>array("burgundy"));
print_r(array_replace_recursive($a1,$a2,$a3));
echo "<br>";
?>

<!-- Differences between array_replace() and array_replace_recursive(): -->

<?php
echo "<h2>Differences between array_replace() and array_replace_recursive() </h2>";
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));

$result=array_replace_recursive($a1,$a2);
print_r($result);
echo "<br>";
$result=array_replace($a1,$a2);
print_r($result);
echo "<br>";
?>





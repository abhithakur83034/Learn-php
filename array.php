<?php
echo " <h1 style='color:red'>Array </h1> ";

$arr = ["abhi",12,true,12.12];
echo $arr[0],"<br>";
echo $arr[1],"<br>";
echo $arr[2],"<br>";
echo $arr[3],"<br>";

// print_r($arr);

echo " <h1 style='color:red'>Using loop </h1> ";

for ($i=0; $i < 4; $i++) { 
    echo $arr[$i] . "<br>";
}

?>
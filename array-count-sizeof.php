<?php
echo " <h1 style='color:red'>Array Count and sizeof </h1> ";

$food = ['oragne','banana','apple','peach','apple','banana'];
// $food = [
//     "fruits" =>['oragne','banana','apple','peach','apple','banana'],
//     "veggie" =>['potato','tomato','chilly','carrot','pea'],
// ];

// echo count($food)."<br>";
// echo count($food,1);

// echo "<pre>";
// print_r($food);
// echo "</pre>";



$len = count($food);

for ($i=0; $i < $len; $i++) { 
    echo $food[$i]."<br>";
}

?>
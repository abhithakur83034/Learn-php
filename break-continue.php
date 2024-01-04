<?php
echo " <h1 style='color:red'>Break-Continue </h1> ";

for ($i=2; $i <= 20 ; $i = $i + 2) { 
    echo $i;
    if ($i == 10) {
        echo " Number is  .$i ";
        // echo "<br>"; 
        // break;
        // continue;
    }
   echo "<br>"; 
}
?>
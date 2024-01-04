<?php
echo " <h1 style='color:red'>Goto statement</h1> ";

$str = "My Name Is Abhi";

echo $str; 
echo "<br>"; 
echo $str; 
echo "<br>"; 
echo $str; 
echo "<br>"; 
goto gotoStatement;
echo $str; 
echo "<br>"; 
echo $str; 
echo "<br>";

gotoStatement :
echo "Hey this is Goto statement";
?>
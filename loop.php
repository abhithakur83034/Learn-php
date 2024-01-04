<?php
echo " <h1 style='color:red'>While loop</h1> ";
$a = 1;

while ($a <= 5) {
    echo " <h1>$a.) Hello Abhi</h1>";
    $a++;
}
?>


<?php
echo " <h1 style='color:red'>Do-While loop</h1> ";
$a = 5;
do {
    echo " <h1>$a.) Hello Abhi</h1>";
   $a--;
} while ($a >= 1);

?>


<?php
echo " <h1 style='color:red'>For loop</h1> ";
for ($i=1; $i <= 5; $i++) { 
    echo " <h1>$i.) Hello Abhi</h1>";
}
?>


<?php
echo " <h1 style='color:red'>Nested loop</h1> ";
for ($i=1; $i <= 50; $i = $i + 10) { 
    for ($j=$i; $j < $i + 10; $j++) { 
        echo $j. " ";
    }
    echo "<br>";
}
?>
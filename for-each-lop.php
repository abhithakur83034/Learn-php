<?php
echo " <h1 style='color:red'>For-Each Loop </h1> ";

$arr = ["name" => "Abhi","age"=>"23","city"=>"Lucknow"];
// echo $arr["name"],"<br>";
// var_dump($arr);

foreach ($arr as $value){
    echo $value ."<br>";
}

echo "<h1>or</h1>";
echo "<ul>";
foreach ($arr as $key => $value){
    echo "<li>$key = $value </li> ";
}
echo "</ul>";
?>
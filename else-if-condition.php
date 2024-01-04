<?php
$contry = "India";

if($contry == "India"){
    echo "<h1>This is an asian contry</h1>";
}elseif($contry  == "France"){
    echo "<h1>This is an uropean contry/h1>";
}elseif ($contry < "Canada") {
    echo "<h1>This is an north american contry</h1>";
}else{
    echo "<h1>Unknown</h1>";
}
echo "<br>";


?>
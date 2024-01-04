<?php
echo " <h1 style='color:red'>multidimensional associative array </h1> ";

$marks = [
    "Abhi"=>["phy"=>89,"math"=>92,"chem"=>99],
    "Raj"=>["phy"=>89,"math"=>92,"chem"=>99],
    "Raka"=>["phy"=>89,"math"=>92,"chem"=>99]
];
echo "<table border='1px'>
<tr>
<th>Name</th>
<th>Phy</th>
<th>Math</th>
<th>Chem</th>
</tr>
";
foreach ($marks as $key => $v1) {
    echo "<tr>";
    echo "<td>$key</td>";
    foreach ( $v1 as $v2) {
        echo "<td>$v2</td>";
    }
    echo "<tr>";
}
echo "<table>";
?>
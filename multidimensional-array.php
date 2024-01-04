<?php
echo " <h1 style='color:red'>multidimensional array </h1> ";

$arr = [
    [1,'abhi',23,'male'],
    [2,'raka',20,'female'],
    [3,'kalu',123,'male'],
    [4,'ram',23,'male']
];


echo "<pre>";
print_r($arr);
echo "</pre>";




echo $arr[0][0]. " ";
echo $arr[0][1]. " ";
echo $arr[0][2]. " ";
echo $arr[0][3]. " ";

echo "<br>";


echo $arr[1][0]. " ";
echo $arr[1][1]. " ";
echo $arr[1][2]. " ";
echo $arr[1][3]. " ";

echo "<br>";


echo $arr[2][0]. " ";
echo $arr[2][1]. " ";
echo $arr[2][2]. " ";
echo $arr[2][3]. " ";

echo "<br>";


echo $arr[3][0]. " ";
echo $arr[3][1]. " ";
echo $arr[3][2]. " ";
echo $arr[3][3]. " ";

echo "<br>";


echo " <h3 style='color:red'>multidimensional array  using for loop</h3> ";


for ($row=0; $row < 4; $row++) { 
    for ($col=0; $col < 4; $col++) { 
     echo $arr[$row][$col]. " ";
    }
    echo "<br>";
}

echo " <h3 style='color:red'>multidimensional array  using for each loop</h3> ";

echo "<table border='1px'>";
echo "<tr>
  <th> Id</th>;
  <th> Name</th>;
  <th> Age</th>;
  <th> Gender</th>;
  <tr>
  ";
foreach($arr as $row){
  echo "<tr>";
  foreach($row as $col){
    echo "<td>$col</td>";
  }
  echo "</tr>";
}
echo "</table>";
?>
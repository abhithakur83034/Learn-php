<?php
echo " <h1 style='color:red'>multidimensional array with list</h1> ";

$emp = [
    [1,"aman","manager",50000],
    [2,"mohan","frontend dev",20000],
    [3,"karan","designer",25000],
    [4,"chaman","backend dev",35000]
];
echo "<table border='1px'>
<tr>
<th>Emp Id</th>
<th>Emp Name</th>
<th>Emp Designation</th>
<th>Emp Salary</th>
</tr>
";

foreach($emp as list($id, $name, $designation, $salary) ){
    echo "<tr><td>$id </td><td>$name</td><td> $designation </td><td>$salary </td> </tr>";
}
echo "</table>";





echo " <h1 style='color:red'>multidimensional associative array with list</h1> ";

$emp = [
    ["id"=>1,"name"=>"aman","designation"=>"manager","salary"=>50000],
    ["id"=>2,"name"=>"mohan","designation"=>"frontend dev","salary"=>20000],
    ["id"=>3,"name"=>"karan","designation"=>"designer","salary"=>25000],
    ["id"=>4,"name"=>"chaman","designation"=>"backend dev","salary"=>35000]
];
echo "<table border='1px'>
<tr>
<th>Emp Id</th>
<th>Emp Name</th>
<th>Emp Designation</th>
<th>Emp Salary</th>
</tr>
";

foreach($emp as list("id"=>$id, "name"=>$name,"designation"=> $designation,"salary"=> $salary) ){
    echo "<tr><td>$id </td><td>$name</td><td> $designation </td><td>$salary </td> </tr>";
}
echo "</table>";
?>
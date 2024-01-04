<?php
echo " <h1 style='color:red'>recursive function</h1> ";

function fact($num){
    if($num == 0){
        return 1;
    }else{
       return($num * fact($num -1));
    }
}
$facto = "fact";
 echo "factorial of 5 are : ". $facto(5) ;
?>
<?php
echo " <h1 style='color:red'>Switch</h1> ";

$weekday = 6;

switch ($weekday) {
    case 1:
        echo " <h1>Today is monday</h1> ";
        break;
    
    case 2:
        echo " <h1>Today is Tuesday</h1> ";
        break;
    
    case 3:
        echo " <h1>Today is Wednesday</h1> ";
        break;
    
    case 4:
        echo " <h1>Today is Thursday</h1> ";
        break;
    
    case 5:
        echo " <h1>Today is Friday</h1> ";
        break;
    
    case 6:
        echo " <h1>Today is Saturday</h1> ";
        break;
    
    case 7:
        echo " <h1>Today is Sunday</h1> ";
        break;
    
    default:
       echo " <h1>Enter a Valid week day</h1> ";
        break;
}

echo "<br>"
?>



<?php
$age = 18;

switch (true) {
    case ($age >= 15 && $age <= 20):
        echo " <h1>You are not valid</h1> ";
        break;
    
    
    case ($age >= 21 && $age <= 30):
        echo " <h1>You are valid</h1> ";
        break;
    
    
    default:
       echo " <h1>Enter a valid age</h1> ";
        break;
}

echo "<br>"
?>
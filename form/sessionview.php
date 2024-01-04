<?php
session_start();
echo "<pre>";
print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION["favcolor"] )){
        echo " 1st Session is " . $_SESSION["favcolor"];
    }
    ?>
</body>
</html>
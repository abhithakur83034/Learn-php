<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Without Variable</h1>
    <?php
    echo "hello-1 <br>" ;
    echo "hello-2 <br>" ;
    echo "hello-3 <br>" ;
    ?>
    <h1>With Variable</h1>
    <?php
    $var = 'hello';
    $num = 20;

    echo $var ,"-1" ;
    echo "<br>";
    echo $var, "-2" ;
    echo "<br>";
    echo $var, "-3";

    echo "<br>";
    echo $num/2;

    echo "<br>";
    echo $num*2;

    echo "<br>";
    echo $num+2;

    echo "<br>";
    echo $num-2;
    ?>
</body>
</html>
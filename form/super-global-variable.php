
<!-- Super Global Variable

there are 7 super global variable
1. $_GET
2. $_POST
3. $_REQUEST
4. $_SERVER
5. $_SESSION
6. $_COOKIE
7. $_FILES -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">     
        <p>Name: <input type="text" name="name"></p>
        <p>E-mail: <input type="text" name="email"></p>
        <P> <input type="submit" value="save"> </P>
    </form>
</body>
</html>

<?php
echo "<pre>";
echo print_r($_POST). "<br>";
echo "</pre>";
?>
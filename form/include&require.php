<!-- 
require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue 
-->

<!-- 
when a file is included with the include statement and PHP cannot find it, the script will continue to execute:

If we do the same example using the require statement, 
the echo statement will not be executed because the script execution dies after the require statement returned a fatal error: -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include '../first.php';       // include  from out of form folder
        echo "<br>";
    ?>

    <?php
        require 'date.php';     // require from form folder
        echo "<br>";
    ?>
</body>
</html>

<!-- 
Use require when the file is required by the application.

Use include when the file is not required and application should continue when file is not found. -->
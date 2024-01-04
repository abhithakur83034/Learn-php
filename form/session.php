<!-- Session variables hold information about one single user, and are available to all pages in one application. -->
<html>
<body>

<?php
session_start();

$_SESSION["favcolor"] = "green";
echo "Session variables are set.";
?>

</body>
</html>
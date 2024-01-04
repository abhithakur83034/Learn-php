<?php



echo "Cookie Value id " . $_COOKIE["user"];
echo "<br>";

setcookie("user","",time() - (86400 * 30), "/" )
// echo "Cookie 'user' is deleted.";
?>

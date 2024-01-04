<!-- 
if we want to load the same data on multipe tabs then we store user data on cokies and wherever we 
 need to access that data we get it from cookies , By this we can make our website faster..

 
 in cookies we store the temp info on the visiter system.


    A cookie is created with the setcookie() function.

        Syntax
        setcookie(name, value, expire, path, domain, secure, httponly);
        Only the name parameter is required. All other parameters are optional.
 -->


<?php
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>



<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>
<?php
// date_default_timezone_set('Asia/Kolkata');


echo "The time is " . date("h"). "<br>";
echo "The time is " . date("H"). "<br>";
echo "The time is " . date("g"). "<br>";
echo "The time is " . date("G"). "<br>";
echo "The time is (min) " . date("i"). "<br>";
echo "The time is (sec)" . date("s"). "<br>";
echo "The time is " . date("a"). "<br>";   //  am
echo "The time is " . date("A"). "<br>";   // AM


echo "<br>";

echo "The time is " . date("h:i:sa"). "<br>";  //The time is 11:02:07am
echo "The time is " . date("H:i:sA"). "<br>";  //The time is 11:02:07am

echo "<br>";

echo "The date & time is " . date(" d/m/Y h:i:sA"). "<br>";  //The date & time is 02/01/2024 11:03:44AM

echo "<br>";

// set default timezone
date_default_timezone_set('Asia/Kolkata');

echo "The date & time is " . date(" d/m/Y h:i:sA"). "<br>";  //
?>
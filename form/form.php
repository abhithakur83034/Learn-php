<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        // The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {            // check if name only contains letters and whitespace
          $nameErr = "Only letters and white space allowed";
        }
      }
    
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
    
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <p>Name: <input type="text" name="name"></p>
        <p style="color:red">* <?php echo $nameErr; ?> </p>
        <p>E-mail: <input type="text" name="email"></p>
        <p style="color:red">* <?php echo $emailErr; ?> </p>
        <p>Website: <input type="text" name="website"></p>
        <p style="color:red"><?php echo $emailErr; ?> </p>
        <p>Comment: <textarea name="comment" style="sizeoff:none"></textarea></p>
        Gender:
            <input type="radio" name="gender" value="female">Female;
            <input type="radio" name="gender" value="male">Male;
            <input type="radio" name="gender" value="other">Other;
            <span style="color:red">* <?php echo $genderErr;?></span>

            <p><input type="submit" name="save" >  </p>
    </form>

    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>
</body>
</html>


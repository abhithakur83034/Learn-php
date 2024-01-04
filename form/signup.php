<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$name = $mobile = $email = $password = $image= "";
$nameErr = $mobileErr = $emailErr = $passwordErr = $imageErr = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST['name'])){
$nameErr = "name is required";
}else{
    $name = form_data($_POST['name']);
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {       
        $nameErr = "Only letters and white space allowed";
      }
}


if(empty($_POST['mobile'])){
$mobileErr = "number is required";
}else{
    $mobile = form_data($_POST['mobile']);
}


if(empty($_POST['email'])){
    $emailErr = "email is required";

}else{
    $email = form_data($_POST['email']);
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $emailErr = "invalid email format";
    }
}


if(empty($_POST['password'])){
    $passwordErr = "password is required";

}else{
    $password = form_data($_POST['password']);
}

if(empty($_FILES['image'])){
    $imageErr = "image is required";
}else{
    $image = $_FILES['image'];
    $file_name =  $image['name'];
    move_uploaded_file($image['tmp_name'],'images/'. $file_name);
}
}


function form_data($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" encType="multipart/form-data" >
      <p>Name : <input type="text" name="name"></p>
      <span style="color:red"> <?php echo $nameErr; ?> </span>
      <p>Mobile : <input type="number" name="mobile"></p>
      <span style="color:red"> <?php echo $mobileErr; ?> </span>
      <p>Email : <input type="email" name="email"></p>
      <span style="color:red"> <?php echo $emailErr; ?> </span>
      <p>Password : <input type="password" name="password"></p>
      <span style="color:red"> <?php echo $passwordErr; ?> </span>
      <p>File : <input type="file" name="image"></p>
      <span style="color:red"> <?php echo $imageErr; ?> </span>
      <p> <input type="submit" name="save"> </p>
    </form>


    <?php

echo $name;
echo "<br>";
echo  $mobile;
echo "<br>";
echo $email;
echo "<br>";
// echo $image;
echo "<br>";
    ?>
</body>
</html>
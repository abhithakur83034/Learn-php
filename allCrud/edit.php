<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include 'header.php';


    $servernme = "localhost";
    $username ="root";
    $password = "";
    $dbname = "student";

    $conn = mysqli_connect($servernme,$username,$password,$dbname);
    if($conn->connect_error){
      die("Error While Connecting database : ". $conn->connect_error);
    }else {
      echo "Connection Created Successfully";
    }



    $student_id = $_GET['id'];
      

    
    $allData = "SELECT * FROM students WHERE id = {$student_id}";
    $result = mysqli_query($conn,$allData);

    // echo "<pre>";
    // echo print_r($result);
    // echo "<pre>";

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
        ?>


<form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >
     <p> <input type="text" name="name" value=<?php echo $row["name"];?> > </p>
     <p> <input type="email" name="email" value=<?php echo $row["email"];?>> </p>
     <p> <input type="number" name="mobile" value=<?php echo $row["mobile"];?>> </p>
     <p> <input type="submit" name="save" value="Update"> </p>
   </form>
   <?php } } ?>
</body>
</html>
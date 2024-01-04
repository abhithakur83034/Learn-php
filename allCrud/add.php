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


      if(isset($_POST['save'])){
        // echo "<pre>";
        // echo print_r($_POST);
        // echo "</pre>";

        $table = "CREATE TABLE students(
            id INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            mobile VARCHAR(30) NOT NULL,
            password VARCHAR(30) NOT NULL)";
            

      if($conn->query($table) === TRUE){
        echo "Table Created Successfully";
        echo "<br>";
      }
      

      $name=$_POST['name'];
      $email=$_POST['email'];
      $mobile=$_POST['mobile'];
      $password=$_POST['password'];
      $insert_data = "INSERT INTO students(name,email,mobile,password)
      VALUES('$name','$email','$mobile','$password')"; 

      if($conn->query($insert_data) === TRUE){
        echo "Data Added Successfully";
        echo "<br>";
      }else {
        echo "Error while adding data : ". $conn->error;
        echo "<br>";
      }

      }


     
    ?>


    <form action=" <?php echo $_SERVER['PHP_SELF'] ?> " method="post" >
     <p> <input type="text" placeholder="Enter Name" name="name"> </p>
     <p> <input type="email" placeholder="Enter Email" name="email"> </p>
     <p> <input type="number" placeholder="Enter Number" name="mobile"> </p>
     <p> <input type="password" placeholder="Enter Password" name="password"> </p>
     <p> <input type="submit" name="save"> </p>
   </form>
</body>
</html>
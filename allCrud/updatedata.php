<?php

$servernme = "localhost";
$username ="root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servernme,$username,$password,$dbname);
if($conn->connect_error){
  die("Error While Connecting database : ". $conn->connect_error);
}else {
  echo "Connection Created Successfully";
}


$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];


      $update_data = "UPDATE students SET name='{$name}',email='{$email}',mobile='{$mobile}' WHERE id={$id}"; 

      if($conn->query($update_data) === TRUE){
        echo "Data Updated  Successfully";
        echo "<br>";
      }else {
        echo "Error while updating data : ". $conn->error;
        echo "<br>";
      }


?>
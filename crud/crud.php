<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username,"",$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}




// Create database
// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//     echo "Database created successfully";
//   } else {
//     echo "Error creating database: " . $conn->error;
//   }



// sql to create table
// $sql = "CREATE TABLE MyGuests (
    // id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     firstname VARCHAR(30) NOT NULL,
//     lastname VARCHAR(30) NOT NULL,
//     email VARCHAR(50),
//     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
//     )";



// if ($conn->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . $conn->error;
//   }


// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//   VALUES ('Abhi', 'Sharma', 'a@gmail.com'),
//          ('Karan', 'Pal', 'K@gmail.com'),
//          ('Aman', 'Verma', 'aman@gmail.com'),
//          ('Raj', 'Kumar', 'r@gmail.com')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }


// $sql = "DELETE FROM MyGuests WHERE id = 13";

// if($conn->query($sql) === TRUE){
//     echo "Record Deleted Successfully";
// }else{
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }



$sql = "UPDATE MyGuests SET id='3' WHERE id=14";
if($conn->query($sql) === TRUE){
    echo "Record Updated Successfully";
}else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
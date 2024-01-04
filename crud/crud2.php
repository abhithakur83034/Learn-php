<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connnection faild : " . $conn->connect_error);
}


// create database

// $sql = "CREATE DATABASE $dbname";
// if($conn->query($sql) === TRUE){
//     echo "Database Created Successfully";
// }else{
//     echo "Error Wlile Connectiing Database : ". $conn->error;
// }



// create table

// $sql = "CREATE TABLE crud_data(
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     fullname VARCHAR(50),
//     email VARCHAR(50),
//     mobile VARCHAR(12),
//     age INT(4)
// )";

// if($conn->query($sql) === TRUE){
//     echo "Table Creating Successfully";
// }else{
//     echo "Error While Creating Table : " . $conn->error;
// }



// insert data in table

// $sql = "INSERT INTO crud_data(fullname,email,mobile,age)
//     VALUES('abhi','a@gmail.com',45467334,21)";

// if($conn->query($sql)===TRUE){
//     echo "data inserted into table";
// }else{
//     echo "Error while inserting data into table : " . $conn->error; 
// }


// update table

// $sql = "UPDATE crud_data SET email='k@gmail.com' WHERE id = 2 ";
// if($conn->query($sql)===TRUE){
//     echo "data updated successfully";
// }else{
//     echo "Error while updating data into table : " . $conn->error; 
// }


// delete data from table

$sql = "DELETE FROM crud_data WHERE id=5";
if($conn->query($sql)===TRUE){
    echo "data deleted successfully";
}else{
    echo "Error while deleting data into table : " . $conn->error; 
}

$conn->close();
?>
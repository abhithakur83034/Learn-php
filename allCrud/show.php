<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
    ?>
<?php
       include 'header.php';


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



     // start delete record from table *****************************************************************************************************
if(isset($_GET['id'])){
    $student_id = $_GET['id'];
    
            // echo $student_id;
    
            $delData = "DELETE FROM students WHERE id = {$student_id}";
    
            if (mysqli_query($conn, $delData)) {
                echo "Record deleted successfully";
            } else {
                echo "Error deleting record: " . mysqli_error($conn);
            }
}
     // end delete record from table *****************************************************************************************************



     $allData = "SELECT * FROM students";
     $result = mysqli_query($conn,$allData);

      if (mysqli_num_rows($result) > 0) {
           
    ?>

    <table cellpadding="7px" border="2px solid red" >
        <thead>
            <tr>
                <th>Sr no.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
              while ($row = mysqli_fetch_assoc($result)) {  ?>
              <tr>
                <td><?php echo $row["id"];?></td>
                <td><?php echo $row["name"];?></td>
                <td><?php echo $row["email"];?></td>
                <td><?php echo $row["mobile"];?></td>
                <td> <a href="edit.php?id=<?php echo $row["id"];?>">Update</a> </td>
                <td> <a href="?id=<?php echo $row["id"];?>">Delete</a> </td>
              </tr>
          <?php }  ?>
        </tbody>
    </table>
    <?php }else{
        echo "<h2>No Record Found..</h2>";
    } ?>
</body>
</html>
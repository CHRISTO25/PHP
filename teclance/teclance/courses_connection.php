<?php
require 'reg_database.php';
// print_r($_POST);
 $sf=$_POST['fname'];
  
  
   $sn=$_POST['numbe'];
   
   


 
 
$sql= "INSERT INTO `courses`( `course_name`) VALUES ('$sf')";


// $sql1= "INSERT INTO `amount`(`course_id`,`amount`) VALUES ('$s','$sn')";
// $conn->query($sql);  
 



if ($conn->query($sql) === TRUE) {
      header("Location:courses.php");
         }  
        
 else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }$conn->close();



?>

<?php
require 'reg_database.php';
// print_r($_POST);
 $pi=$_POST['pend']; 
 $p=$_POST['iiz']; 
$sql= "UPDATE `reg_form` SET `pen`='$pi' WHERE`id`='$p'";
// $conn->query($sql);  
 



if ($conn->query($sql) === TRUE) {
      header("Location:index.php");
         }  
        
 else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }$conn->close();



?>
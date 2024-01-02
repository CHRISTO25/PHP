<?php
require 'reg_database.php';
// print_r($_POST);
 $sf=$_POST['fname'];
  
   $se=$_POST['emai'];
   $sn=$_POST['numbe'];
    $sp=$_POST['pass'];
    $spi=$_POST['prio'];
   


 
 
$sql= "INSERT INTO `login`( `username`, `password`, `mail`, `priority`, `phone`) 
VALUES ('$sf','$sp','$se','$spi','$sn')";
// $conn->query($sql);  
 



if ($conn->query($sql) === TRUE) {
      header("Location:index.php");
         }  
        
 else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }$conn->close();



?>
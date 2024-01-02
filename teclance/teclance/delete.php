<?php

include("reg_database.php");
 $ids = $_GET['ids'];
 //echo $ids;
$sql = "DELETE FROM `reg_form` WHERE `id` = $ids";
if ($conn->query($sql) === TRUE) {
         echo "New record deleted successfully";
         } 
else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }$conn->close();

header("Location:index.php");
?>
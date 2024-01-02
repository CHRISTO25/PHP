<?php
require 'reg_database.php';
// print_r($_POST);
$r = $_GET['ids'];

 
$sql2= "SELECT * FROM reg_form WHERE  `id`='$r'";
$result2=$conn->query($sql2);
while($row2 = $result2->fetch_assoc()) 
{
    $n= $row2['status'];
    $np=$n-1;
    }



$sql1= " UPDATE `reg_form` SET`status`='$np' WHERE  `id`='$r'";




if ($conn->query($sql1) === TRUE) {
      header("Location:feessetup.php");
         }  
        
 else {
          echo "Error: " . $sql1 . "<br>" . $conn->error;
       }$conn->close();

//FROM `reg_form` WHERE status !=99;

?>


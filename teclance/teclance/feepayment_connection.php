<?php
require 'reg_database.php';
// echo "<pre>";
//  print_r($_POST);

$p=$_POST['cname']; 
$q=$_POST['aname']; 
$r=$_POST['sname']; 
$s=$_POST['tab']; 
$t=$_POST['numbe']; 
$u=$_POST['te']; 
$v=$_POST['ta']; 
 
$sql= "INSERT INTO `payed`(`P_course`, `p_amount`, `p_student`, `p_status`, `p_count`, `P_cash`) 
VALUES ('$p','$q','$r',$s,'$t','$u')";
 $conn->query($sql); 
$sql1= " UPDATE `reg_form` SET`status`='$t' WHERE  `id`='$r'";
// $sql= "";
// $sql= "";



if ($conn->query($sql1) === TRUE) {
       header("Location:feepayment.php");
         }  
        
 else {
          echo "Error: " . $sql1 . "<br>" . $conn->error;
       }$conn->close();



?>
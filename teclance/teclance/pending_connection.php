<?php
// session_start();
require 'reg_database.php';

//$uuid=$_SESSION["USERID"];
// print_r($_POST);
 // $a=$_POST['fname'];
 //  $b=$_POST['emai'];
   $en=$_POST['texta'];
   $nn=$_POST['yy'];
   $userr=$_POST['useriid'];
   $iii=$_POST['iddd'];

$date = new DateTime(null, new DateTimezone("Asia/Kolkata"));    
        $datetime=$date->format('d/m/y');                              
        $datetime.=",".$date->format('H:i a');
 
 
$sql= "INSERT INTO `pendings`(`rid`,`nam_pending`,`user_enquiry`,`enquiry`,`date`) 
       VALUES ('$iii','$nn','$userr','$en','$datetime')";
// $conn->query($sql);  
if ($conn->query($sql) === TRUE) {
      header("Location:pending.php?ids= $iii;?>");
         }  
        
 else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }$conn->close();



?>
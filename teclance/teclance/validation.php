<?php
session_start();
$c=$_POST['Username'];
$de=$_POST['pas'];
require 'reg_database.php';

$sql = "SELECT * FROM `login` WHERE mail = '$c' AND password = '$de'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
     {

              while($row = $result->fetch_assoc())
               {
           
               $userid = $row['id'];
               $priority=$row['priority'];
                $_SESSION["loginstatus"]='yes';

               $_SESSION["USERID"] = $userid;
            $_SESSION["PRIORITY"] = $priority;
             
                 // echo "logged in";
                  header("location: index.php");
              }
            } 
            else 
            {
              // echo 'out !!!';
               header("location: signin.php");
            }
$conn->close();

?>
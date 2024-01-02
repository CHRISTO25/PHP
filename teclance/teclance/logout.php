<?php 

session_start();

echo $_SESSION["useriddata"];

session_unset();

if( !isset($_SESSION["useriddata"]) ){
    header("Location: ./signin.php");
    exit();
}



?>
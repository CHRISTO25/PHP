<?php
include("reg_database.php");

$ids = $_GET['ids'];
$sql3= "SELECT * FROM `reg_form` WHERE `id`='$ids'";
$result3=$conn->query($sql3);
while($row3 = $result3->fetch_assoc()) 
{

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css"> 
         <link rel="stylesheet" href="css/style5.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>close</title>
</head>
<body>
    <form action="end.php" method="post" class="form1">
    <h1 align=center style=color:red;>WARNING<h1>
    <p align=center>ARE YOU SURE , YOU WANT TO CLOSE THE FOLLOWUP.<BR>AFTER CLOSING YOU CAN'T FOLLOW UP AND IT SHOULD BE LISTED IN CLOSED LIST .</p>
 <input type="hidden" name="iiz" value="<?php echo $row3['id'];?>">
 <input type="hidden" name="pend" value="2">
        <input onclick="myFunction()" class="sub" type="submit" value="CLOSE"  name="itsss">
        <script>
function myFunction() {
  alert("CLOSING FOLLOWUP!");
}
</script>
    </form>

    <?php
            }
          ?>  
  <?php
$conn->close();
?> 
</body>
</html>



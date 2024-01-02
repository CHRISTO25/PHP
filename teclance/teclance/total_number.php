<?php
 require 'reg_database.php';



$sql = "SELECT * FROM reg_form";
$result = mysqli_query($conn, $sql);

echo mysqli_num_rows($result);

mysqli_close($conn);






// $sql = "SELECT count(id) as countdata FROM reg_form";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
  
//   while($row = mysqli_fetch_assoc($result)) {
//    echo $row["countdata"];
//   }
// } else {
//   echo "0 results";
// }

// mysqli_close($conn);

?>
<?php 
// Include the database config file 
include_once 'reg_database.php'; 
 
if(!empty($_POST["course_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM amount WHERE course_id = ".$_POST['course_id']." AND status = 1 ORDER BY amount ASC"; 
    $result3 = $conn->query($query); 
     
    // Generate HTML of state options list 
    if($result3->num_rows > 0){ 
        echo '<option value="">Select amount</option>'; 
        while($row3 = $result3->fetch_assoc()){  
            echo '<option value="'.$row3['amount_id'].'">'.$row3['amount'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">amount not available</option>'; 
    } 
}
elseif(!empty($_POST["amount_id"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM reg_form WHERE course = ".$_POST['amount_id']." AND status = 99 AND pen != 2 ORDER BY course ASC"; 
    $result3 = $conn->query($query); 
     
    // Generate HTML of city options list 
    if($result3->num_rows > 0){ 
        echo '<option value="">Select student</option>'; 
        while($row3 = $result3->fetch_assoc()){  
            echo '<option value="'.$row3['id'].'">'.$row3['name'].'</option>'; 
        } 
    }
    else{ 
        echo '<option value="">student not available</option>'; 
    } 
} 
?>
<?php

require 'reg_database.php';
$ee=$_POST['cname'];

$sql44= "SELECT * FROM `amount` WHERE course_id = $ee";
$result44=$conn->query($sql44);
                
            while($row44 = $result44->fetch_assoc()) 
            {
           $e = $row44['amount_id'];
           $ed=$row44['course_id'];
            }
 $sql444= "SELECT * FROM `courses` WHERE course_id = $ed";
$result444=$conn->query($sql444);
                
            while($row444 = $result444->fetch_assoc()) 
            {
           $tri = $row444['course_name'];
          
            }


// print_r($_POST);
 $a=$_POST['fname'];
  $b=$_POST['emai'];
   $c=$_POST['numbe'];
    $d=$_POST['addres'];
     //----------
      $f=$_POST['dat'];
       $g=$_POST['iname'];
        $h=$_POST['pname'];
         $i=$_POST['numb'];
          // $j=$_POST['fname'];
          //  $k=$_POST['fname'];

 //to add photo
 
 $whitelist = array(".jpg", ".jpeg", ".png",".webp");
  
  foreach ($whitelist as $item) 
  {
  if(preg_match("/$item\$/i", $_FILES['pic']['name'])) 
  {
  $photo=$_FILES['pic']['name'];
  if($_FILES['pic']['error']==0)
  {
    
    $ext= strtolower(substr(strrchr($photo,"."),1));
    $elen=strlen($ext);
    $flen=strlen($photo);
    $slen=$flen-$elen-1;
    $sname=substr($photo,0,$slen);
     $pho="profile-".date("dmy").time()."1".".".$ext;

    
    move_uploaded_file($_FILES["pic"]["tmp_name"],"./upload/".$pho);
    
  } 
  }
  }

//to Add signature

  $whitelist = array(".jpg", ".jpeg", ".png",".webp");
  
  foreach ($whitelist as $item) 
  {
  if(preg_match("/$item\$/i", $_FILES['sig']['name'])) 
  {
  $photo=$_FILES['sig']['name'];
  if($_FILES['sig']['error']==0)
  {
    
    $ext= strtolower(substr(strrchr($photo,"."),1));
    $elen=strlen($ext);
    $flen=strlen($photo);
    $slen=$flen-$elen-1;
    $sname=substr($photo,0,$slen);
     $phot="profile-".date("dmy").time()."1".".".$ext;

    
    move_uploaded_file($_FILES["sig"]["tmp_name"],"./signature/".$phot);
    
  } 
  }
  }

 
 
$sql= "INSERT INTO `reg_form`( `email`, `contact`, `address`, `course`, `date of joining`, `instituion`, `contact person name`, `cp contact`, `name`,`photo`,`signature`,`courses`) VALUES ('$b','$c','$d','$e','$f','$g','$h','$i','$a','$pho','$phot','$tri')";
// $conn->query($sql);  
 



if ($conn->query($sql) === TRUE) {
      header("Location:index.php");
         }  
        
 else {
          echo "Error: " . $sql . "<br>" . $conn->error;
       }$conn->close();



?>
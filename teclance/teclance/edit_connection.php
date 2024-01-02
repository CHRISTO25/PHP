<?php
 include("reg_database.php");


 //print_r($_POST);
  

$a=$_POST['fname'];
  $b=$_POST['emai'];
   $c=$_POST['numbe'];
    $d=$_POST['addres'];
     $e=$_POST['cname'];
      $f=$_POST['dat'];
       $g=$_POST['iname'];
        $h=$_POST['pname'];
         $i=$_POST['numb'];
          $zz=$_POST['iii'];
         
          

   

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


$sql= "UPDATE `reg_form` SET `email`='$b',`contact`='$c',`address`='$d',`course`='$e',`date of joining`='$f',`instituion`='$g',`contact person name`='$h',`cp contact`='$i',`name`='$a',`photo`='$pho' WHERE `id`='$zz'";



if ($conn->query($sql) === TRUE) {
         echo "New record updated successfully";
         } 
else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }$conn->close();  

 header("Location:index.php"); 
?>
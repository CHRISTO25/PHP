<?php
session_start();

if(isset($_SESSION["loginstatus"]) && $_SESSION["loginstatus"]=='yes')
    {
// echo "set";
    }
else
    {
        header("location: ./signin.php");
    }
include("reg_database.php");

$uuid=$_SESSION["USERID"];
 $ids = $_GET['ids'];
$sql3= "SELECT * FROM `reg_form` WHERE `id`='$ids'";
$result3=$conn->query($sql3);

$uuid=$_SESSION["USERID"];
$sql31= "SELECT * FROM `login` WHERE `id`='$uuid'";
$result31=$conn->query($sql31);
 while($row31 = $result31->fetch_assoc()) 
                    {
                        $nameuser=$row31['username'];
                        }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>zntra</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
         <link rel="stylesheet" href="css/style3.css"> 
</head>
<body class="bdy">
  <?php
                    while($row3 = $result3->fetch_assoc()) 
                    {
                    
                ?>
  <div class="container">
    <div class="form1">
      <form class="frm" action="pending_connection.php" method="post">
              <!-- <div class="row">
                      <div  class="cls col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4">
                           <img src="upload/<?php echo $row3['photo'];?>" style="height: 300px;width: 300px;">
                      </div>
                      <div class="cls rr col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-8">
                                <div class="cls1">
                                       <label>Name</label>
                                </div>
                                <div class="in3">
                                   <input type="text" name="yy"  value="  " readonly>  
                                </div>
                                <div class="cls1">
                                       <label>Cource</label>
                                </div>
                                <div class="in1">
                                        
                                </div>
                                <div class="cls1">
                                       <label>Phone NUMBER</label>
                                </div>
                                <div class="in1">
                                       
                                </div>
                                 <div class="cls1">
                                       <label>EMAIL</label>
                                </div>
                                <div class="in1">
                                      
                                </div>
                      </div>
              </div> -->
          <h3 align="center">DETAILS</h3>


              <div class="row">
                        <div  class="cls mm col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                                 <div>
                              <label>NAME</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['name'];?>
                              </div>
                       </div>
                         <div class="in col-6 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                               <div>
                              <label>COURSE</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['course'];?>
                              </div>
                       </div>
              </div>
              <div class="row">
                        <div  class="cls mm col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                                 <div>
                              <label>CONTACT</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['contact'];?>
                              </div>
                       </div>
                         <div class="in col-6 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                               <div>
                              <label>EMAIL</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['email'];?>
                              </div>
                       </div>
              </div>
              <div class="row">
                        <div  class="cls mm col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                                 <div>
                              <label>ADDRESS</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['address'];?>
                              </div>
                       </div>
                         <div class="in col-6 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                               <div>
                              <label>DATE OF JOINING</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['date of joining'];?>
                              </div>
                       </div>
              </div>
              <div class="row">
                        <div  class="cls mm col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                                 <div>
                              <label>INSTITUTION</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['instituion'];?>
                              </div>
                       </div>
                         <div class="in col-6 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                               <div>
                              <label>CONTACT PERSON</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['contact person name'];?>
                              </div>
                       </div>
              </div>
              <div class="row">
                        <div  class="cls mm col-6 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                                 <div>
                              <label>GUARDIAN</label> 
                              </div>
                              <div class="column">
                              <?php echo $row3['cp contact'];?>
                              </div>
                       </div>
                         <div class="in col-6 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                               <div>
                              <label>FOLLOW UP</label> 
                              </div>
                              <div class="column">
                              <textarea class="texta" name="texta"></textarea>
                              </div>
                       </div>
              </div>
            
             
               <div class="row">
                        <div  class="cls mm col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                         
                        </div>
                        <div class="in col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                          
                           <input type="hidden"  name="useriid" value="<?php echo $nameuser;?>">
                           <input type="hidden"  name="iddd" value=" <?php echo $row3['id'];?> ">
                        </div>
              </div>
              <input class="sbu" type="submit" value="SUBMIT">
        
      </form>
    
      
    </div>
    
  </div>
   <?php
            }
          ?>  
  <?php
$conn->close();
?>  
<script src="js/jquery.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>
</html>
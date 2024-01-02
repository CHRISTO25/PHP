    <?php
  include("reg_database.php");
  $ids=$_GET['ids'];
  $sql = "SELECT * FROM `reg_form` WHERE `id`='$ids'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
 
  $ids;
?>           



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>registration</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"> 
         <link rel="stylesheet" href="css/style1.css"> 
</head>

<body>

    <div class=" ha">
        <div class="form1">
            <form class="clsi" action="edit_connection.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="cls col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                            <img src="img/logo.png">
                    </div>
                    <div class="cls col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <p>#2,Excel Tower, <br>      
                           Star junction,Kottayam.<br>
                           WWW.techlanceindia.com
                        </p>
                    </div>

                </div>
                <h1 align="center"><u>Registration Form</u></h1>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Full Name</label>   
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="text" name="fname"  value="<?php echo $row['name'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Email</label>   
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="Email" name="emai" value="<?php echo $row['email'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Phone</label>   
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="number" name="numbe" value="<?php echo $row['contact'];?>" 
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                
                maxlength = "10" required>
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Address</label> 
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="text" name="addres" value="<?php echo $row['address'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> course/Trainng Name</label> 
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="text" name="cname"  value="<?php echo $row['course'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label>Date Of Joining</label>  
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="date" name="dat" value="<?php echo $row['date of joining'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Institution Name</label>    
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="text" name="iname" value="<?php echo $row['instituion'];?>">
                    </div>

                </div>
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Contact Person Name</label> 
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="text" name="pname" value="<?php echo $row['contact person name'];?>">
                    </div>

                </div>

                    <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> photo</label>   
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                      <!--   <img src="upload/<?php echo $row['photo'];?>" style="height: 60px;width: 60px;"> -->
                        <input type="file" name="pic" value="<?php echo $row['photo'];?>" >
                    </div>

                </div>
                <!-- <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                        <label> signature</label>   
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-6">
                        <input type="file" name="sig">
                    </div>

                </div> -->
                <div class="row">
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-4">
                        <label> Contact Person Mobile Number</label>    
                    </div>
                    <div class="cls col-12 col-sm-6 col-md-6 col-lg-6 col-xl-8 col-xxl-8">
                        <input type="number" name="numb" value="<?php echo $row['cp contact'];?>"
                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                
                        maxlength = "10" required>
                    </div>

                </div>
                <input type="hidden" name="iii" value="<?php echo $row['id'];?>">
                <input class="sub" type="submit" value="Submit"  name="sub"  >
            </form>
        </div>
    </div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
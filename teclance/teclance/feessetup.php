


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
?>
<?php
include("reg_database.php");
$sql3= "SELECT * FROM `reg_form` WHERE status !=99;";
$result3=$conn->query($sql3);


 $uuid=$_SESSION["USERID"];
$sql31= "SELECT * FROM `login` WHERE `id`='$uuid'";
$result31=$conn->query($sql31);
 while($row31 = $result31->fetch_assoc()) 
                    {
                        $nameuser=$row31['username'];
                        }




?>
<?php
 $_SESSION['USERID'].'<br>'.$_SESSION['PRIORITY'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>TISSER - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add admin</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
         <link rel="stylesheet" href="css/style4.css"> 
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>TECHLANCE</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?php echo $nameuser;?></h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.php" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>TECHLANCE</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>FEES</a> 
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="feessetup.php" class="dropdown-item">FEES SETUP</a>
                            <a href="feepayment.php" class="dropdown-item">FEE PAYMENT</a>
                    </div>
                    <a href="fulldetail.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>FULL DETAILS</a>

                    <?php
                                if($_SESSION['PRIORITY']==1)
                                {
                                
                            ?>
                   
                  <a href="signup.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>ADD ADMINS</a>
                  <a href="courses.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>ADD COURSE</a>
                    <?php
                        }
                    ?>  
              
                    
                    
                    <a href="reg_form.php" class="nav-item nav-link"><i class="fa fa-table me-2"></i>ADD TRAINEE</a>
                     <?php
                                if($_SESSION['PRIORITY']==1)
                                {
                                
                            ?>
                    <a href="chart.php" class="nav-item nav-link "><i class="fa fa-chart-bar me-2"></i>ENQUIRY</a>
                     <?php
                        }
                    ?>  
                   <!--  <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                           <!--  <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a> -->
                            <a href="404.php" class="dropdown-item">404 Error</a>
                            <a href="blank.php" class="dropdown-item active">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/logo.png" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $nameuser;?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Blank Start -->


	<div class=" ha">
		<div class="form1">
			<form class="clsi" action="courses_connection.php" method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="cls col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
							<img src="img/logo.png">
					</div>
					<div class="cls col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
						<p>#2,Excel Tower, <br>      
						   Star junction,<br>
                           Kottayam.
						
						</p>
					</div>

				</div>
				<h2 align="center"><u>PAYMENT SETTINGS</u></h2><br><br>
                <div class="row">
                        <div  class="cls mm col-12 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
                        
                         <label>COURSES :</label> 
                        </div>
                        <div class="in col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                          
                        <table  id="example" class="table table-striped table-bordered" style="width:100%">
<thead>

<tr class="text-dark">
    <th><b>SL.NO</b></th>
    <th><b>student</b></th>
    <th><b>installment</b></th>
    <th><b>status</b></th>
   
     <!--  <th><b>SIGNATURE</b></th> -->


</tr>
</thead>
<tbody>



                                    <?php
                                    
                                $i=1;
                                while($row3 = $result3->fetch_assoc()) 
                                {

                                
                                ?>
  <tr>
                                <td > <?php echo $i; ?></td>
                                <td><?php echo $row3['name'];?></td>
                                <td><?php echo $row3['status'];?></td>
                              <td>  <a class="btn btn-sm btn-primary" href="paymentdetails.php?ids=<?php echo $row3['id'];?>">DETAIL</a></td>
                             
                            </div>
                                 
                                </tr>


                                    
                                    <?php
                               $i++;
                                }
                         
                             ?>
                           </tbody>
                     
                            
                     </table>   
                          
                            </div>
                               
              </div>
				
				
<input class="sub" type="submit" value="SAVE"  name="sub"  >
				</div>
				
			</form>
		</div>
	</div>
<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

 <!-- Blank End -->


            <!-- Footer Start -->
            <!-- <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            <!-- Designed By <a href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                    </div>
                </div>
            </div> --> 
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a> -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</body>

</html>
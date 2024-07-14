<?php
    include('../config.php');
    if(!isset($_SESSION['ad_id'])){
      echo "<script>window.location='login.php';</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Update Job | RICH</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- site icon -->
  <link rel="icon" href="images/page_icon.png" type="image/png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <!-- site css -->
  <link rel="stylesheet" href="style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="css/responsive.css" />
  <!-- color css -->
  <link rel="stylesheet" href="css/colors.css" />
  <!-- select bootstrap -->
  <link rel="stylesheet" href="css/bootstrap-select.css" />
  <!-- scrollbar css -->
  <link rel="stylesheet" href="css/perfect-scrollbar.css" />
  <!-- custom css -->
  <link rel="stylesheet" href="css/custom.css" />
  <!-- calendar file css -->
  <link rel="stylesheet" href="js/semantic.min.css" />
  <!-- fancy box js -->
  <link rel="stylesheet" href="css/jquery.fancybox.css" />

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="form/fonts/icomoon/style.css">

  <link rel="stylesheet" href="form/css/owl.carousel.min.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="form/css/bootstrap.min.css">

  <!-- Style -->
  <link rel="stylesheet" href="form/css/style.css">

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="inner_page tables_page">
  <div class="full_container">
    <div class="inner_container">
      <!-- Sidebar  -->
      <?php
include("sidebar.php");
?>
      <!-- end sidebar -->
      <!-- right content -->
      <div id="content">
        <!-- topbar -->
        <?php
include("header.php");
?>
        <!-- end topbar -->
        <!-- dashboard inner -->
        <div class="midde_cont">
          <div class="container-fluid">
            <div class="row column_title">
              <div class="col-md-12">
                <div class="page_title">
                  <h2></h2>
                </div>
              </div>
            </div>
            <!-- row -->
            <div class="row">
              <!-- table section -->
              <div class="d-lg-flex half" style="width: 1020px; min-height: 656px;">
                <div class="bg order-1 order-md-2" style="background-image: url('form/images/bg_1.jpg'); height: 625px;"></div>
                <div class="contents order-2 order-md-1">

                  <div class="container">
                    <div class="row align-items-center justify-content-center" style="height: 100vh; min-height: 625px;">
                      <div class="col-md-7 py-5">
                        <h3>Update Jobs</h3>
                        <p class="mb-4">Create A Better Future For Yourself</p>
                        <?php
                                $admin = new Admin();
                                if(isset($_GET['j_id'])){
                                    $j_id=$_GET['j_id'];
                                   $query = "SELECT * FROM `job` WHERE `j_id`='$j_id'";
                                   $stmt = $admin->ret($query);
                                  $row = $stmt->fetch(PDO::FETCH_ASSOC);
                                  echo '<form action="controler_admin/update_job.php" method="post">
                                  <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="fname">Designation</label>
                                <input type="text" class="form-control" value="'.$row['job_designation'].'" pattern="[A-Z a-z]+" title="letters only" placeholder="e.g. developer" id="fname" name="designation" required>
                                <input type="text" class="form-control" value="'.$row['j_id'].'" placeholder="e.g. developer" id="fname" name="j_id" required hidden>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Email address</label>
                                <!-- <input type="text" class="form-control" placeholder="e.g. Smith" id="lname"> -->
                                <input type="email" class="form-control" value="'.$row['job_address'].'" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" placeholder="e.g. john@your-domain.com" name="email" required      id="email">

                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Phone Number</label>
                                <input type="tel" class="form-control" value="'.$row['job_phone_no'].'" maxlength="10" minlength="10" pattern="[0-9]{10}" placeholder="0000 000 0000" name="phone_no"  required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Website</label>
                                <input type="text" class="form-control" value="'.$row['job_website'].'" placeholder="e.g. https://google.com" name="website"  required  id="lname">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">No. of Jobs</label>
                                <input type="number" class="form-control" value="'.$row['job_no_of_jobs'].'" placeholder="000" name="no_of_jobs" required id="lname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Salary</label>
                                <input type="number" class="form-control" value="'.$row['job_salary'].'" placeholder="00000" name="salary"  required  id="lname">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">location</label>
                                <input type="text" class="form-control" value="'.$row['j_location'].'" placeholder="manglore" name="location"  required  id="lname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Job Type</label>
                                <select class="form-control" name="job_type" id="" value="'.$row['job_type'].'">
                                  <option value="Part Time">Part Time</option>
                                  <option value="Full Time">Full Time</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="000" name="no_of_jobs" required id="lname"> -->
                              </div>
                            </div>
                            
                            
                          </div>
                         

                          <input type="submit" value="Add Now" class="btn px-5 btn-primary">
        
                                </form>';
                                }
                        ?>

                        </div>
                    </div>
                  </div>
                </div>


              </div>
              <!-- table section -->
              <div class="col-md-6">
                <div class=" full margin_bottom_30" style="width: 1030px;">

                  <!-- table section -->

                  <!-- footer -->
                  <div class="container-fluid">
                    <div class="footer">
                      <p>Copyright © 2022. All rights reserved.</p>
                    </div>
                  </div>
                </div>
                <!-- end dashboard inner -->
              </div>
            </div>
            <!-- model popup -->
            
          </div>
          <!-- jQuery -->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <!-- wow animation -->
          <script src="js/animate.js"></script>
          <!-- select country -->
          <script src="js/bootstrap-select.js"></script>
          <!-- owl carousel -->
          <script src="js/owl.carousel.js"></script>
          <!-- chart js -->
          <script src="js/Chart.min.js"></script>
          <script src="js/Chart.bundle.min.js"></script>
          <script src="js/utils.js"></script>
          <script src="js/analyser.js"></script>
          <!-- nice scrollbar -->
          <script src="js/perfect-scrollbar.min.js"></script>
          <script>
            var ps = new PerfectScrollbar('#sidebar');
          </script>
          <!-- fancy box js -->
          <script src="js/jquery-3.3.1.min.js"></script>
          <script src="js/jquery.fancybox.min.js"></script>
          <!-- custom js -->
          <script src="js/custom.js"></script>
          <!-- calendar file css -->
          <script src="js/semantic.min.js"></script>
          <!-- form  -->
          <script src="form/js/jquery-3.3.1.min.js"></script>
          <script src="form/js/popper.min.js"></script>
          <script src="form/js/bootstrap.min.js"></script>
          <script src="form/js/main.js"></script>



</body>

</html>
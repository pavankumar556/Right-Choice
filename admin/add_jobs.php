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
  <title>Jobs | RICH</title>
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
                        <h3>Add Jobs</h3>
                        <p class="mb-4">Create A Better Future For Yourself</p>
                        <form action="add_jobs.php" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="fname">Designation</label>
                                <input type="text" class="form-control" pattern="[A-Z a-z]+" title="letters only" placeholder="e.g. developer" id="fname" name="designation" required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Email address</label>
                                <!-- <input type="text" class="form-control" placeholder="e.g. Smith" id="lname"> -->
                                <input type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" placeholder="e.g. john@your-domain.com" name="email" required      id="email">

                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Phone Number</label>
                                <input type="tel" class="form-control" maxlength="10" minlength="10" pattern="[6-9]{1}[0-9]{9}" title="It starts by either looking for 7 or 8 or 9, and then followed by 9 digits." placeholder="0000 000 0000" name="phone_no"  required>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Website</label>
                                <input type="text" class="form-control" placeholder="e.g. https://google.com" name="website"  required  id="lname">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">No. of Jobs</label>
                                <input type="number" class="form-control" placeholder="000" name="no_of_jobs" required id="lname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Salary</label>
                                <input type="number" class="form-control" placeholder="00000" name="salary"  required  id="lname">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                          <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">location</label>
                                <input type="text" class="form-control" placeholder="manglore" name="location"  required  id="lname">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Job Type</label>
                                <select class="form-control" name="job_type" id="">
                                  <option value="Part Time">Part Time</option>
                                  <option value="Full Time">Full Time</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="000" name="no_of_jobs" required id="lname"> -->
                              </div>
                            </div>
                            
                            
                          </div>
                          <div class="d-flex mb-5 mt-4 align-items-center">
                            <div class="d-flex align-items-center">
                              <label class="control control--checkbox mb-0"><span class="caption">I have entered the correct data. and I agree the<a href="#">Terms and Conditions</a> and our <a
                                    href="#">Privacy Policy</a>.</span>
                                <input type="checkbox" checked="checked" />
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                          </div>

                          <input type="submit" value="Add Now" class="btn px-5 btn-primary">

                        </form>
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




          <?php
// include("../config.php");
$admin = new Admin();
if (isset($_POST['designation'])) {
  $designation = $_POST['designation'];
  $email = $_POST['email'];
  $phone_no = $_POST['phone_no'];
  $website = $_POST['website'];
  $no_of_jobs = $_POST['no_of_jobs'];
  $salary = $_POST['salary'];
  $job_type = $_POST['job_type'];
  $location = $_POST['location'];
  $query_register = "INSERT INTO `job`(`job_designation`, `job_address`, `job_phone_no`, `job_website`, `job_no_of_jobs`, `job_salary`,`job_type`,`j_location`)VALUES('$designation','$email','$phone_no','$website','$no_of_jobs','$salary','$job_type','$location');";
  $result = $admin->cud($query_register, "Insertion Successful");
  echo "<script>window.location='job_view.php';</script>";

}



?>
</body>

</html>
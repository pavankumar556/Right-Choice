<?php
include('../config.php');
if (!isset($_SESSION['c_id'])) {
  echo "<script>window.location='login/index.php';</script>";
}
$admin=new Admin();
$query = $admin->ret("SELECT * FROM `centre` WHERE `c_id`=" . $_SESSION['c_id']);
$number_of_rows = $query->rowCount();
if ($number_of_rows > 0) {
  $row = $query->fetch(PDO::FETCH_ASSOC);
  $c_name = $row['c_name'];
}
else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Centre | RICH</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <!-- Favicon  -->
    <link rel="icon" href="images/page_icon.png">
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php
include("sidebar.php");
?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php
include("header.php");
?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                       // include("../config.php");
                                       $admin = new Admin();
                                       $query = "SELECT * FROM `request`";
                                       $stmt = $admin->ret($query);
                                       $cou=0;
                                       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        if($row['c_id']==$_SESSION['c_id']){

                                          if($row['req_requst']==""){
                                            $cou++;
                                          }
                                        }
                                       }
                                       echo '<h3 class="mb-0">'.$cou.'</h3>';

                                       ?>

                                                <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                                                <i class='far fa-bell' style='font-size:22px;color:#00d25b'></i>

                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Requests</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <h3 class="mb-0"><span id="count"></span></h3>
                                                <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                                <script>
                                                startTime();

                                                function startTime() {
                                                    var dt = new Date();
                                                    var hours = dt.getHours()
                                                    var minute = dt.getMinutes();
                                                    var seconds = dt.getSeconds();
                                                    hours = (hours % 12) || 12;
                                                    document.getElementById("count").innerHTML = hours + ":" + minute +
                                                        ":" + seconds;
                                                    // console.log("Time is - " + hours + ":" + minute+":"+seconds);
                                                    setTimeout(function() {
                                                        startTime()
                                                    }, 1000);
                                                }
                                                </script>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success">
                                                <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                                                <i class='far fa-clock' style='font-size:22px;color:#00d25b'></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Current Time</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                       // include("../config.php");
                                       $admin = new Admin();
                                       $query = "SELECT * FROM `post`";
                                       $stmt = $admin->ret($query);
                                       $cou=0;
                                       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        if($row['c_id']==$_SESSION['c_id']){
                                          $cou++;
                                        }
                                       }
                                       echo '<h3 class="mb-0">'.$cou.'</h3>';

                                       ?>

                                                <p class="text-danger ml-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success">
                                                <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                                                <i class="fa fa-cloud" style="font-size:22px;color:#00d25b"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Total Posts</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-9">
                                            <div class="d-flex align-items-center align-self-start">
                                                <?php
                                       // include("../config.php");
                                       $admin = new Admin();
                                       $query = "SELECT * FROM `request`";
                                       $stmt = $admin->ret($query);
                                       $cou=0;
                                       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                        if($row['c_id']==$_SESSION['c_id']){
                                        if($row['req_requst']=="Approved"){
                                          $cou++;
                                        }
                                      }
                                       }
                                       echo '<h3 class="mb-0">'.$cou.'</h3>';

                                       ?>
                                                <!-- <h3 class="mb-0">$31.53</h3> -->
                                                <p class="text-success ml-2 mb-0 font-weight-medium"></p>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="icon icon-box-success ">
                                                <!-- <span class="mdi mdi-arrow-top-right icon-item"></span> -->
                                                <i class='far fa-eye' style='font-size:22px;color:#00d25b'></i>

                                            </div>
                                        </div>
                                    </div>
                                    <h6 class="text-muted font-weight-normal">Students</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                            2022</span>
                        <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span> -->
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
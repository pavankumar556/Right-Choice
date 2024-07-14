<?php
include('../config.php');
if (!isset($_SESSION['c_id'])) {
  echo "<script>window.location='../login/index.php';</script>";
}
$admin = new Admin();
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
    <title>View Test | RICH</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <!-- Favicon  -->
    <link rel="icon" href="images/page_icon.png">


    <style>
    .card {
        width: 100%;
        height: fit-content;
        background-color: #ffffff;
        border-radius: 13px;
        text-align: center;
        margin: auto;
        box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
    }

    .inner_div {
        width: 95%;
        height: fit-content;
        background: #0f1e2b;
        margin: 25px;
        border-radius: 8px;
        text-align: left;
        padding-left: 30px;
        color: #ffffff;

    }

    .input_type {
        width: 26%;
        height: 33px;
        border: none;
        background: #e91111;
        border-radius: 4px;
        padding-left: 15px;
        color: white;
    }

    .input_delete {
        float: right;
        margin-right: 10px;
        padding-right: 5px;
        background: red;
        width: 15%;
        padding: 8px;
        text-align: center;
        border-radius: 7px;
        color: white;
        border: 2px solid black;
        text-decoration: none;
        /* margin-top: -8px; */
    }

    .input_update {
        float: right;
        color: black;
        margin-right: 10px;
        padding-right: 5px;
        background: yellow;
        width: 15%;
        padding: 8px;
        text-align: center;
        border-radius: 7px;
        border: 2px solid black;
        border: 2px solid black;
        text-decoration: none;
    }

    .table_id {
        width: 5%;
        height: fit-content;
        background: white;
        margin-left: 0px !important;
        text-align: center;
        border-bottom-right-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    h6 {
        color: #6c7293;
    }
    </style>
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
                    <!-- <div class="card"> -->
                        <?php
                                $admin = new Admin();
                                $query = "SELECT * FROM `apti_test`";
                                $stmt = $admin->ret($query);
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                 if($row['apt_type']==="centre"){
                                    $post_id=$_GET['p_id'];
                                  if($row['p_id']==$post_id){
                                    echo '<div class="inner_div">
                                    <br>
                                    <h6>'.$row['apt_stream'].'</h6>
                                    <h4 style="text-align:left;  color: white;">'.$row['apti_test_qution'].'</h4>
                                    <input type="text" value="'.$row['apt_answer'].'" placeholder="Right answer." class="input_type" readonly style="background: green;">
                                    <a type="submit"  class="input_delete" href="controler_center/delete_test_qution.php?apt_id='.$row['apt_id'].'"><b>DELETE</b> </a><br><br>
                                    <input type="text"  readonly class="input_type" value="'.$row['apt_option1'].'" style="background: #ff8900;">
                                    <a type="submit"  class="input_update" href="update_post_test.php?apt_id='.$row['apt_id'].'"><b>UPDATE</b></a><br><br>
                                    <input type="text"  readonly class="input_type" value="'.$row['apt_option2'].'" style="background: #ff5722;"><br><br>
                                    <input type="text"  readonly class="input_type" value="'.$row['apt_option3'].'" style="background: #331a12;"><br><br>
                                    <br>
                                   
                                </div>';
                                  }
                                    
                                 }
                                }
                            ?>
                    <!-- </div> -->
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
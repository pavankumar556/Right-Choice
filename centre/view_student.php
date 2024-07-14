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
    <title>View Student | RICH</title>
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
        float: left;
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
                    <?php
                                // $admin = new Admin();
                                $query = "SELECT * FROM `request`";
                                $stmt = $admin->ret($query);
                                $ac=1;
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                  if($row['c_id']==$_SESSION['c_id']){
                                    if($row['req_requst']=="Approved"){


                                      $s_id=$row['s_id'];
                                      $query_stu = "SELECT * FROM `student` WHERE `s_id`='$s_id'";
                                      $stmt_tu = $admin->ret($query_stu);
                                      $row_stu = $stmt_tu->fetch(PDO::FETCH_ASSOC);
    
                                      $p_id=$row['p_id'];
                                      $query_post = "SELECT * FROM `post` WHERE `p_id`='$p_id'";
                                      $stmt_post = $admin->ret($query_post);
                                      $row_post = $stmt_post->fetch(PDO::FETCH_ASSOC);
                                      if($row['req_score']==0){
                                        $score='NULL';
                                      }else{
                                        $score=$row['req_score'];
                                      }
                                        echo '<div class="inner_div" style="overflow:hidden;" >
                                      <div class="table_id">
                                        <h3 style="color: black;">'.$ac.'</h3>
                          
                                      </div>
                                      <div style="float: right;">';
                                      if($row_stu['s_img']==""){
                                          echo '<img style="height: 158px;"src="data:image/jpeg;base64,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"/>';
                                      }else{
                                          echo '<img style="height: 158px;"src="../UploadImage/'.$row_stu['s_img'].'"/>';

                                      }
                                      
                                      echo '
                                        </div>
                                      <br>
                                      <br>
                                      <div style="float: left;margin-right: 30px;">
                                        <h6>Name</h6>
                                        <h3 style="color: white;">'.$row_stu['s_name'].'</h3>
                                        
                                       
                                      </div>
                                      <div style="float: left;margin-right: 30px;">
                                        <h6>Post Name</h6>
                                        <h3 style="color: white;">'.$row_post['p_name'].'</h3>
                                        
                                       
                                      </div>
                                      <div style="float: left;margin-right: 30px;">
                                        <h6>Marks</h6>
                                        <h3 style="color: white;">'.$score.'</h3>
                                        
                                       
                                      </div>
                                      <div style="float: left;margin-right: 30px;">
                                        <h6>Email Id</h6>
                                        <h3 style="color: white;">'.$row_stu['s_email_id'].'</h3>
                                        
                                       
                                      </div>
                                      
                                    </div>';
                                    $ac++;
                                  }
                                
                                

                                  }
                                }
                               
                                
        ?>
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
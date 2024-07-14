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
  $c_email_id = $row['c_email_id'];
  $c_id = $row['c_id'];
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
    <title>FeedBack | RICH</title>
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
        height: 500px;
        background-color: #ffffff;
        border-radius: 13px;
        text-align: center;
        margin: auto;
        box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
    }

    .inner_div {
        width: 95%;
        height: 500px;
        background: #191c24;
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
        background: #191c24;
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
    .background_div{
         width: 70%;
         height: fit-content;
         background-color: #191c24;
         border-radius: 13px;
         text-align: center;
         margin: auto;
         box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
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
                <table>
                        <tr>
                       <div class="background_div">
                        <br>
                        <h3>FeedBack</h3>
                        <br>
                        <form action="controler_center/feedback_submit.php" method="post">
                           <!-- <p style="text-align: left;padding-left: 15px;">Comment</p> -->
                                                 
                           <textarea type="text" name="msg" minlength="100" id="" placeholder="Comment" style="    border: 3px solid #12a24e;
                              width: 80%;
                              height: 100px;
                              border-radius: 4px; 
                              color:white;     
                              background: #030101; 
                              padding-left: 15px;
                           " required   cols="40" rows="10"></textarea>
                           <input type="text" name='c_id' value="<?php echo $c_id; ?>" hidden>
                           <input type="text" name='name' value="<?php echo $c_name; ?>" hidden>
                           
                           <br><br>
                              <input type="submit" style="width: 100%;
                                 height: 60px;
                                 background: #fff000;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;" onclick="style.background='#22950d';" value="POST">
                                                         

                        </form>

                       </div>
                        </tr>
                     </table>
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
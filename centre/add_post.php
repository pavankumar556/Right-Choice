<?php
include('../config.php');
if (!isset($_SESSION['c_id'])) {
  echo "<script>window.location='../login/index.php';</script>";
}
$c_id=$_SESSION['c_id'];
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
    <title>Add Post | RICH</title>
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
      .bg_content{
          width: 100%;
          height: fit-content;
          background: #191c24;
          border-radius: 6px;
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
            <div class="bg_content">
            <div class="d-lg-flex half" style="width: 1020px; min-height: 656px;">
                <!-- <div class="bg order-1 order-md-2" style="background-image: url('form/images/bg_1.jpg'); height: 625px;"></div> -->
                <div class="contents order-2 order-md-1"style="width: 90%;">

                  <div class="container">
                    <div class="row align-items-center justify-content-center" style="height: 100vh; min-height: 625px;">
                      <div class="col-md-7 py-5">
                        <h3>Add Streams</h3>
                        <p class="mb-4">Create A Better Future For Student.</p>
                        <form action="controler_center/add_center_post.php" method="post">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="fname">Stream Name</label>
                                <select name="p_name" class="form-control" id="stream_name">
                                  <option value="Arts">Arts</option>
                                  <option value="Commerce">Commerce</option>
                                  <option value="Science">Science</option>
                                  <option value="Diploma">Diploma</option>
                                  <option value="ITI">ITI</option>
                                </select>
                                <!-- <input type="text" class="form-control" placeholder="e.g. arts" id="stream_name" name="p_name" required> -->
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Duration</label>
                                <!-- <input type="text" class="form-control" placeholder="e.g. Smith" id="lname"> -->
                                <!-- <input type="text" class="form-control" placeholder="e.g. 3.yrs" name="p_duration" required      id="email"> -->
                                <select name="p_duration" class="form-control" id="stream_name" required>
                                  <option value="6 Months">6 Months</option>
                                  <option value="1.yr">1 Year</option>
                                  <option value="2.yr">2 year</option>
                                  <option value="3.yr">3 Year</option>
                                  <option value="4.yr">4 Year</option>
                                  <option value="5.yr">5 year</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="row"><div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Description</label>
                                <textarea class="form-control" minlength="50" placeholder="e.g. about the stream" name="p_description" required  cols="40" rows="10" style="width:210%;  height:100px;"     id="email" required></textarea>
                                
                              </div>
                          </div>

                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">longitude</label>
                                <input type="text" class="form-control" pattern="^[0-9]{1,7}(\.[0-9]+)?$" placeholder="00.0000" name="p_longitude" required id="longitude">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">latitude</label>
                                <input type="text" class="form-control" pattern="^[0-9]{1,7}(\.[0-9]+)?$" placeholder="00.0000" name="p_latitude"  required  id="latitude">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Address</label>
                                <input type="text" class="form-control" placeholder="e.g. svs college" name="p_address" required id="longitude">
                                <input type="text" class="form-control"  name="c_id" hidden  value="<?php echo $c_id;?>">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group first">
                                <label for="lname">Seats</label>
                                <input type="number" class="form-control" pattern="[0-9]" placeholder="100" name="p_seats" min="1"  required  id="latitude">
                              </div>
                            </div>
                          </div>
                          <br>
                          <input type="submit" value="Add Now" class="btn px-5 btn-primary" style="    width: 100%; height: 45px;">

                        </form>
                      </div>
                    </div>
                  </div>
                </div>


              </div>

            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©  2022</span>
              <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="index.php" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span> -->
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <script>
      window.navigator.geolocation.getCurrentPosition(function (pos) {
                    document.getElementById("longitude").value=pos.coords.longitude;
                    document.getElementById("latitude").value=pos.coords.latitude;
                // console.log(pos.coords.longitude)
                });
    </script>

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
<?php
include('config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='login/';</script>";
}
$admin = new Admin();
$query = $admin->ret("SELECT * FROM `student` WHERE `s_id`=" . $_SESSION['s_id']);
$number_of_rows = $query->rowCount();
if ($number_of_rows > 0) {
  $row = $query->fetch(PDO::FETCH_ASSOC);
  $s_name = $row['s_name'];
  $s_email_id = $row['s_email_id'];
  $s_id = $row['s_id'];
}
else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jobs | RICH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/page_icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    ::-webkit-scrollbar {
        width: 0px;
    }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <?php
            include("navbar2.php");
        ?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(img/clgbg.png);    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">JOB Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="collegeDetails.php">Job
                                Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Job Details</h6>
                <h1 class="mb-5"></h1>
            </div>
            <div class="row g-4">
                <div style="    width: 80%;
                /* background: yellow; */
                height: fit-content;
                margin: auto;
                ">
                    <?php
if(isset($_GET['j_id'])){

    // include("config.php");
    $j_id=$_GET['j_id'];
    $admin = new Admin();
    $query = "SELECT * FROM `job`  WHERE `j_id`='$j_id'";
    $stmt = $admin->ret($query);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
           
                echo '<div style="
            float: left;
        "><h6 style="color:#52565b;">Job Name</h6>
            <h3>'.$row['job_designation'].'</h3>
            <br>
            <h6 style="color:#52565b;">Job Type</h6>
            <p>'.$row['job_type'].'</p>
            <h6 style="color:#52565b;">Website</h6>
            <p><a href="http://'.$row['job_website'].'" target="_blank" rel="noopener noreferrer">'.$row['job_website'].'</a></p>
           
            <h6 style="color:#52565b;">EMAIL Address</h6>
            <p>'.$row['job_address'].'</p></div>
            <br>
            <div>
            <div style="
            float: left;    margin-left: 60px;
        ">
        <br>
        <h6 style="color:#52565b;">Salary</h6>
        <p>'.$row['job_salary'].'</p>
        <h6 style="color:#52565b;">Avl. Jobs</h6>
        <p style="color:red;">'.$row['job_no_of_jobs'].'</p>
        <h6 style="color:#52565b;">Location</h6>
        <p style="color:red;">'.$row['j_location'].'</p>

            </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="float: left;margin-left: 32px;">
                   
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s"
                    style="float: left; margin-left: 20px;">
                    <h5></h5>
                </div>
            </div>';
           
            
    }
}
?>



                </div>



            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php
            include("footer.php");
        ?>

    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
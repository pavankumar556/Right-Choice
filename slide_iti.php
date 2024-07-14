<?php
include('config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='login/';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student | RICH</title>
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
        
        table{
            width: 100%;
        }
        table tr td {
            border: 1px solid black;
            text-align: center;
            font-size: 20px;
            color: black;

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
        include('navbar2.php');
    ?>
    <!-- Navbar End -->

    <div id="about_section"></div>
    <!-- About Start -->
    <div class="container-xxl py-5" style="stroke: 2px solid red;">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="height: 400px;">
                    <div class="position-relative h-100">
                        <img src="img/about.jpg" alt="" width='100%' height='100%'>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Streams</h6>
                    <h1 class="mb-4">Industrial Training Institute (ITI)</h1>
                    <p class="mb-4">ITI- is a Technical course one can join after
                        successful completion of class 10th or Matriculation.

                        ITI is a great course for students who want to do a professional technical course in the short
                        term. ITI courses after 10th are available in different fields, and candidates can pick classes
                        based on their interests.

                        ITI is a good job oriented Technical course; an ITI holder can get a good job in electrical,
                        mechanical, and other manufacturing sectors. So many students are getting Jobs in railways
                        nowadays after ITI.

                        As the name suggests, you get a chance to work in industries after doing this course. You can
                        get to work in different roles in different sectors, depending on which branch you did your ITI.

                        Industrial Training Institutes (ITIs) and Industrial Training Centers are established under the
                        Directorate General of Employment and Training (DGET), Ministry of Skill Development and
                        Entrepreneurship, Union Government to give proper training in different job oriented industrial
                        sectors.
                    </p>

                </div>
            </div>
        </div>

        <div class="wow fadeInUp" data-wow-delay="0.3s" width="100%">
            <h3>Courses in ITI:</h3>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s" style="width:100%">
                <table class="table-1" id="table-1">
                    <tbody>
                        <tr >
                            <td ><strong><h4>Course</h4></strong></td>
                            <td ><strong><h4>Stream</h4></strong></td>
                            <td ><strong><h4>Duration</h4></strong></td>
                        </tr>
                        <tr>
                            <td> <strong>Tool Die Maker Engineering</strong> </td>
                            <td>Engineering</td>
                            <td>3 years</td>
                        </tr>
                        <tr>
                            <td><strong>Draughtsman (Mechanical) Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr>
                            <td><strong>Draughtsman (Civil) Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr>
                            <td><strong>Fitter Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr >
                            <td><strong>Turner Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr >
                            <td><strong>Information Technology &amp; E.S.M. Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr >
                            <td><strong>Refrigeration Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr >
                            <td><strong>Mech. Instrument Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr >
                            <td><strong>Electrician Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr  >
                            <td><strong>Mechanic Motor Vehicle Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr  >
                            <td><strong>Mechanic Radio &amp; T.V. Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr  >
                            <td><strong>Mechanic Electronics Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr  >
                            <td><strong>Surveyor Engineering</strong></td>
                            <td>Engineering</td>
                            <td>2 years</td>
                        </tr>
                        <tr  >
                            <td><strong>Diesel Mechanic Engineering</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Pump Operator</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Motor Driving-cum-Mechanic Engineering</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Dress Making</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Manufacture Foot Wear</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Secretarial Practice</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Machinist Engineering</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Hair &amp; Skin Care</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Fruit &amp; Vegetable Processing</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Bleaching &amp; Dyeing Calico Print</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Letter Press Machine Minder</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Commercial Art</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Leather Goods Maker</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Hand Compositor</strong></td>
                            <td>Non-engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Foundry Man Engineering</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                        <tr  >
                            <td><strong>Sheet Metal Worker Engineering</strong></td>
                            <td>Engineering</td>
                            <td>1 year</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>



    </div>
    </div>
    <!-- About End -->


    <?php
include('footer.php');
?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



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
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
        table tr td{
            border: 1px solid black;
            text-align: center;
            
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
                    <h1 class="mb-4">Diploma</h1>
                    <p class="mb-4">What is a Diploma? A Diploma course provides career-oriented training, with the
                        purpose to prepare you to work efficiently in a particular field. A comprehensive understanding,
                        together with specialised skills, will enable you to apply for various jobs in the area you have
                        studied.
                    </p>
                    <p class="mb-4">The decision to choose a diploma over a degree is an important life choice that
                        needs to be weighed up with all the facts in mind. In an ever-changing and competitive job
                        market, vocational education can make you more able to accomplish your career and life goals
                        than a degree will.
                    </p>

                </div>
            </div>
        </div>

        <div class="wow fadeInUp" data-wow-delay="0.3s" width="100%">
            <h3>Courses in Diploma:</h3>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s"style="width:100%">
                <table class="has-subtle-pale-green-background-color has-background" >
                    <tbody>
                        <tr>
                            <td><strong>Name of the Diploma</strong></td>
                            <td><strong>Course Details</strong></td>
                            <td><strong>Course Duration</strong></td>
                            <td><strong>Career Options </strong><br><strong>for 10th pass courses</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Fashion Technology</strong></td>
                            <td>Basic knowledge and skills around Fashion Designing and Technology</td>
                            <td>3 Years</td>
                            <td>– Fashion Designer<br>– Costume Designer<br>– Textile Designer<br>– Bridal wear
                                Designer<br>– Fashion Stylist</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Fire Safety Engineering</strong></td>
                            <td>The course includes various techniques to put out fire along withlatest
                                technology and upgradation in tools in the field.&nbsp;</td>
                            <td>6 Months</td>
                            <td>– Fire Safety Executive<br>– Fire Safety Officer</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Engineering</strong></td>
                            <td>Technical courses or Polytechnic courses in different fields of Engineering.
                            </td>
                            <td>3 Years</td>
                            <td>Directly to Btech Lateral Entry or find a suitable job in the specific area of
                                specialization.&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Ceramic Technology</strong></td>
                            <td>The course includes&nbsp;properties, manufacturing processes, design and
                                applications of ceramic materials.</td>
                            <td>3 Years</td>
                            <td>Directly to Btech Ceramic Engineering via the lateral entry or find a suitable job as a
                                Ceramic Engineer.&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Plastics Technology</strong> </td>
                            <td>Course includes in-depth knowledge on types of plastics, their applications,
                                properties and more.&nbsp;</td>
                            <td>3 Years</td>
                            <td>– Plastic Part Mould Design Engineer<br>– Project Engineer<br>– Industrial Engineer<br>–
                                Product Design Engineer</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Dental Mechanics</strong></td>
                            <td>The course includes various concepts of dental structures and delta heath.&nbsp;
                            </td>
                            <td>2 Years</td>
                            <td>– Dentist<br>– Assistant Dental Surgeon<br>– Dental Technician<br>– Research Assistant
                            </td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Commercial Practice</strong></td>
                            <td>This diploma course after 10th includes promotion, sale or supply of service or
                                product to customers. Students are taught the right skills to scale this process.</td>
                            <td>3 Years</td>
                            <td>– Commercial Account Manager<br>– Commercial Executive<br>– Business Junior Head<br>–
                                Branch Commercial Assistant Manager&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Hotel Management and Catering Technology</strong></td>
                            <td>The course includes various hospitality traits related to hotel management and catering.
                            </td>
                            <td>2 Years</td>
                            <td>– Catering Officer<br>– Catering Supervisors &amp; Assistants<br>– Cabin Crew<br>–
                                Hospitality Executive</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Agriculture</strong></td>
                            <td>The course includes a range of farming techniques, types of soils and more.</td>
                            <td>2 Years</td>
                            <td>Directly to B.Tech Agriculture Engineering via the lateral entry or work in an
                                Agriculture based organisation.</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Cyber Security or Ethical Hacking</strong></td>
                            <td>You will learn various concepts related to saving computer devices from hackers
                                and viruses</td>
                            <td>1 Year</td>
                            <td>Certified ethical hacker or cyber security expert</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Cosmetology</strong></td>
                            <td>You will learn about different kinds of cosmetics, their uses and manufacturing
                                details in this diploma course after 10th.</td>
                            <td>1 Year</td>
                            <td>– Open your own parlour– Work at big beauty chains– Become a sales
                                representative– Work for cosmetic brands like lakme, colorbar, nykaa
                                etc.</td>
                        </tr>
                        <tr>
                            <td><strong>Art Teacher Diploma</strong></td>
                            <td>This course includes basic principles of visual and design experience.</td>
                            <td>2 years</td>
                            <td>– Arts teacher<br>– Painter<br>– Work for Art galleries&nbsp;</td>
                        </tr>
                        <tr>
                            <td><strong>Diploma in Stenography</strong></td>
                            <td>You will learn the concepts of taking the dictations and learn other clerical
                                work.</td>
                            <td>1 Year</td>
                            <td>You can work in wide range of government jobs. All the public departments have a place
                                for stenographers.&nbsp;</td>
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
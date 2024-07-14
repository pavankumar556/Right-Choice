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
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="height: 450px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt=""
                            style="object-fit: cover;width:'500px">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Streams</h6>
                    <h1 class="mb-4">Pre University College (PUC)</h1>
                    <p class="mb-4">The Pre-University Course or Pre-Degree Course (PUC or PDC) is an 2-year
                        Course under the 10+2 education system after Class 10th (SSLC, SSC) and the PUC commonly
                        refers to Class 11th and Class 12th and called as 1st PUC (1st Year) and 2nd PUC (2nd Year)
                        respectively in the pre-university colleges also known as Junior Colleges and this course
                        exists in only few some state boards of India because most of the national and state boards
                        in india provide schooling till Class12th.This pre-university course is also known as the
                        Intermediate Course in some state boards. The PUC Certificate is a certification obtained
                        by the Junior College students upon the successful completion of the Higher Secondary
                        Examination
                        at the end of study at the higher secondary level in India. The PUC Certificate is obtained on
                        passing the “Class 12th Public Examination” which is commonly referred to as “Class 12th Board
                        Examinations” in India. A person desiring admission to an Indian university must pass this
                        course,
                        which can be considered as a degree bridge course to prepare students for university education.
                    </p>



                  
                </div>
            </div>
        </div>
        <br>
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <p class="" mb-4"> Admission to this course is based on marks obtained for the SSLC (Class 10th), awarded
                after successful completion of five years of primary school, followed by five years of secondary school.
                The Indian education system follows a 10+2+3 (4 or 5) pattern, so that a bachelor's degree requires a
                minimum of 10 years of primary and secondary schooling, plus two years of Higher Secondary Education
                in Senior Secondary Schools (Almost all National and State Boards) i.e Schools which provide Higher
                Secondary Schooling for Class 11th & Class 12th or in Junior Colleges (Some State Boards) i.e Colleges
                which provide Higher Secondary Education for Class 11th & Class 12th in different regions and states,
                plus either three, four or five years at university. Colleges offering a pre-university course are known
                as PU Colleges also known as Junior colleges in India.
            </p>
            <p class="mb-4"> For example, the state of Karnataka conducts Board Examinations at the end of the 2nd Year
                PUC
                for university admissions. This has three program streams with options focusing on science, commerce and
                arts,
                respectively. Students desiring to study professional programs in Karnataka must pass the science stream
                of
                this exam and qualify through the Common Entrance Test of the state. Recently, the Karnataka PUC Board
                made the
                first-year PUC exams public, to filter out low-scoring students and improve overall average scores. Only
                about 40%

                of students usually pass the exam, and only about 1.5% score above 85% overall. </p>
        </div>
        <div class="wow fadeInUp" data-wow-delay="0.3s">
            <h3>Courses in PUC:</h3><br>
            <h5 class="mb-4"><u>SCIENCE</u></h5>
            <div style=" width:100%;margin:auto;">

                <table>
                    <tr>
                        <td>
                            <img src="img/science_image_01.jpg" width="500px" height="100%">
                        </td>
                        <td>
                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The PUC in
                                Science is a combination of Physics, Chemistry, Mathematics with Biology/Computer
                                Science/ Electronics/Statistics stream. The course equips the candidates with in-depth
                                knowledge
                                about the theory and practical applications of the science concepts. Different
                                pedagogies are instilled in the candidates in the form of projects, workshops, seminars,
                                presentations, and lectures.

                                Skills like analytical thinking, critical thinking, decision making, research, and
                                entrepreneurship are enhanced during the course.</p>

                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The Major
                                Combinations
                                under the Science Stream:
                            </p>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PCMB- Physics,
                                    Chemistry, Mathematics, and Biology</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PCMC - Physics,
                                    Chemistry, Mathematics, and Computer Science</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PCME - Physics,
                                    Chemistry, Mathematics, and Electronics</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>PCMS - Physics,
                                    Chemistry, Mathematics, and Statistics</p>
                            </div>


                        </td>
                    </tr>

                </table>
            </div><br>

            <h5 class="mb-4"><u>COMMERCE</u></h5>
            <div style=" width:100%;margin:auto;">

                <table>
                    <tr>
                        <td>
                            <img src="img/commerce_image_01.jpg" width="500px" height="100%">
                        </td>
                        <td>
                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The PUC in
                                Commerce is a Combination of Accounts, Business Studies, Economics with
                                Mathematics/Statistics/ Economics/Computer Science/History stream. The course equips the
                                candidates withnin-depth knowledge about the theory and practical applications of the
                                commerce concepts.Different pedagogies are instilled in the candidates in the form of
                                projects, workshops, seminars, presentations, and lectures.

                                Skills like analytical thinking, critical thinking, decision making, research, and
                                entrepreneurship are enhanced during the course.</p>

                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The Major
                                Combinations
                                under the Commerce Stream:
                            </p>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABMS- Accounts,
                                    Business Studies, Mathematics, Statistics</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABES - Accounts,
                                    Business Studies, Economics, Statistics</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABEM - Accounts,
                                    Business Studies, Economics, Mathematics</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABEC - Accounts,
                                    Business Studies, Economics, Computer Science</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABSC - Accounts,
                                    Business Studies, Statistics, Computer Science</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ABEH - Accounts,
                                    Business Studies, Economics, History</p>
                            </div>


                        </td>
                    </tr>

                </table>
            </div><br>

            <h5 class="mb-4"><u>ARTS</u></h5>
            <div style=" width:100%;margin:auto;">

                <table>
                    <tr>
                        <td>
                            <img src="img/arts_image_01.jpg" width="500px" height="400px">
                        </td>
                        <td>
                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The PUC in
                                Arts is a combination of History Economics Political Science Sociology/Optional
                                Kannada/Logic/Psychology and many more streams. The course equips the candidates with
                                in-dept knowledge about the theory and practical applications of the science concepts. Different
                                pedagogies are instilled in the candidates in the form of projects, workshops, seminars,
                                presentations, and lectures.

                                Skills like analytical thinking, critical thinking, decision making, research, and
                                entrepreneurship are enhanced during the course.</p>

                            <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;">The Combinations
                                under the Arts Stream:
                            </p>



                            </p>

                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HEPS - History,Economics,Political Science,Sociology</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HEPK - History,Economics,Political Science,Optional Kannada</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HELS - History,Economics,Logic,Sociology</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>EPSP - Economics,Political Science,Sociology,Psychology</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>ELSP - Economics,Logic,Sociology,Psychology</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HEGO - History,Economics,Geography,Optional Kannada</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HEGO - History,Economics,Geography,Political Science</p>
                            </div>
                            <div class="col-sm-6">
                                <p style="margin-left: 10px; font-family: 'Times New Roman', Times, serif;"
                                    class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>HEOH - History,Economics,Optional Kannada,Hindustani Music</p>
                            </div>


                        </td>
                    </tr>

                </table>
            </div><br>


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
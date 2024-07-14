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
  $s_birth = $row['s_birth_date'];
  $jdate = $row['s_date'];
  $filename = $row['s_img'];
  if($filename==""){
    $img="img/usericonlogo.jpg";
  }else{
    $img="UploadImage/".$filename;
  }
}
else {
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FeedBack | RICH</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/'page_icon.pngo" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


<!-- Navbar Start -->
<?php
            include("navbar.php");
        ?>
<!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">FeedBack</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">FeedBack</li>
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
        <table>
                        <tr>
                       <div class="background_div">
                        <br>
                        <h3 style="
    color: white;
">FeedBack</h3>
                        <br>
                        <form action="controler_student/feedbacksubmit.php" method="post">
                           <!-- <p style="text-align: left;padding-left: 15px;">Comment</p> -->
                                                 
                           <textarea type="text" minlength="100" name="msg" id="" placeholder="Comment" style="    border: 3px solid #12a24e;
                              width: 80%;
                              height: 100px;
                              border-radius: 4px; 
                              color:white;     
                              background: #030101; 
                              padding-left: 15px;
                           " required   cols="40" rows="10"></textarea>
                           <input type="text" name='s_id' value="<?php echo $s_id; ?>" hidden>
                           <input type="text" name='s_name' value="<?php echo $s_name; ?>" hidden>
                           
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

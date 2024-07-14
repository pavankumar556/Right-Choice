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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE | RICH</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="shortcut icon" href="img/page_icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <style>
body {
  font-family: "Open Sans", sans-serif;
  background-color: #356374;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  -ms-box-sizing: content-box;
  -o-box-sizing: content-box;
  box-sizing: content-box;
  padding: 0;
  margin: 0;
}

.pCard_card {
  width: 400px;
  height: 615px;
  margin: 50px auto;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -ms-border-radius: 30px;
  -o-border-radius: 30px;
  border-radius: 30px;
  background-color: #f6fcfe;
  -webkit-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -moz-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -ms-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  -o-box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  box-shadow: 0px 20px 70px 0px rgba(0, 0, 0, 0.21);
  position: relative;
  overflow: hidden;
}

/****************
Back
****************/

.pCard_card .pCard_back {
  text-align: center;
  position: absolute;
  left: 0;
  right: 0;
  top: 50%;
  margin-top: -139px;
  font-weight: 600;
  z-index: 1;
}
.pCard_card .pCard_back a {
  text-decoration: none;
}

/****************
UP
****************/

.pCard_card .pCard_up {
  position: absolute;
  width: 100%;
  height: 437px;
  background-image: url(<?php echo $img; ?>);
  background-position: 50%;
  background-size: cover;
  z-index: 3;
  text-align: center;
  -webkit-border-top-left-radius: 30px;
  -moz-border-top-left-radius: 30px;
  -ms-border-top-left-radius: 30px;
  -o-border-top-left-radius: 30px;
  border-top-left-radius: 30px;
  -webkit-border-top-right-radius: 30px;
  -moz-border-top-right-radius: 30px;
  -ms-border-top-right-radius: 30px;
  -o-border-top-right-radius: 30px;
  border-top-right-radius: 30px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up {
  height: 100px;
  box-shadow: 0 0 30px #cfd8dc;
}

.pCard_card .pCard_up .pCard_text {
  position: absolute;
  top: 319px;
  left: 0;
  right: 0;
  color: #f1f7f9;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up .pCard_text {
  top: 20px;
}

.pCard_card .pCard_up .pCard_text h2 {
  margin: 0;
  font-size: 25px;
  font-weight: 600;
}

.pCard_card .pCard_up .pCard_text p {
  margin: 0;
  font-size: 16px;
  color: #e3f1f5;
}

.pCard_card .pCard_up .pCard_add {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -ms-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  background-color: #ed145b;
  -webkit-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -moz-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -ms-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  -o-box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  box-shadow: 0px 5px 24px 0px rgba(0, 0, 0, 0.43);
  position: absolute;
  top: 392px;
  left: 0;
  right: 0;
  margin: auto;
  width: 88px;
  height: 88px;
  cursor: pointer;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_up .pCard_add {
  -webkit-transform: rotate(360deg) scale(0.5);
  -moz-transform: rotate(360deg) scale(0.5);
  -ms-transform: rotate(360deg) scale(0.5);
  -o-transform: rotate(360deg) scale(0.5);
  transform: rotate(360deg) scale(0.5);
  top: 470px;
}

/****************
Down
****************/

.pCard_card .pCard_down {
  background-color: #fff;
  position: absolute;
  bottom: 0px;
  width: 100%;
  height: 178px;
  z-index: 2;
  -webkit-border-bottom-left-radius: 30px;
  -moz-border-bottom-left-radius: 30px;
  -ms-border-bottom-left-radius: 30px;
  -o-border-bottom-left-radius: 30px;
  border-bottom-left-radius: 30px;
  -webkit-border-bottom-right-radius: 30px;
  -moz-border-bottom-right-radius: 30px;
  -ms-border-bottom-right-radius: 30px;
  -o-border-bottom-right-radius: 30px;
  border-bottom-right-radius: 30px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_down {
  height: 100px;
  -webkit-box-shadow: 0 0 30px #cfd8dc;
  -moz-box-shadow: 0 0 30px #cfd8dc;
  -ms-box-shadow: 0 0 30px #cfd8dc;
  -o-box-shadow: 0 0 30px #cfd8dc;
  box-shadow: 0 0 30px #cfd8dc;
}

.pCard_card .pCard_down div {
  width: 33.333%;
  float: left;
  text-align: center;
  margin-top: 50px;
  font-size: 18px;
  -webkit-transition: 0.5s ease-in-out;
  -moz-transition: 0.5s ease-in-out;
  -ms-transition: 0.5s ease-in-out;
  -o-transition: 0.5s ease-in-out;
  transition: 0.5s ease-in-out;
}

.pCard_on .pCard_down div {
  margin-top: 10px;
}

.pCard_card .pCard_down div p:first-of-type {
  color: #68818c;
  margin-bottom: 5px;
}

.pCard_card .pCard_down div p:last-of-type {
  color: #334750;
  font-weight: 700;
  margin-top: 0;
}
.pCard_card .pCard_back a i {
  margin: 10px;
  padding: 15px;
  -webkit-border-radius: 15px;
  -moz-border-radius: 15px;
  -ms-border-radius: 15px;
  -o-border-radius: 15px;
  border-radius: 15px;
  -webkit-transition: 0.3s ease-in-out;
  -moz-transition: 0.3s ease-in-out;
  -ms-transition: 0.3s ease-in-out;
  -o-transition: 0.3s ease-in-out;
  transition: 0.3s ease-in-out;
}

.pCard_card .pCard_back a i:hover {
  -webkit-transform: scale(1.2);
  -moz-transform: scale(1.2);
  -ms-transform: scale(1.2);
  -o-transform: scale(1.2);
  transform: scale(1.2);
}

.pCard_card .pCard_back a:nth-of-type(1) i {
  color: #3b5998;
  border: 2px solid #3b5998;
}

.pCard_card .pCard_back a:nth-of-type(2) i {
  color: #0077b5;
  border: 2px solid #0077b5;
}

.pCard_card .pCard_back a:nth-of-type(3) i {
  color: #1769ff;
  border: 2px solid #1769ff;
}

.pCard_card .pCard_back a:nth-of-type(4) i {
  color: #000000;
  border: 2px solid #000000;
}

.pCard_card .pCard_back a:nth-of-type(5) i {
  color: #eb5e95;
  border: 2px solid #eb5e95;
}

.pCard_card .pCard_back a:nth-of-type(6) i {
  color: #3f729b;
  border: 2px solid #3f729b;
}

.pCard_card .pCard_up .pCard_add i {
  color: white;
  font-size: 38px;
  line-height: 88px;
}

    </style>
</head>
<body>
<div class="pCard_card">
  <div class="pCard_up">
    <div class="pCard_text">
      <h2><?php echo $s_name; ?></h2>
      <p><?php echo $s_email_id; ?></p>
    </div>
    <div class="pCard_add"><i class="fa fa-plus"></i></div>
  </div>
  <div class="pCard_down">
    <div>
      <p>Birth Date</p>
      <p><?php echo $s_birth; ?></p>
    </div>
    <div>
      <p>Join Date</p>
      <p><?php echo $jdate; ?></p>
    </div>
    <div>
      <p>Requests</p>
      <?php
$admin = new Admin();
$querycount = $admin->ret("SELECT * FROM `request` WHERE `s_id`=" . $_SESSION['s_id']);
$norequests = $querycount->rowCount();
echo "<p>".$norequests."</p>";
      ?>
      
    </div>
  <div style="background: yellow;
    width: 100%;
    height: 58px;
    margin-top: 0px;" onclick="window.location='logout.php';">
    <span style="    font-size: 20px;
    font-weight: 600;
    color: blue;">Log Out</span></div>
  </div>
  <div class="pCard_back">
    <p>Update Here</p>
    <!-- Button trigger modal -->

    <a onclick="up()"><i class="fas fa-cloud-upload-alt" style="font-size: 31px"></i></a>
    <a onclick="other()"><i class="fa fa-edit" style="font-size: 31px"></i></a><br>
    <div id="uploadimg"style="width: 100%;
    height: 253px;
    text-align:center;color: #646464;">
    <form action="controler_student/updatestudent.php" method="post" enctype="multipart/form-data">
      Name <br>
      <input type="text" name="name" pattern="[A-Z a-z]+" title="letters only" value="<?php echo $s_name; ?>" style="background: #95e29d;
    margin: 5px;
    border-radius: 5px;" required><br>
      <!-- Birth Date<br>
      <input type="text" name="bdate" min="" max="<?php echo date('Y-m-d');?>" value="<?php echo $s_birth; ?>" style="background: #95e29d;
    margin: 5px;
    border-radius: 5px;" required><br> -->
      <input type="submit" value="UPDATE NOW" style="background: #00910f;
    margin: 5px;
    border-radius: 5px;">
    </form>
    </div>
    <div id="other"style="width: 100%;
    height: 253px;
    color: #646464;
    text-align:center;
    ">
    <form action="controler_student/uploadimage.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="img" style="    margin-top: 10px;
    background: #60ff00;
    border-radius: 20px;" required><br>
      <input type="submit" style="    margin-top: 10px;
    border-radius: 20px;" value="UPLOAD">
    </form>
    </div>
    <!-- <a href="#"><i class="fa fa-linkedin fa-2x fa-fw"></i></a>
    <a href="#"><i class="fa fa-behance fa-2x fa-fw"></i></a> <br>
    <a href="#"><i class="fa fa-codepen fa-2x fa-fw"></i></a>
    <a href="#"><i class="fa fa-dribbble fa-2x fa-fw"></i></a>
    <a href="#"><i class="fa fa-instagram fa-2x fa-fw"></i></a> -->
    <p></p>
  </div>
</div>

<script>
  document.getElementById("uploadimg").style.display="none";
  document.getElementById("other").style.display="none";

  function other(){
    if(document.getElementById("uploadimg").style.display=="none"){
      document.getElementById('uploadimg').style.display='block';
    }else{
      document.getElementById("uploadimg").style.display="none";
    }
  }
  function up(){
    if(document.getElementById("other").style.display=="none"){
      document.getElementById('other').style.display='block';
    }else{
      document.getElementById("other").style.display="none";
    }
  }
</script>


      <script>
$(function () {
  "use strict";
  $(".pCard_add").click(function () {
    $(".pCard_card").toggleClass("pCard_on");
    $(".pCard_add i").toggleClass("fa-minus");
  });
});

      </script>
</body>
</html>
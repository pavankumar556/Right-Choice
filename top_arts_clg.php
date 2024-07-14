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
if(isset($_SESSION['latitude'])){
    $long= $_SESSION['longitude'];
    $lat= $_SESSION['latitude'];
}else{
    $long="75.0260667";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Top ARTS | RICH</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="img/page_icon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="css/custom.css" />
    <!-- calendar file css -->
    <link rel="stylesheet" href="js/semantic.min.css" />
    <!-- fancy box js -->
    <link rel="stylesheet" href="css/jquery.fancybox.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <style>
        .card {
            width: 90%;
            height: fit-content;
            background: url('img/bg_tab.jpg');
            border-radius: 13px;
            text-align: center;
            margin: auto;
            box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
        }

        .inner_div {
            width: 95%;
            height: fit-content;
            background: #1282ca;
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
        }

        .table_id {
            width: 5%;
            height: fit-content;
            background: black;
            margin-left: 0px !important;
            text-align: center;
            border-bottom-right-radius: 10px;
            border-bottom-left-radius: 10px;
            float: left;
            margin-right: 10px;
        }
    </style>
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->

            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->

                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <!-- <h2>Jobs Available</h2> -->
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <!-- row -->
                        <div class="row">
                            <!-- table section -->

                            <div class="card">
                                <h1 style="    padding-top: 14px;
                            color: white;">Top Colleges For You</h1>
                                <?php

 $admin = new Admin();
 $query = "SELECT * FROM `post` WHERE `p_name`='arts' ORDER BY '$long'=`p_longitude` DESC";
 $stmt = $admin->ret($query);
 $a=1;
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    if($row['p_seats']!=0){

        echo '<div class="inner_div">
           <div class="table_id">
               <h3 style="color: white;">'.$a.'</h3>
           </div>
           <br>
           <div style="float: left;margin-right: 30px;">
               <h6>Stream Name</h6>
               <h3 style="color: white;">'.$row['p_name'].'</h3>
               <!-- <h6>Duration</h6>
               <h5 style="color: white;">2yrs</h5>
               <h6>Description</h6>
               <p style="color: white;    width: 500px;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse voluptates facere culpa vero fuga consequuntur maiores, laudantium pariatur doloremque ducimus tempore ipsa sapiente ipsam mollitia tempora molestiae assumenda nemo minima?</p> -->
           </div>
           <div style="float: left;margin-right: 30px;">
               <h6>Seats Available</h6>
               <h5 style="color: white;">'.$row['p_seats'].'</h5>
               <!-- <h6>Address</h6>
               <h5 style="color: white;     width: 206px;">'.$row['p_address'].'</h5> -->
           </div>
           <div style="float: left;margin-right: 30px;">
   
               <h6>Distance</h6>
               <h4 style="color: red;">
               <h4 style="color: red;" id="myP'.$a.'"><script>window.navigator.geolocation.getCurrentPosition(function (pos) {
                   console.log(pos.coords.longitude);
                   var num=distance(pos.coords.longitude, pos.coords.latitude,'.$row['p_longitude'].','.$row['p_latitude'].');
                   document.getElementById("myP'.$a.'").innerHTML=Math.round(num * 100) / 100 +" KM";
                       
                   
               });</script>
               </h4>
           </div>
           <a type="submit"  class="input_update" href="collegeDetails.php?p_id='.$row['p_id'].'"><b>READ MORE</b> </a><br><br>
           <br>
           
   
   
       </div>';
    }
    $a++;
 }
 ?>
<script>
    function distance(lon1, lat1, lon2, lat2) {
            var R = 6371; // Radius of the earth in km
            var dLat = (lat2 - lat1).toRad();  // Javascript functions in radians
            var dLon = (lon2 - lon1).toRad();
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) *
                Math.sin(dLon / 2) * Math.sin(dLon / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var d = R * c; // Distance in km
            return d;
        }
        if (typeof (Number.prototype.toRad) === "undefined") {
            Number.prototype.toRad = function () {
                return this * Math.PI / 180;
            }
        }
        // window.navigator.geolocation.getCurrentPosition(function (pos) {
        //     console.log(pos.coords.longitude);
        //     console.log(
        //         distance(pos.coords.longitude, pos.coords.latitude, 75.0260667, 12.886995)+" KM"
        //     );
        // });
</script>
                            </div>









                            <!-- table section -->

                            <!-- footer -->
                            <div class="container-fluid">
                                <div class="footer">
                                    <!-- <p>Copyright © 2022. All rights reserved.</p> -->
                                </div>
                            </div>
                        </div>
                        <!-- end dashboard inner -->
                    </div>
                </div>
                <!-- model popup -->
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                Modal body..
                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end model popup -->
            </div>
            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <!-- wow animation -->
            <script src="js/animate.js"></script>
            <!-- select country -->
            <script src="js/bootstrap-select.js"></script>
            <!-- owl carousel -->
            <script src="js/owl.carousel.js"></script>
            <!-- chart js -->
            <script src="js/Chart.min.js"></script>
            <script src="js/Chart.bundle.min.js"></script>
            <script src="js/utils.js"></script>
            <script src="js/analyser.js"></script>
            <!-- nice scrollbar -->
            <script src="js/perfect-scrollbar.min.js"></script>
            <script>
                var ps = new PerfectScrollbar('#sidebar');
            </script>
            <!-- fancy box js -->
            <script src="js/jquery-3.3.1.min.js"></script>
            <script src="js/jquery.fancybox.min.js"></script>
            <!-- custom js -->
            <script src="js/custom.js"></script>
            <!-- calendar file css -->
            <script src="js/semantic.min.js"></script>
</body>

</html>
<?php
    include('../config.php');
    if(!isset($_SESSION['ad_id'])){
      echo "<script>window.location='login.php';</script>";
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
    <title>Report | RICH</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="images/page_icon.png" type="image/png" />
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
</head>

<body class="inner_page tables_page">
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php
include("sidebar.php");
?>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <?php
include("header.php");
?>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <!-- <h2>Report</h2> -->
                                </div>
                            </div>
                        </div>
                        <!-- row -->
                        <div class="row">
                            <!-- table section -->

                            <!-- table section -->
                            <div class="col-md-6">
                                <div class="white_shd full margin_bottom_30" style="width: 1030px;">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Report</h2>
                                        </div>
                                    </div>
                                    <div style="text-align: center;">
                                        <form action="report.php" method="post">

                                            From <input type="date" max="<?php echo date('Y-m-d');?>" name="from"
                                                style="background: yellow;border: none;border-radius: 4px;margin-right: 100px;" />
                                            To<input type="date" max="<?php echo date('Y-m-d');?>" name="to"
                                                style="background: yellow;border: none;border-radius: 4px;" />
                                            <input type="submit" value="submit" style="background: yellow;
                                    border: none;
                                    border-radius: 10px;
                                    padding: 6px;
                                 " />
                                        </form>
                                        
                                    </div>
                                    <div class="table_section padding_infor_info">
                                        <div class="table-responsive-sm">
                                            
                                                <?php
                                                
                                 if(isset($_POST['from']) && isset($_POST['to'])){
                                     $from= $_POST['from'];
                                     $to=$_POST['to'];

                                    $admin = new Admin();
                                    $query = "SELECT * FROM `student` WHERE `s_date` between '$from' and '$to'";
                                    $stmt = $admin->ret($query);
                                    // $rocount=$stmt->fetchColumn();
                                    // if($rocount>0){
                                       echo '
                                       <h4>Student Details</h4>
                                       
                                       <table class="table table-striped">
                                       <thead>
                                           <tr>
                                               <th>S.NO</th>
                                               <th>Name</th>
                                               <th>Birth Date</th>
                                               <th>Email Id</th>

                                           </tr>
                                       </thead>
                                       <tbody>';
                                       $a=1;
                                       while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                       
                                       echo "<tr>
                                       <td>".$a."</td>
                                       <td>".$row['s_name']."</td>
                                       <td>".$row['s_birth_date']."</td>
                                       <td>".$row['s_email_id']."</td>

                                       </tr>";
                                       $a++;
                                       }

                                    // }
                                 }
                                 if(isset($_POST['from']) && isset($_POST['to'])){
                                    $admin = new Admin();
                                    $query1 = "SELECT * FROM `centre` WHERE `c_date` between '$from' and '$to'";
                                    $stmt1 = $admin->ret($query1);
                                    // $rocount1=$stmt1->fetchColumn();
                                    // if($rocount1>0){

                                       echo '
                                       
                                       <table class="table table-striped">
                                       <br>
                                       <br><h4>Centre Details</h4>
                                       <thead>
                                           <tr>
                                               <th>S.NO</th>
                                               <th>Name</th>
                                               <th>Email Id</th>
                                               <th>Approval</th>

                                           </tr>
                                       </thead>
                                       <tbody>';
                                       $aa=1;
                                    while($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
                                       
                                       echo "<tr>
                                       <td>".$aa."</td>
                                       <td>".$row1['c_name']."</td>
                                       <td>".$row1['c_email_id']."</td>
                                       <td>".$row1['c_approval']."</td>

                                       </tr>";
                                       $aa++;

                                    }

                                    // }
                                    
                                 }
                                 if(isset($_POST['from']) && isset($_POST['to'])){
                                    $admin = new Admin();
                                    $query2 = "SELECT * FROM `job` WHERE `j_date` between '$from' and '$to'";
                                    $stmt2 = $admin->ret($query2);
                                    $rocount2=$stmt2->fetchColumn();
                                    if($rocount2>0){

                                       echo '
                                       
                                       <table class="table table-striped">
                                       <br>
                                       <br><h4>Job Details</h4>
                                       <thead>
                                           <tr>
                                               <th>S.NO</th>
                                               <th>Designation</th>
                                               <th>Email Id</th>
                                               <th>No.of Jobs</th>

                                           </tr>
                                       </thead>
                                       <tbody>';
                                       $aaa=1;
                                    while($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                       
                                       echo "<tr>
                                       <td>".$aaa."</td>
                                       <td>".$row2['job_designation']."</td>
                                       <td>".$row2['job_address']."</td>
                                       <td>".$row2['job_no_of_jobs']."</td>

                                       </tr>";
                                       $aaa++;

                                    }

                                    }
                                    
                                 }
                                 if(isset($_POST['from']) && isset($_POST['to'])){
                                    $admin = new Admin();
                                    $query3 = "SELECT * FROM `post` WHERE `p_date` between '$from' and '$to'";
                                    $stmt3 = $admin->ret($query3);
                                    $rocount3=$stmt3->fetchColumn();
                                    if($rocount3>0){

                                       echo '
                                       <table class="table table-striped">
                                       <br>
                                       <br><h4>Stream Details</h4>
                                       <thead>
                                           <tr>
                                               <th>S.NO</th>
                                               <th>Stream</th>
                                               <th>Institution Name</th>
                                               <th>Duration</th>

                                           </tr>
                                       </thead>
                                       <tbody>';
                                       $aaaa=1;
                                    while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
                                       
                                       echo "<tr>
                                       <td>".$aaaa."</td>
                                       <td>".$row3['p_name']."</td>
                                       <td>".$row3['p_address']."</td>
                                       <td>".$row3['p_duration']."</td>

                                       </tr>";
                                       $aaaa++;

                                    }

                                    }
                                    
                                 }
                                 
                                //  }
                                    // $admin = new Admin();
                                    
                              
                              ?>
                                                    <?php


// include("../config.php");
// $admin = new Admin();
// $query = "SELECT * FROM `student`";
// $stmt = $admin->ret($query);
// $a=1;
// while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    echo "<tr>
//    <td>".$a."</td>
//    <td>".$row['name']."</td>
//    <td>".$row['birth_date']."</td>
//    <td>".$row['email_id']."</td>

//    </tr>";
//    $a++;

// }


?>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- table section -->

                            <!-- footer -->
                            <div class="container-fluid">
                                <div class="footer">
                                    <p>Copyright © 2022. All rights reserved.</p>
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
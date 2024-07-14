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
      <title>Jobs | RICH</title>
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
      <style>
            .card{
                width: 100%;
                height: fit-content;
                background-color: #ffffff;
                border-radius: 13px;
                text-align: center;
                margin: auto;
                box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
            }
            .inner_div{
                width: 95%;
                height: fit-content;
                background: #1282ca;
                margin: 25px;
                border-radius: 8px;
                text-align: left;
                padding-left: 30px;
                color: #ffffff;

            }
            .input_type{
                 width: 26%;
                 height: 33px;
                 border:none;
                 background:#e91111;
                 border-radius: 4px;
                 padding-left: 15px;
                 color: white;
            }
            .input_delete{
                float: right;
                margin-right: 10px;
                padding-right: 5px;
                background: red;
                width: 15%;
                padding: 8px;
                text-align: center;
                border-radius: 7px;
                color:white;
                border:2px solid black;
                /* margin-top: -8px; */
            }
            .input_update{
                float: right;
                color:black;
                margin-right: 10px;
                padding-right: 5px;
                background: yellow;
                width: 15%;
                padding: 8px;
                text-align: center;
                border-radius: 7px;
                border:2px solid black;
                border:2px solid black;
            }
            .table_id{
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
                              <h2>Jobs Available</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row">
                        <!-- table section -->
                        <div class="card">
                        
                            <?php
                                $admin = new Admin();
                                $query = "SELECT * FROM `job` ORDER BY `job_type`";
                                $stmt = $admin->ret($query);
                                $a=1;
                                while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                                    echo '<div class="inner_div">
                                    <div class="table_id">
                                       <h3 style="color: white;">'.$a.'</h3>
                                       
                                       </div>
                                       <h4 style="color: white;    margin-top: 10px;">'.$row['job_type'].'</h4>
                                    <br>
                                    <div style="float: left;margin-right: 30px;">
                                    <h6 >Designation</h6>
                                    <h3 style="color: white;">'.$row['job_designation'].'</h3>
                                    <h6 >E-mail Address</h6>
                                    <h5 style="color: white;">'.$row['job_address'].'</h5>
                                    </div>
                                    <div  style="float: left;margin-right: 30px;">
                                    <h6 >No of Jobs</h6>
                                    <h5 style="color: white;">'.$row['job_no_of_jobs'].'</h5>
                                    <h6 >Phone No</h6>
                                    <h5 style="color: white;">'.$row['job_phone_no'].'</h5>
                                    </div>
                                    <div  style="float: left;margin-right: 30px;">
                                    <h6 >Website</h6>
                                    <h5 style="color: white;">'.$row['job_website'].'</h5>
                                   
                                    <h6 >Salary</h6>
                                    <h4 style="color: red;">'.$row['job_salary'].'</h4>
                                    </div>
                                    <div  style="float: left;margin-right: 30px;">
                                    <h6 >Location</h6>
                                    <h5 style="color: white;">'.$row['j_location'].'</h5>
                                   
                                    
                                    </div>
                                    <a type="submit"  class="input_delete" href="controler_admin/delete_job.php?j_id='.$row['j_id'].'"><b>DELETE</b> </a><br><br>
                                    <br><a type="submit"  class="input_update" href="update_job_details.php?j_id='.$row['j_id'].'"><b>UPDATE</b></a><br><br>
                                    <br>
                                   
                                </div>';
                                $a++;
                                }
                            ?>
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
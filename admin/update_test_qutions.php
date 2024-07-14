<?php
include('../config.php');
if (!isset($_SESSION['ad_id'])) {
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
   <title>Update Test | RICH</title>
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
      .background_div{
    width: 70%;
    height: fit-content;
    background-color: #ffffff;
    border-radius: 13px;
    text-align: center;
    margin: auto;
    box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
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
                           <h2>Aptitude Test</h2>
                        </div>
                     </div>
                  </div>
                  <!-- row -->
                  <div class="row">
                     <!-- table section -->

                     <!-- table section -->
                     <table>
                        <tr>
                       <div class="background_div">
                        <br>
                        <h3>Update test Qutions</h3>
                        <br>
                        
                            <?php
                                $admin = new Admin();
                                if(isset($_GET['apt_id'])){
                                    $apt=$_GET['apt_id'];
                                   $query = "SELECT * FROM `apti_test` WHERE `apt_id`='$apt'";
                                   $stmt = $admin->ret($query);
                                  $row = $stmt->fetch(PDO::FETCH_ASSOC);

                                    echo '<form action="controler_admin/update_test.php" method="post">
                                    <select name="apti_stream" class="arts" value="'.$row['apt_stream'].'"
                                    style="border: 3px solid #2512a2;
                                       width: 80%;
                                       height: 40px;
                                       border-radius: 4px;    padding-left: 15px;" required>
                                    <option value="arts">Arts</option>
                                    <option value="commerce">Commerce</option>
                                    <option value="science">Science</option>
                                 </select>
                                 <br>
                                 <br>
                                 <input type="text" name="apt_id" value="'.$row['apt_id'].'" hidden>
                                    <input type="text" name="qution" id="" placeholder="Create a Qution." value="'.$row['apti_test_qution'].'" style="    border: 3px solid #12a24e;
                                       width: 80%;
                                       height: 40px;
                                       border-radius: 4px;    padding-left: 15px;
                                    " required>
                                    <br>
                                    <br>
         
                                    
                                       <input type="text" name="corect_answer" placeholder="Right answer." value="'.$row['apt_answer'].'" style="    border: 3px solid #9912a2;
                                             width: 26%;
                                             height: 33px;
                                             border-radius: 4px;
                                             padding-left: 15px;" required> <br><br>
                                       <input type="text" name="option1" placeholder="Option-1" value="'.$row['apt_option1'].'" style="    border: 3px solid #e91111;
                                          width: 26%;
                                          height: 33px;
                                          border-radius: 4px;
                                          padding-left: 15px;" required><br><br>
                                       <input type="text" name="option2" placeholder="Option-2" value="'.$row['apt_option2'].'"  style="    border: 3px solid #00f0ff;
                                          width: 26%;
                                          height: 33px;
                                          border-radius: 4px;
                                          padding-left: 15px;" required><br><br>
                                       <input type="text" name="option3" placeholder="Option-3" value="'.$row['apt_option3'].'" style="    border: 3px solid #ffd912;
                                          width: 26%;
                                          height: 33px;
                                          border-radius: 4px;
                                          padding-left: 15px;" required><br><br>
                                       <input type="submit" style="width: 100%;
                                          height: 60px;
                                          background: #03cae4;
                                          border-bottom-right-radius: 13px;
                                          border-bottom-left-radius: 13px; border: none;" onclick="style.background="#22950d";" value="UPDATE QUTION">
                                          </form>';

                                   
                                }


                                

                            ?>



                        
                                                         

                        

                       </div>
                        </tr>
                     </table>

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
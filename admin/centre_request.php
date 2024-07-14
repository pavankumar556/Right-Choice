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
      <title>View Request | RICH</title>
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
        .approove_button{
            background-color: green;
            padding: 5px;
            border-radius: 5px;
            color: white;
            margin: 3px;
        }
        .reject_button{
            background-color: red;
            padding: 5px;
            border-radius: 5px;
            color: white;
            margin: 3px;
        }
        .reject_button:hover{
            color: darkturquoise;
        }
        .approove_button:hover{
            color: darkturquoise;
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
                              <h2>View Request</h2>
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
                                    <h2>Requester Details</h2>
                                 </div>
                              </div>
                              <div class="table_section padding_infor_info">
                                 <div class="table-responsive-sm">
                                    <table class="table table-striped">
                                       <thead>
                                          <tr>
                                          <th>S.NO</th>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>longitude</th>
                                             <th>latitude</th>                                   
                                             <th>Approove / Reject</th>                                     
                                          </tr>
                                       </thead>
                                       <tbody>
                                        
                                        <?php
                                            // include("../config.php");
                                            $admin = new Admin();
                                            $query = "SELECT * FROM `centre`";
                                            $stmt = $admin->ret($query);
                                            $sa=1;
                                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                                if ($row['c_approval'] === "") {
                                                    echo "<tr>
                                                    <td>" . $sa ."</td>
                                                    <td>" . $row['c_name'] . "</td>
                                                    <td>" . $row['c_email_id'] . "</td>
                                                    <td>" . $row['c_longitude'] . "</td>
                                                    <td>" . $row['c_latitude'] . "</td>
                                                    <td><a href='centre_request.php?id=" . $row['c_id'] . "&btn=approove' class='approove_button'>Approove</a>
                                                    <a href='centre_request.php?id=" . $row['c_id'] . "&btn=reject' class='reject_button'>Reject</a></td>
                                                    </tr>";

                                                    $sa++;
                                                }
                                            }

                                            if(isset($_GET['btn'])){   
                                                    
                                                $c_id=$_GET['id'];
                                                if($_GET['btn']=="approove"){
                                                    $query_update = "UPDATE  `centre` SET `c_approval`='Approoved' WHERE `c_id`='$c_id'";
                                                    $stmt = $admin->cud($query_update,"update");
                                                            //Mail send.
                                                               try{
                                                                  
                                                                  $queryd = "SELECT * FROM `centre` WHERE `c_id`='$c_id'";
                                                                  $res= $admin->ret($queryd);
                                                                  $row = $res->fetch(PDO::FETCH_ASSOC);
                                                                  $message='<!DOCTYPE html>
                                                                  <html lang="en">
                                                                  <head>
                                                                      <meta charset="UTF-8">
                                                                      <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                                                      <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                                                      <title>Document</title>
                                                                      <link rel="preconnect" href="https://fonts.googleapis.com">
                                                                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                                                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Roboto:wght@300&display=swap" rel="stylesheet">
                                                                  <link rel="preconnect" href="https://fonts.googleapis.com">
                                                                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                                                  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
                                                                  <link rel="preconnect" href="https://fonts.googleapis.com">
                                                                  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                                                                  <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Montserrat:wght@100;300&family=Roboto:wght@300;900&display=swap" rel="stylesheet">
                                                                  <style>
                                                                      @media (max-width:670px) {
                                                                          div,table{
                                                                              width: 100% !important; 
                                                                          }
                                                                      }
                                                                  </style>
                                                                  </head>
                                                                  <body>
                                                                      <div style="background-color: #d6e7f0; width: 50%; height: fit-content; margin-top: 60px; margin-bottom: 20px; text-align: center; margin: auto;border-top-left-radius: 14px;
                                                                      border-top-right-radius: 14px; ">
                                                                          <div style="background-color: #3e0606; margin-top:20px; border-top-left-radius: 14px;
                                                                          border-top-right-radius: 14px;">
                                                                              <img src="https://drive.google.com/thumbnail?id=10CknoUg65gR4tPOIAam9ZR6sf1EHFwo9" alt="Rich" style="width: 200px;
                                                                          height: 109px; margin-top: 6px;">
                                                                          </div>
                                                                          <div style="background-color: #d6e7f0;">
                                                                              <img src="https://drive.google.com/thumbnail?id=1Wk83Qf0OxcOyT1bnN7h0KBhEh4uDIXzD" alt="" style="width: 100%; margin-top: 20px; margin-bottom: 20px;">
                                                                         
                                                                              <h1 style="
                                                                              font-family:  Tahoma, Verdana, Segoe, sans-serif;
                                                                              mso-line-height-alt: 18px;
                                                                              color: #052d3d;
                                                                              line-height: 1.5;">WELCOME</h1>
                                                                              <h2 style="
                                                                              font-family: "Lato", sans-serif;
                                                                              mso-line-height-alt: 18px;
                                                                              color: #1088b7;
                                                                              line-height: 1.5;">'.$row['c_name'].'</h2>
                                                                  
                                                                              <h4 style="font-family: "Montserrat", sans-serif; text-align: left; margin-left: 80px;">Hi There,</h4>
                                                                              <h4 style="font-family: "Montserrat", sans-serif; text-align: left;margin-left: 90px; margin-right: 20px;">Thanks for Creating account on RICH. Your account in approoved by the admin and now you can put your posts in our site.</h4>
                                                                              <br>
                                                                              <br>
                                                                          </div>
                                                                          
                                                                          
                                                                      </div>
                                                                      <!-- <div style="width: 50%;background-color: #b9b9b9;"> -->
                                                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                                              <tbody>
                                                                                  <tr>
                                                                                      <td>
                                                                                          <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;" width="650">
                                                                                              <tbody>
                                                                                                  <tr>
                                                                                                      <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 20px; padding-bottom: 60px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
                                                                                                          <table border="0" cellpadding="10" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                                                                              <tbody><tr>
                                                                                                                  <td>
                                                                                                                      <table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="188px">
                                                                                                                          <tbody><tr>
                                                                                                                              <td style="padding:0 15px 0 0px;"><a href="" target="_blank"><img alt="Facebook" height="32" src="https://drive.google.com/thumbnail?id=1Buc86KFkSV4jv-OCHvoekGDnwAQO2VT5" style="display: block; height: auto; border: 0;" title="Facebook" width="32"></a>
                                                                                                                              </td>
                                                                                                                              <td style="padding:0 15px 0 0px;"><a href="" target="_blank"><img alt="Twitter" height="32" src="https://drive.google.com/thumbnail?id=1_QLMrLM9A3vqnJnUf9lO75hGrFBZVRjk" style="display: block; height: auto; border: 0;" title="Twitter" width="32"></a>
                                                                                                                              </td>
                                                                                                                              <td style="padding:0 15px 0 0px;"><a href="" target="_blank"><img alt="Instagram" height="32" src="https://drive.google.com/thumbnail?id=1HZK0yHGvOIgMyA8XRM2TqeDGv1dMFpTK" style="display: block; height: auto; border: 0;" title="Instagram" width="32"></a>
                                                                                                                              </td>
                                                                                                                              <td style="padding:0 15px 0 0px;"><a href="" target="_blank"><img alt="Pinterest" height="32" src="https://drive.google.com/thumbnail?id=1tcd0AKfeoSB3RA4777GrOKeFcQ-VbfXQ" style="display: block; height: auto; border: 0;" title="Pinterest" width="32"></a>
                                                                                                                              </td>
                                                                                                                          </tr>
                                                                                                                      </tbody></table>
                                                                                                                  </td>
                                                                                                              </tr>
                                                                                                          </tbody></table>
                                                                                                          <table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                                                                                              <tbody><tr>
                                                                                                                  <td>
                                                                                                                      <div style="font-family: sans-serif">
                                                                                                                          <div class="txtTinyMce-wrapper" style="font-size: 12px; mso-line-height-alt: 18px; color: #555555; line-height: 1.5; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
                                                                                                                              <p style="margin: 0; font-size: 14px; text-align: center;">
                                                                                                                                  RICH | Right Choice&nbsp;</p>
                                                                                                                              <p style="margin: 0; font-size: 14px; text-align: center;">
                                                                                                                                  Career guidance system
                                                                                                                              </p>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </td>
                                                                                                              </tr>
                                                                                                          </tbody></table>
                                                                                                          <table border="0" cellpadding="10" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                                                                              <tbody><tr>
                                                                                                                  <td>
                                                                                                                      
                                                                                                                  </td>
                                                                                                              </tr>
                                                                                                          </tbody></table>
                                                                                                          <table border="0" cellpadding="10" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                                                                                                              <tbody><tr>
                                                                                                                  <td>
                                                                                                                      <div style="font-family: sans-serif">
                                                                                                                          <div class="txtTinyMce-wrapper" style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #4F4F4F; line-height: 1.2; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
                                                                                                                              <p style="margin: 0; font-size: 12px; text-align: center;">
                                                                                                                                  <span style="font-size:14px;"><a href="#" rel="noopener" style="text-decoration: none; color: #2190E3;" target="_blank"><strong>Help&amp;
                                                                                                                                              FAQs</strong></a> |&nbsp; <strong><a href="#" rel="noopener" style="text-decoration: none; color: #2190E3;" target="_blank">Returns</a>&nbsp;</strong>
                                                                                                                                      |&nbsp;&nbsp;<span style="background-color:transparent;font-size:14px;">1-998-9283-19832</span></span>
                                                                                                                              </p>
                                                                                                                          </div>
                                                                                                                      </div>
                                                                                                                  </td>
                                                                                                              </tr>
                                                                                                          </tbody></table>
                                                                                                      </td>
                                                                                                  </tr>
                                                                                              </tbody>
                                                                                          </table>
                                                                                      </td>
                                                                                  </tr>
                                                                              </tbody>
                                                                          </table>
                                                                      <!-- </div> -->
                                                                      <div style="background-color: #3e0606; margin-top:20px;  width: 50%; margin: auto; text-align: center;
                                                                          border-bottom-right-radius: 14px;
                                                                  border-bottom-left-radius: 14px; height: 109px;">
                                                                              <!-- <img src="images/rich_logo_image01.png" alt="Rich" style="width: 200px;
                                                                          height: 109px; margin-top: 6px;"> -->
                                                                          </div>
                                                                  </body>
                                                                  </html>';
                                                                  $mailer=$admin->mail_send('Aprooved',$row['c_email_id'],$message);
                                                               }catch(Exception $e){

                                                               }
                                                            //End mail
                                                    echo "<script>window.location='centre.php'</script>";
                                                }else{
                                                    $query_update = "UPDATE  `centre` SET `c_approval`='Rejected' WHERE `c_id`='$c_id'";
                                                    $stmt = $admin->cud($query_update,"update");
                                                    echo "<script>window.location='centre_request.php'</script>";
                                                }
                                            }

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
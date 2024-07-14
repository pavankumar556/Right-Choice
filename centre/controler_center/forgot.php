<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['uname'])){
    $username=$_POST['uname'];
    $query_check = $admin->ret("SELECT * FROM `centre` WHERE `c_email_id`='$username'");
    $number_of_rows = $query_check->rowCount();
    if ($number_of_rows > 0) {
        $sub="OTP Verification";
        $to=$_POST['uname'];
        $otp=rand(1111,9999);
        $_SESSION['otp']=$otp;
        $_SESSION['email']=$username;
        // $message="<h1>".$otp."</h1>";
        $message='<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Roboto:wght@300&display=swap"
                rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300&family=Roboto:wght@300;900&display=swap"
                rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link
                href="https://fonts.googleapis.com/css2?family=Lato:ital@1&family=Montserrat:wght@100;300&family=Roboto:wght@300;900&display=swap"
                rel="stylesheet">
            <style>
                @media (max-width:670px) {
        
                    div,
                    table {
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
                    <img src="https://drive.google.com/thumbnail?id=1Wk83Qf0OxcOyT1bnN7h0KBhEh4uDIXzD" alt=""
                        style="width: 100%; margin-top: 20px; margin-bottom: 20px;">
        
                    <h1 style="
                                                                                      font-family:  Tahoma, Verdana, Segoe, sans-serif;
                                                                                      mso-line-height-alt: 18px;
                                                                                      color: #052d3d;
                                                                                      line-height: 1.5;">OTP to Reset your Password</h1>
                    <h1 style="
                                                                                      font-family: " Lato", sans-serif;
                        mso-line-height-alt: 18px; color: red; font-size: 65px; line-height: 1.5; ">'.$otp.'</h1>
        
                   
                    <br>
                    <br>
                </div>
        
        
            </div>
            <!-- <div style=" width: 50%;background-color: #b9b9b9;"> -->
                        <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation"
                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                            <tbody>
                                <tr>
                                    <td>
                                        <table align="center" border="0" cellpadding="0" cellspacing="0"
                                            class="row-content stack" role="presentation"
                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 650px;"
                                            width="650">
                                            <tbody>
                                                <tr>
                                                    <td class="column column-1"
                                                        style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 20px; padding-bottom: 60px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;"
                                                        width="100%">
                                                        <table border="0" cellpadding="10" cellspacing="0" class="social_block"
                                                            role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <table align="center" border="0" cellpadding="0"
                                                                            cellspacing="0" class="social-table"
                                                                            role="presentation"
                                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;"
                                                                            width="188px">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td style="padding:0 15px 0 0px;"><a href=""
                                                                                            target="_blank"><img alt="Facebook"
                                                                                                height="32"
                                                                                                src="https://drive.google.com/thumbnail?id=1Buc86KFkSV4jv-OCHvoekGDnwAQO2VT5"
                                                                                                style="display: block; height: auto; border: 0;"
                                                                                                title="Facebook" width="32"></a>
                                                                                    </td>
                                                                                    <td style="padding:0 15px 0 0px;"><a href=""
                                                                                            target="_blank"><img alt="Twitter"
                                                                                                height="32"
                                                                                                src="https://drive.google.com/thumbnail?id=1_QLMrLM9A3vqnJnUf9lO75hGrFBZVRjk"
                                                                                                style="display: block; height: auto; border: 0;"
                                                                                                title="Twitter" width="32"></a>
                                                                                    </td>
                                                                                    <td style="padding:0 15px 0 0px;"><a href=""
                                                                                            target="_blank"><img alt="Instagram"
                                                                                                height="32"
                                                                                                src="https://drive.google.com/thumbnail?id=1HZK0yHGvOIgMyA8XRM2TqeDGv1dMFpTK"
                                                                                                style="display: block; height: auto; border: 0;"
                                                                                                title="Instagram"
                                                                                                width="32"></a>
                                                                                    </td>
                                                                                    <td style="padding:0 15px 0 0px;"><a href=""
                                                                                            target="_blank"><img alt="Pinterest"
                                                                                                height="32"
                                                                                                src="https://drive.google.com/thumbnail?id=1tcd0AKfeoSB3RA4777GrOKeFcQ-VbfXQ"
                                                                                                style="display: block; height: auto; border: 0;"
                                                                                                title="Pinterest"
                                                                                                width="32"></a>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table border="0" cellpadding="10" cellspacing="0" class="text_block"
                                                            role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div style="font-family: sans-serif">
                                                                            <div class="txtTinyMce-wrapper"
                                                                                style="font-size: 12px; mso-line-height-alt: 18px; color: #555555; line-height: 1.5; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
                                                                                <p
                                                                                    style="margin: 0; font-size: 14px; text-align: center;">
                                                                                    RICH | Right Choice&nbsp;</p>
                                                                                <p
                                                                                    style="margin: 0; font-size: 14px; text-align: center;">
                                                                                    Career guidance system
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table border="0" cellpadding="10" cellspacing="0" class="divider_block"
                                                            role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
        
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <table border="0" cellpadding="10" cellspacing="0" class="text_block"
                                                            role="presentation"
                                                            style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;"
                                                            width="100%">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div style="font-family: sans-serif">
                                                                            <div class="txtTinyMce-wrapper"
                                                                                style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #4F4F4F; line-height: 1.2; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
                                                                                <p
                                                                                    style="margin: 0; font-size: 12px; text-align: center;">
                                                                                    <span style="font-size:14px;"><a href="#"
                                                                                            rel="noopener"
                                                                                            style="text-decoration: none; color: #2190E3;"
                                                                                            target="_blank"><strong>Help&amp;
                                                                                                FAQs</strong></a> |&nbsp;
                                                                                        <strong><a href="#" rel="noopener"
                                                                                                style="text-decoration: none; color: #2190E3;"
                                                                                                target="_blank">Returns</a>&nbsp;</strong>
                                                                                        |&nbsp;&nbsp;<span
                                                                                            style="background-color:transparent;font-size:14px;">1-998-9283-19832</span></span>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
        $otp = $admin->mail_send($sub,$to,$message);
        echo "<script>window.location='../forgot/verifyotp.php';</script>";
    }else{
        echo "<script>alert('You are not a member of this website.Please sign up');
        window.location='../signup/';</script>";
    }

}else if(isset($_POST['verifybtn'])){
    $otp=$_POST['otp'];
    if($otp==$_SESSION['otp']){
        echo "<script>window.location='../forgot/resetpassword.php';</script>";
        unset($_SESSION['otp']);
    }else{
        
        echo "<script>alert('Invalid OTP');
        window.location='../forgot/';</script>";

    }
}else if(isset($_POST['submit_btn'])){
   $new_password= md5($_POST['new_password']);
   $confirm_password= md5($_POST['confirm_password']);
   if($confirm_password==$new_password){
        $email=$_SESSION['email'];
        $query = "UPDATE `centre` SET `c_password`='$confirm_password' WHERE `c_email_id`='$email';";
        $result = $admin->cud($query, "updation Successful");



        //opens file in append mode
     $t=time();
     $text="\n".date("Y-m-d",$t)."  ".$email." -Centre Password updated";
     $fp = fopen('../../log.txt', 'a');  
     fwrite($fp, $text);  
     // fwrite($fp, 'appending data');  
     fclose($fp); 

        unset($_SESSION['email']);
        
        echo "<script>window.location='../login/';</script>";

   }else{
    echo "<script>alert('Passwords Not matched.');
    window.location='../forgot/resetpassword.php';</script>";
   }
}













?>
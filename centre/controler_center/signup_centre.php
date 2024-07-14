<?php
include("../../config.php");
$admin = new Admin();
if (isset($_POST['name'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    if ($password == $confirm_password) {
            $longitude = $_POST['longitude'];
            $latitude = $_POST['latitude'];
            $stmt = $admin->ret("SELECT * FROM `centre` WHERE `c_email_id`='$email'");
            $number_of_rows = $stmt->rowCount();
            if ($number_of_rows > 0) {
                echo "<script> 
                alert('You are already a member of Rich. Please login');
                window.location='../signup/';</script>";
            }
            else {
                $query_register = "INSERT INTO `centre`(`c_name`,`c_email_id`,`c_password`,`c_longitude`,`c_latitude`)VALUES('$name','$email','$password','$longitude','$latitude');";
                $result = $admin->cud($query_register, "Insertion Successful");

                //opens file in append mode
                    $t=time();
                    $text="\n".date("Y-m-d",$t)."  ".$email." -New centre added";
                    $fp = fopen('../../log.txt', 'a');  
                    fwrite($fp, $text);  
                    // fwrite($fp, 'appending data');  
                    fclose($fp);

                echo "<script> window.location='../login/';</script>";
            }
        }else {
            echo "<script> 
                    alert('Password are not matching. Try again!');
                    window.location='../signup/';</script>";
        }
    }
    


?>
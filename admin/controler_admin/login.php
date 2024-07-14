<?php
include("../../config.php");
$admin = new Admin();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $query_login = $admin->ret("SELECT * FROM `admin` WHERE `ad_username`='$username' AND `ad_password`='$password'");
    $number_of_rows = $query_login->rowCount();
    if ($number_of_rows > 0) {
        $row = $query_login->fetch(PDO::FETCH_ASSOC);
        $id = $row['ad_id'];
        $_SESSION['ad_id'] = $id;

//opens file in append mode
$t=time();
$text="\n".date("Y-m-d",$t)."  ".$id." -Admin successfully Logined";
$fp = fopen('../../log.txt', 'a');  
fwrite($fp, $text);  
// fwrite($fp, 'appending data');  
fclose($fp);


        echo "<script> alert('You are successfully logged in.');
        window.location='../';</script>";

    }
    else {
        echo "<script> alert('Please Enter Valid Credentials.');
        window.location='../login.php';</script>";

    }
}




?>
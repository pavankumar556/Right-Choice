<?php
include("../config.php");
$admin = new Admin();
if (isset($_POST['name'])) {

    $name = $_POST['name'];
    // $type = $_POST['type'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirm_password = md5($_POST['confirm_password']);
    if ($password == $confirm_password) {
            $birth_date = $_POST['birth_date'];
            $stmt = $admin->ret("SELECT * FROM `student` WHERE `s_email_id`='$email'");
            $number_of_rows = $stmt->rowCount();
            if ($number_of_rows > 0) {
                echo "<script> 
                alert('You are already a member of Rich. Please login');
                window.location='../signup/';</script>";
            }
            else {
                $query_register = "INSERT INTO `student`(`s_name`,`s_birth_date`,`s_email_id`,`s_password`)VALUES('$name','$birth_date','$email','$password');";
                $result = $admin->cud($query_register, "Insertion Successful");


//opens file in append mode
$t=time();
$text="\n".date("Y-m-d",$t)."  ".$name."  ".$email." -Signup successful student";
$fp = fopen('../log.txt', 'a');  
fwrite($fp, $text);  
// fwrite($fp, 'appending data');  
fclose($fp);


                echo "<script>window.location='../login/';</script>";
            }

    }
    else {
        echo "<script> 
                alert('Password are not matching. Try again!');
                window.location='../signup/';</script>";
    }
}




?>
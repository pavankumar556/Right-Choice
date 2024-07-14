<?php
include("../../config.php");
$admin = new Admin();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    // $type = $_POST['type'];
    
// if ($type == "student") {
//         $query_login = $admin->ret("SELECT * FROM `student` WHERE `s_email_id`='$username' AND `s_password`='$password'");
//         $number_of_rows = $query_login->rowCount();
//         if ($number_of_rows > 0) {
//             $row = $query_login->fetch(PDO::FETCH_ASSOC);
//             $id = $row['s_id'];
//             $_SESSION['s_id'] = $id;
    //             echo "<script> alert('You are successfully logged in.');
//         window.location='../student/';</script>";
    //         }
//         else {
//             echo "<script> alert('Please Enter Valid Credentials.');
//         window.location='../login/';</script>";
    //         }
//     // $row = $stmt->fetch(PDO::FETCH_ASSOC);


    
// }    elseif ($type == "Centre") {
    $query_login = $admin->ret("SELECT * FROM `centre` WHERE `c_email_id`='$username' AND `c_password`='$password'");
    $number_of_rows = $query_login->rowCount();
    if ($number_of_rows > 0) {
        $row = $query_login->fetch(PDO::FETCH_ASSOC);
        if ($row['c_approval'] === "Approoved") {

            $id = $row['c_id'];
            $_SESSION['c_id'] = $id;


            //opens file in append mode
     $t=time();
     $text="\n".date("Y-m-d",$t)."  ".$id." -Centre uccessfully logged in";
     $fp = fopen('../../log.txt', 'a');  
     fwrite($fp, $text);  
     // fwrite($fp, 'appending data');  
     fclose($fp);
            echo "<script> alert('You are successfully logged in.');
            window.location='../';</script>";
        }
        else {
            echo "<script> alert('Wait until system approoves your request!');
        window.location='../login/';</script>";
        }

    }
    else {
        if(!isset($_SESSION['lock'])){
            $_SESSION['lock']=1;
        }
        $_SESSION['lock']++;
        
        if($_SESSION['lock']==4){
            $_SESSION['locked']=1;
        }
        
        echo "<script> alert('Please Enter Valid Credentials.');
        window.location='../login/';</script>";

    }
}
// }



?>
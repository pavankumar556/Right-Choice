<?php
include("../config.php");
$admin = new Admin();
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
        $query_login = $admin->ret("SELECT * FROM `student` WHERE `s_email_id`='$username' AND `s_password`='$password'");
        $number_of_rows = $query_login->rowCount();
        if ($number_of_rows > 0) {
                $row = $query_login->fetch(PDO::FETCH_ASSOC);
                $id = $row['s_id'];
                $_SESSION['s_id'] = $id;


                        //opens file in append mode
                $t=time();
                $text="\n".date("Y-m-d",$t)."  ".$id." -login successful student";
                $fp = fopen('../log.txt', 'a');  
                fwrite($fp, $text);  
                // fwrite($fp, 'appending data');  
                fclose($fp);  

                
                if(isset($_POST['longitude']) && isset($_POST['latitude'])){
                     $_SESSION['longitude']=$_POST['longitude'];
                     $_SESSION['latitude']=$_POST['latitude'];
                }

                echo "<script> alert('You are successfully logged in.');
                window.location='../';</script>";
            }
        else {
                    //opens file in append mode
                    $t=time();
                    $text="\n".date("Y-m-d",$t)."  ".$username."   ".$password."  -login unsuccessful student";
                    $fp = fopen('../log.txt', 'a');  
                    fwrite($fp, $text);  
                    // fwrite($fp, 'appending data');  
                    fclose($fp); 

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




?>
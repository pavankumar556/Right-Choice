<?php
include("../config.php");
$admin = new Admin();
if(isset($_POST['s_id'])){
    $s_id=$_POST['s_id'];
    // $experience=$_POST['experience'];
    $msg=$_POST['msg'];
    $s_name=$_POST['s_name'];
    $f_type="Student";

    $query = "INSERT INTO `feedback` (`f_type`,`s_id`, `stu_name`,`message`) VALUES('$f_type','$s_id','$s_name','$msg')";
    $result = $admin->cud($query, "Insertion Successful");

//opens file in append mode
$t=time();
$text="\n".date("Y-m-d",$t)."  ".$s_id."  ".$s_name."  ".$f_type."  ".$result."   "." -Feedback student";
$fp = fopen('../log.txt', 'a');  
fwrite($fp, $text);  
// fwrite($fp, 'appending data');  
fclose($fp);  

    echo "<script> alert('Thank you for your valuable Feedback!'); window.location='../index.php';</script>";
}
?>
<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['c_id'])){
    $c_id=$_POST['c_id'];
    // $experience=$_POST['experience'];
    $msg=$_POST['msg'];
    $c_name=$_POST['name'];
    $f_type="centre";

    $query = "INSERT INTO `feedback` (`f_type`,`c_id`, `c_name`,`message`) VALUES('$f_type','$c_id','$c_name','$msg')";
    $result = $admin->cud($query, "Insertion Successful");

    //opens file in append mode
    $t=time();
    $text="\n".date("Y-m-d",$t)."  ".$c_id."   ".$msg."   ".$c_name." -Centre Delete the test question";
    $fp = fopen('../../log.txt', 'a');  
    fwrite($fp, $text);  
    // fwrite($fp, 'appending data');  
    fclose($fp);

    echo "<script> alert('Thank you for your valuable Feedback!'); window.location='../index.php';</script>";
}
?>
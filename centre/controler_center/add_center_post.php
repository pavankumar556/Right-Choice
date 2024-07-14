<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['p_name'])){
    $c_id=$_POST['c_id'];
    $p_name=$_POST['p_name'];
    $p_address=$_POST['p_address'];
    $p_longitude=$_POST['p_longitude'];
    $p_latitude=$_POST['p_latitude'];
    $p_description=$_POST['p_description'];
    $p_duration=$_POST['p_duration'];
    $p_seats=$_POST['p_seats'];

    $query = "INSERT INTO `post` (`c_id`,`p_name`, `p_address`, `p_longitude`, `p_latitude`, `p_description`, `p_duration`,`p_seats`) VALUES('$c_id','$p_name','$p_address','$p_longitude','$p_latitude','$p_description','$p_duration','$p_seats')";
    $result = $admin->cud($query, "Insertion Successful");

     //opens file in append mode
     $t=time();
     $text="\n".date("Y-m-d",$t)."  ".$c_id."  ".$p_name."  ".$p_address."  ".$p_duration."   "." -Centre added the Post";
     $fp = fopen('../../log.txt', 'a');  
     fwrite($fp, $text);  
     // fwrite($fp, 'appending data');  
     fclose($fp);  
 
    echo "<script>window.location='../view_post.php';</script>";
}
?>
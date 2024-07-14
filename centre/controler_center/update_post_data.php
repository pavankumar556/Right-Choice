<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['p_name'])){
    $p_id=$_POST['p_id'];
    $p_name=$_POST['p_name'];
    $p_address=$_POST['p_address'];
    $p_longitude=$_POST['p_longitude'];
    $p_latitude=$_POST['p_latitude'];
    $p_description=$_POST['p_description'];
    $p_duration=$_POST['p_duration'];
    $p_seats=$_POST['p_seats'];

    $query_update = "UPDATE `post` SET `p_name`='$p_name', `p_address`='$p_address', `p_longitude`='$p_longitude', `p_latitude`='$p_latitude', `p_description`='$p_description', `p_duration`='$p_duration',`p_seats`='$p_seats' WHERE `p_id`='$p_id'";
    $result = $admin->cud($query_update, "Updation Successful");

    //opens file in append mode
    $t=time();
    $text="\n".date("Y-m-d",$t)."  ".$p_id." -Centre Post updated";
    $fp = fopen('../../log.txt', 'a');  
    fwrite($fp, $text);  
    // fwrite($fp, 'appending data');  
    fclose($fp);
    echo "<script>window.location='../view_post.php';</script>";
}
?>
<?php
include("../../config.php");
$admin = new Admin();
if(isset($_GET['apt_id'])){
    $apt_id=$_GET['apt_id'];
    $query = "DELETE FROM `apti_test` WHERE `apt_id`='$apt_id'";
    $result = $admin->cud($query, "Deletion Successful");


    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$apt_id." -Apti test question successful Deleted";
   $fp = fopen('../../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);

    echo "<script>window.location='../viewtest.php';</script>";
}
?>
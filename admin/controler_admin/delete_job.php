<?php
include("../../config.php");
$admin = new Admin();
if(isset($_GET['j_id'])){
    $j_id=$_GET['j_id'];
    $query = "DELETE FROM `job` WHERE `j_id`='$j_id'";
    $result = $admin->cud($query, "Deletion Successful");


    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$j_id." -Job successfully Deleted";
   $fp = fopen('../../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);

    echo "<script>window.location='../job_view.php';</script>";
}
?>
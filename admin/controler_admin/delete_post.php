<?php
include("../../config.php");
$admin = new Admin();
if(isset($_GET['p_id'])){
    $p_id=$_GET['p_id'];
    $query = "DELETE FROM `post` WHERE `p_id`='$p_id'";
    $result = $admin->cud($query, "Deletion Successful");

    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$p_id." -Post successfully Deleted by admin";
   $fp = fopen('../../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);

    echo "<script>window.location='../manage_post.php';</script>";
}
?>
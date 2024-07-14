<?php
include("../../config.php");
$admin = new Admin();
if(isset($_GET['p_id'])){
    $p_id=$_GET['p_id'];
    $query = "DELETE FROM `post` WHERE `p_id`='$p_id'";
    $result = $admin->cud($query, "Deletion Successful");

     //opens file in append mode
     $t=time();
     $text="\n".date("Y-m-d",$t)."  ".$p_id." -Delete Post of the Centre";
     $fp = fopen('../../log.txt', 'a');  
     fwrite($fp, $text);  
     // fwrite($fp, 'appending data');  
     fclose($fp);  
 
    echo "<script>window.location='../view_post.php';</script>";
}
?>
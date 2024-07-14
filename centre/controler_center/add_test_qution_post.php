<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['qution'])){
    $qution=$_POST['qution'];
    $apt_type="centre";
    $p_id=$_POST['p_id'];
    $corect_answer=$_POST['corect_answer'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];

    $query = "INSERT INTO `apti_test`(`apti_test_qution`,`apt_type`, `apt_answer`, `apt_option1`, `apt_option2`, `apt_option3`,`p_id`)VALUES('$qution','$apt_type','$corect_answer','$option1','$option2','$option3','$p_id')";
    $result_insert = $admin->cud($query, "Insertion Successful");

    $admin = new Admin();
    $queryup = "UPDATE `post` SET  `p_status`=1 WHERE `p_id`='$p_id'";
    $result_update = $admin->cud($queryup, "Successful");


     //opens file in append mode
     $t=time();
     $text="\n".date("Y-m-d",$t)."  ".$qution."  ".$apt_type."  ".$p_id."  ".$corect_answer."   "." -Centre added the Test question to the Post";
     $fp = fopen('../../log.txt', 'a');  
     fwrite($fp, $text);  
     // fwrite($fp, 'appending data');  
     fclose($fp); 


  echo "<script>window.location='../test.php';</script>"; 
}
?>
<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['qution'])){
    $qution=$_POST['qution'];
    $apti_stream=$_POST['apti_stream'];
    $corect_answer=$_POST['corect_answer'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
    $apt_type="admin";

    $query = "INSERT INTO `apti_test`(`apti_test_qution`,`apt_stream`, `apt_answer`, `apt_option1`, `apt_option2`, `apt_option3`,`apt_type`)VALUES('$qution','$apti_stream','$corect_answer','$option1','$option2','$option3','$apt_type');";
    $result = $admin->cud($query, "Insertion Successful");

    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$qution."  ".$corect_answer."  ".$option1."  ".$option2."  ".$qution."  ".$option3." -Test Question successfully added by student";
   $fp = fopen('../../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);


    echo "<script>window.location='../add_test.php';</script>";
}
?>
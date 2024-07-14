<?php
include("../../config.php");
$admin = new Admin();
if(isset($_POST['apt_id'])){

    $apt_id=$_POST['apt_id'];
    $qution=$_POST['qution'];
    $corect_answer=$_POST['corect_answer'];
    $option1=$_POST['option1'];
    $option2=$_POST['option2'];
    $option3=$_POST['option3'];
   
    $query = "UPDATE `apti_test` SET `apti_test_qution`='$qution', `apt_answer`='$corect_answer', `apt_option1`='$option1', `apt_option2`='$option2', `apt_option3`='$option3' WHERE `apt_id`=$apt_id ;";
    $result = $admin->cud($query, "updation Successful");

    //opens file in append mode
    $t=time();
    $text="\n".date("Y-m-d",$t)."  ".$apt_id." -Centre Update the test question";
    $fp = fopen('../../log.txt', 'a');  
    fwrite($fp, $text);  
    // fwrite($fp, 'appending data');  
    fclose($fp);

    echo "<script>window.location='../test.php';</script>";
}
?>
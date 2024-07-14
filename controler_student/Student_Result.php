<?php
include('../config.php');
if(isset($_SESSION['student_score'])){
    $score=$_SESSION['student_score'];
    $p_id=$_SESSION['student_p_id'];
    $s_id=$_SESSION['s_id'];
    $admin = new Admin();
    $stmt = $admin->ret("SELECT * FROM `post` WHERE `p_id`='$p_id'");

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $c_id=$row['c_id'];
        }


        $stmt2 = $admin->ret("SELECT * FROM `request` WHERE `p_id`='$p_id' AND `s_id`='$s_id'");
        $number_of_rows = $stmt2->rowCount();
        if($number_of_rows>0){
            echo "<script>alert('You are Already Applied.');</script>";
        }
         if($number_of_rows<=0){
            $query = $admin->cud("INSERT INTO `request`(`p_id`, `c_id`, `s_id`,`req_score`) VALUES ('$p_id','$c_id','$s_id','$score')","UPDATED");
            echo "<script>alert('Application Sent successful');</script>";
        }
    unset ($_SESSION['qpostr']);
    unset ($_SESSION['student_p_id']);
    unset ($_SESSION['student_score']);
    

    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$p_id."  ".$score."   ".$s_id." -Request successful student";
   $fp = fopen('../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);

    // echo "<script>alert('Application Sent successful');</script>";
    echo "<script>window.location='../index.php';</script>";
}else{
    echo "<script>window.location='../index.php';</script>";
}
?>
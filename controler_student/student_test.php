<?php
include("../config.php");
$admin = new Admin();
if (!isset($_SESSION['s_id'])) {
    echo "<script>window.location='login/';</script>";
}
if(isset($_POST['id'])){

    $id=$_POST['id'];
    $option0="";
    $option1="";
    $option2="";
    $option3="";
    
    if(isset($_POST['option0'])){
    
        $option0=$_POST['option0'];
    }
    if(isset($_POST['option1'])){
    
        $option0=$_POST['option1'];
    }
    if(isset($_POST['option2'])){
    
        $option0=$_POST['option2'];
    }
    if(isset($_POST['option3'])){
    
        $option0=$_POST['option3'];
    }
    
    
    if(!isset($_SESSION['student_score'])){
        $_SESSION['student_score']=0;
    }
    
    // $stmt = $admin->ret("SELECT * FROM `apti_test` WHERE `apt_id`='$id'");
    $stmt = $admin->ret("SELECT * FROM `apti_test` WHERE `apt_type`='centre' AND `apt_id`='$id'");
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['apt_answer']==$option0){
            $_SESSION['student_score']++;
        }elseif($row['apt_answer']==$option1){
            $_SESSION['student_score']++;
        }elseif($row['apt_answer']==$option2){
            $_SESSION['student_score']++;
        }elseif($row['apt_answer']==$option3){
            $_SESSION['student_score']++;
        }
           $scoredata=$_SESSION['student_score'];
        // echo $_SESSION['qpostr']++;


        //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$scoredata." -Student Test successful ";
   $fp = fopen('../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);

    echo '<script>window.location="../Aptitudeteststudent.php";</script>';
}else{
    echo '<script>window.location="../Aptitudeteststudent.php";</script>';

}
?>
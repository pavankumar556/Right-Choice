<?php
include("../config.php");
$admin = new Admin();
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


if(!isset($_SESSION['arts_score'])){
    $_SESSION['arts_score']=0;
}
if(!isset($_SESSION['com_score'])){
    $_SESSION['com_score']=0;
}
if(!isset($_SESSION['science_score'])){
    $_SESSION['science_score']=0;
}
if(!isset($_SESSION['diploma_score'])){
    $_SESSION['diploma_score']=0;
}
if(!isset($_SESSION['iti_score'])){
    $_SESSION['iti_score']=0;
}

$stmt = $admin->ret("SELECT * FROM `apti_test` WHERE `apt_id`='$id'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
if($row['apt_stream']=="arts"){
    if($row['apt_answer']==$option0){
        $_SESSION['arts_score']++;
    }elseif($row['apt_answer']==$option1){
        $_SESSION['arts_score']++;
    }elseif($row['apt_answer']==$option2){
        $_SESSION['arts_score']++;
    }elseif($row['apt_answer']==$option3){
        $_SESSION['arts_score']++;
    }
}elseif($row['apt_stream']=="commerce"){
    if($row['apt_answer']==$option0){
        $_SESSION['com_score']++;
    }elseif($row['apt_answer']==$option1){
        $_SESSION['com_score']++;
    }elseif($row['apt_answer']==$option2){
        $_SESSION['com_score']++;
    }elseif($row['apt_answer']==$option3){
        $_SESSION['com_score']++;
    }
}elseif($row['apt_stream']=="science"){
    if($row['apt_answer']==$option0){
        $_SESSION['science_score']++;
    }elseif($row['apt_answer']==$option1){
        $_SESSION['science_score']++;
    }elseif($row['apt_answer']==$option2){
        $_SESSION['science_score']++;
    }elseif($row['apt_answer']==$option3){
        $_SESSION['science_score']++;
    }
}elseif($row['apt_stream']=="Diploma"){
    if($row['apt_answer']==$option0){
        $_SESSION['diploma_score']++;
    }elseif($row['apt_answer']==$option1){
        $_SESSION['diploma_score']++;
    }elseif($row['apt_answer']==$option2){
        $_SESSION['diploma_score']++;
    }elseif($row['apt_answer']==$option3){
        $_SESSION['diploma_score']++;
    }
}elseif($row['apt_stream']=="ITI"){
    if($row['apt_answer']==$option0){
        $_SESSION['iti_score']++;
    }elseif($row['apt_answer']==$option1){
        $_SESSION['iti_score']++;
    }elseif($row['apt_answer']==$option2){
        $_SESSION['iti_score']++;
    }elseif($row['apt_answer']==$option3){
        $_SESSION['iti_score']++;
    }
}
}
echo '<script>window.location="../psychometric.php";</script>';
?>
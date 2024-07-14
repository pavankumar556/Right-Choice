<?php
include('../config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='../login/';</script>";
}
if(isset($_POST['name'])){
     $s_name=$_POST['name'];
     $bdate=$_POST['bdate'];
    $admin = new Admin();
    $query = $admin->cud("UPDATE `student` SET `s_name`='$s_name',`s_birth_date`='$bdate' WHERE `s_id`=" . $_SESSION['s_id'],"Success");
  echo "<script>window.location='../profile.php';</script>";


}
?>
<?php
include("../../config.php");
$admin = new Admin();
if (isset($_POST['j_id'])) {
    $j_id=$_POST['j_id'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $website = $_POST['website'];
    $no_of_jobs = $_POST['no_of_jobs'];
    $salary = $_POST['salary'];
    $job_type = $_POST['job_type'];
    $location = $_POST['location'];
    $query_update = "UPDATE `job` SET `job_designation`='$designation', `job_address`='$email', `job_phone_no`='$phone_no', `job_website`='$website', `job_no_of_jobs`='$no_of_jobs', `job_salary`='$salary',`job_type`='$job_type',`j_location`='$location' WHERE `j_id`='$j_id'";
    $result = $admin->cud($query_update, "Updation Successful");



    //opens file in append mode
$t=time();
$text="\n".date("Y-m-d",$t)."  ".$j_id." -Admin successfully updated the post";
$fp = fopen('../../log.txt', 'a');  
fwrite($fp, $text);  
// fwrite($fp, 'appending data');  
fclose($fp);

    echo "<script>window.location='../job_view.php';</script>";
}
?>
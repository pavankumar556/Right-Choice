<?php
include("../../config.php");
$admin = new Admin();
if(isset($_GET['req_id'])){

    $req_id=$_GET['req_id'];
    $aprove="Rejected";
    $query = "UPDATE `request` SET `req_requst`='$aprove' WHERE `req_id`=$req_id ;";
    $result = $admin->cud($query, "updation Successful");


    //opens file in append mode
    $t=time();
    $text="\n".date("Y-m-d",$t)."  ".$req_id." -student Request Rejected by the centre";
    $fp = fopen('../../log.txt', 'a');  
    fwrite($fp, $text);  
    // fwrite($fp, 'appending data');  
    fclose($fp);

    echo "<script>window.location='../view_request.php';</script>";
}
?>
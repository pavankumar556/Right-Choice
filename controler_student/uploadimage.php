<?php
include('../config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='../login/';</script>";
}

$target_dir = "../UploadImage/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo '<script>alert("File is an image'. $check["mime"] .'");</script>';
    echo '<script>window.location="../profile.php";</script>';
    // echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo '<script>alert("File is not an image.");</script>';
    echo '<script>window.location="../profile.php";</script>';
    // echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
    echo '<script>alert("Sorry, file already exists.");</script>';
    echo '<script>window.location="../profile.php";</script>';
//   echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000000000000) {
    
    echo '<script>alert("Sorry, your file is too large.");</script>';
    echo '<script>window.location="../profile.php";</script>';
//   echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<script>alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");</script>';
    echo '<script>window.location="../profile.php";</script>';
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo '<script>alert("Sorry, your file was not uploaded");</script>';
    echo '<script>window.location="../profile.php";</script>';
//   echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $imagename=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
    $admin = new Admin();
    $query = $admin->cud("UPDATE `student` SET `s_img`='$imagename' WHERE `s_id`=" . $_SESSION['s_id'],"Success");

    //opens file in append mode
   $t=time();
   $text="\n".date("Y-m-d",$t)."  ".$_SESSION['s_id']." -Image successfully Updated";
   $fp = fopen('../log.txt', 'a');  
   fwrite($fp, $text);  
   // fwrite($fp, 'appending data');  
   fclose($fp);


    echo '<script>alert("Profile Uploaded Successfully.");</script>';
    echo '<script>window.location="../profile.php";</script>';

    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
    echo '<script>window.location="../profile.php";</script>';
    // echo "Sorry, there was an error uploading your file.";
  }
}
?>
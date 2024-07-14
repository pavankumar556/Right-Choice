<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/page_icon.png" rel="icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <title>colleges | RICH</title>
    <style>
    body {
        background-image: url(img/bg_colleg_bg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg1 {
        width: 80%;
        /* background-color: white; */
        height: fit-content;
        text-align: center;
        margin: auto;
        border-radius: 15px;
        background-image: url(img/bg_ci.jpg);
    }

    .bg2 {
        width: 80%;
        height: 100px;
        background: blue;
        text-align: center;
        margin: auto;
        border-radius: 20px;
        margin-top: 10px;
    }

    ::-webkit-scrollbar {
        width: 0px;
    }

    .in {
        background: url('img/8226.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        color: white;
        width: 95%;
        height: fit-content;
        overflow: auto;
        margin: auto;
        border-radius: 10px;
    }

    .sino {
        background: #019300;
        width: 6%;
        height: 8%;
        border-bottom-right-radius: 10px;
        border-top-left-radius: 10px;
        color: white;
    }

    label {
        font-family: 'Source Code Pro', monospace;
    }

    a {
        text-decoration: none;
        color: white;
        background: blue;
        padding: 7px;
        margin-right: 13px;
        border-radius: 6px;
    }
    </style>
</head>

<body>
    <br>
    <br>
    <br>
    <div class='bg1'>
        <!-- <span>Latest </span><span>Jobs</span> -->
        <h1 style="padding-top:5px;font-weight: 700;color:white;">Top <span style="color:blue;">Colleges</span></h1>
        <br>
        <br>
        <?php
                                include("config.php");
 $admin = new Admin();
 $query = "SELECT * FROM `centre`";
 $stmt = $admin->ret($query);
 $a=1;
 while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
  if($row['c_approval']=="Approoved"){
    $c_id=$row['c_id'];
    $query_search = "SELECT * FROM `post` WHERE `c_id`='$c_id'";
    $stmt_search = $admin->ret($query_search);
    $count = $stmt_search->rowCount();
  
    if($count>0){
        
     echo '<div class="in">
     <div class="sino">
       <h3>'.$a.'</h3>
     </div>
     <div style="text-align:left;float: left;margin-left: 23px;">
       <label for="name" >College Name</label>
       <h3 style="FONT-FAMILY: revert;">'.$row['c_name'].'</h3>
     </div>
     <div style="text-align:left;float: left;margin-left: 23px;">
       <label for="name" >Email address</label>
       <h5 style="FONT-FAMILY: revert;">'.$row['c_email_id'].'</h5>
     </div>
     <div style="text-align:left;float: left;margin-left: 23px;">
       <label for="name" >No. of Streams Available</label>
       <h3 style="FONT-FAMILY: revert; color: Red;text-align: center;">'.$count.'</h3>
     </div>
     <div style="text-align:left;float: right;margin-left: 23px;">
    
     </div>
   </div>
   <br>';
    }
   $a++;
  }
  
  }
        
       ?>
    </div>
    <br>
    <br>














    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>
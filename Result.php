<?php
include('config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='login/';</script>";
}
else if (!isset($_SESSION['teststate'])) {
  echo "<script>window.location='index.php';</script>";
}else{
  
}
$_SESSION['resultstate']=1;
$admin = new Admin();
$query = $admin->ret("SELECT * FROM `student` WHERE `s_id`=" . $_SESSION['s_id']);
$number_of_rows = $query->rowCount();
if ($number_of_rows > 0) {
  $row = $query->fetch(PDO::FETCH_ASSOC);
  $s_name = $row['s_name'];
  $s_email_id = $row['s_email_id'];
  $s_id = $row['s_id'];
}
else {
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="shortcut icon" href="img/page_icon.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      body {
	margin: 0;
	padding: 0;
	background-color: #000;
}

.block {
	position: relative;
	margin: auto;
	width: 615px;
	height: fit-content;
	background: linear-gradient(0deg, #000, #272727);
    border-radius: 24px;
}

.block:before, .block:after {
	content: '';
	position: absolute;
	left: -2px;
	top: -2px;
	background: linear-gradient(45deg, #fb0094, #0000ff, #00ff00,#ffff00, #ff0000, #fb0094, 
		#0000ff, #00ff00,#ffff00, #ff0000);
	background-size: 400%;
	width: calc(100% + 4px);
	height: calc(100% + 4px);
	z-index: -1;
	animation: steam 20s linear infinite;
    border-radius: 24px;
    
}

@keyframes steam {
	0% {
		background-position: 0 0;
	}
	50% {
		background-position: 400% 0;
	}
	100% {
		background-position: 0 0;
	}
}

.block:after {
	filter: blur(50px);
    border-radius: 24px;
}
a{
  float: right;
    text-decoration: none;
    background: yellow;
    padding-left: 10px;
    color: black;
    padding-right: 10px;
    border-top-right-radius: 5px;
    border-bottom-right-radius: 5px;
}

    </style>
  </head>
<body>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="block">
        <h1 style="color: white;
        text-align: center;
        -webkit-text-stroke: 2px white;
        padding-top: 10px;">Result</h1>
        <?php
            if(isset($_SESSION['arts_score']) || isset($_SESSION['iti_score']) || isset($_SESSION['com_score']) || isset($_SESSION['science_score']) || isset($_SESSION['diploma_score'])){
              $arts_score=$_SESSION['arts_score']*25;
              $iti_score=$_SESSION['iti_score']*25;
              $com_score=$_SESSION['com_score']*25;
              $science_score=$_SESSION['science_score']*25;
              $diploma_score=$_SESSION['diploma_score']*25;
              // $science_score=100;
              if($science_score==100){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">SCIENCE</span>
                  <div class="progress" style="margin: auto;width: 90%;"  id="a" >
                
                  <div class="progress-bar" role="progressbar" id="sc" style="width:'.$science_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$science_score.'%</div>
                  <a href="top_science_clg.php">View</a>
                
                    </div>
                    ';
                    
              }
              if($com_score==100){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">COMMERCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$com_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$com_score.'%</div>
                    <a href="top_commerce_clg.php">View</a>
                  </div>';
              }
              if($arts_score==100){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ARTS</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$arts_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$arts_score.'%</div>
                    <a href="top_arts_clg.php">View</a>
                  </div>';
              }
              if($diploma_score==100){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">DIPLOMA</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$diploma_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$diploma_score.'%</div>
                    <a href="top_diploma_clg.php">View</a>
                  </div>';
              }
              if($iti_score==100){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ITI</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$iti_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$iti_score.'%</div>
                    <a href="top_iti_clg.php">View</a>
                  </div>';
              }
              if($science_score==75){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">SCIENCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$science_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$science_score.'%</div>
                    <a href="top_science_clg.php">View</a>
                  </div>';
              }
              if($com_score==75){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">COMMERCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$com_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$com_score.'%</div>
                    <a href="top_commerce_clg.php">View</a>
                  </div>';
              }
              if($arts_score==75){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ARTS</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$arts_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$arts_score.'%</div>
                    <a href="top_arts_clg.php">View</a>
                  </div>';
              }
              if($diploma_score==75){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">DIPLOMA</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$diploma_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$diploma_score.'%</div>
                    <a href="top_diploma_clg.php">View</a>
                  </div>';
              }
              if($iti_score==75){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ITI</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$iti_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$iti_score.'%</div>
                    <a href="top_iti_clg.php">View</a>
                  </div>';
              }
              if($science_score==50){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">SCIENCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$science_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$science_score.'%</div>
                    <a href="top_science_clg.php">View</a>
                  </div>';
              }
              if($com_score==50){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">COMMERCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$com_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$com_score.'%</div>
                    <a href="top_commerce_clg.php">View</a>
                  </div>';
              }
              if($arts_score==50){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ARTS</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$arts_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$arts_score.'%</div>
                    <a href="top_arts_clg.php">View</a>
                  </div>';
              }
              if($diploma_score==50){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">DIPLOMA</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$diploma_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$diploma_score.'%</div>
                    <a href="top_diploma_clg.php">View</a>
                  </div>';
              }
              if($iti_score==50){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ITI</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$iti_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$iti_score.'%</div>
                    <a href="top_iti_clg.php">View</a>
                  </div>';
              }
              if($science_score==25){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">SCIENCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$science_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$science_score.'%</div>
                    <a href="top_science_clg.php">View</a>
                  </div>';
              }
              if($com_score==25){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">COMMERCE</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$com_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$com_score.'%</div>
                    <a href="top_commerce_clg.php">View</a>
                  </div>';
              }
              if($arts_score==25){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ARTS</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$arts_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$arts_score.'%</div>
                    <a href="top_arts_clg.php">View</a>
                  </div>';
              }
              if($diploma_score==25){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">DIPLOMA</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$diploma_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$diploma_score.'%</div>
                    <a href="top_diploma_clg.php">View</a>
                  </div>';
              }
              if($iti_score==25){
                  echo '<br>
                  <span style="color: white;margin-left: 32px;color: white;">ITI</span>
                  <div class="progress" style="margin: auto;width: 90%;">
                    <div class="progress-bar" role="progressbar" style="width:'.$iti_score.'%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">'.$iti_score.'%</div>
                    <a href="top_iti_clg.php">View</a>
                  </div>';
              }
              if($science_score==0){
          
              }
              if($com_score==0){
          
              }
              if($arts_score==0){
          
              }
              if($diploma_score==0){
          
              }
              if($iti_score==0){
          
              }
              
          
            }else{
              echo '<script>alert("Better Luck Next Time");
              window.location="psychometric.php";</script>';
            }
        ?>
        
        <br>
        <br>
        <!-- <span style="color: white;margin-left: 32px;color: white;">SCIENCE</span>
        <div class="progress" style="margin: auto;width: 90%;">
          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
        </div> -->
    </div>
    
</body>
</html>
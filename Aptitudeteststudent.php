<?php
include('config.php');
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='login/';</script>";
}
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
    <!-- <title>Document</title> -->
    <link rel="icon" href="img/page_icon.png" type="image/png" />
    <title>Test | RICH</title>
    <style>
    ::-webkit-scrollbar {
        width: 0px;
    }

    .background_div {
        width: 70%;
        height: fit-content;
        background-color: #ffffff;
        border-radius: 13px;
        text-align: center;
        margin: auto;
        box-shadow: 0px 5px 10px 0px rgb(0 0 0 / 70%);
        overflow: hidden;
    }

    body {
        background-image: url(img/plainblue.png);
        background-repeat: no-repeat;
        background-size: cover;
    }

    .bg1 {
        width: 80%;
        background-color: white;
        height: 400px;
        text-align: center;
        margin: auto;
        border-radius: 15px;
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
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <br>
<?php

if(isset($_GET['p_id'])){
    $p_id=$_GET['p_id'];
     $_SESSION['student_p_id']=$p_id;
}
if(!isset($_SESSION['qpostr'])){
    $_SESSION['qpostr']=0;
    // echo "not set <br>";
}
// echo $_SESSION['qpostr'];

if(isset($_SESSION['student_p_id'])){

    $student_p_id=$_SESSION['student_p_id'];
    $admin = new Admin();
    $query = "SELECT * FROM `apti_test` WHERE `apt_type`='centre' AND `p_id`='$student_p_id' ORDER BY rand()";
    $stmt = $admin->ret($query);
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        if($_SESSION['qpostr']==5){
            // echo "ffff";
            echo '<script>window.location="controler_student/Student_Result.php";</script>';

        } else {
            $_SESSION['qpostr']++;
            innershuffle($row['apt_id'],$row['apti_test_qution'],$row['apt_answer'],$row['apt_option1'],$row['apt_option2'],$row['apt_option3']);
            break;
        }

    }
}
else{
    echo '<script>window.location="index.php";</script>';

}



function innershuffle($id,$qution,$ans1,$op1,$op2,$op3){
    $randomshuffle=rand(1,4);
    if($randomshuffle==1){
        echo '<table>
        <tr>
            <div class="background_div">
            <div style="    
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height:13px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Entrance <span style="color:blue;">Test</span></h1>
                <form action="controler_student/student_test.php" method="post">
                    <br>
                    <br>
                    <b style="    
                              width: 80%;
                              height: 40px;
                              padding-left: 15px;
                              font-size: larger;
                           ">'.$qution.'</b>
                    <br>
                    <input type="text" name="id" value="'.$id.'" hidden>
                    <br>
                    <input type="Submit" name="option0" placeholder="Right answer." style="    border: 3px solid #9912a2;
                                    width: 26%;
                                    height: 33px;
                                    border-radius: 4px;
                                    padding-left: 15px;" readonly value="'.$ans1.'"> <br><br>
                    <input type="Submit" name="option1" placeholder="Option-1" style="    border: 3px solid #e91111;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op1.'"><br><br>
                    <input type="Submit" name="option2" placeholder="Option-2" style="    border: 3px solid #00f0ff;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op2.'"><br><br>
                    <input type="Submit" name="option3" placeholder="Option-3" style="    border: 3px solid #ffd912;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op3.'"><br><br>
                    <div style="width: 100%;
                                 height: 60px;
                                 background: #03cae4;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;">

                    </div>
                </form>
            </div>
        </tr>
    </table>';
    }elseif($randomshuffle==2){
        echo '<table>
        <tr>
            <div class="background_div">
            <div style="    
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height:13px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Entrance <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/student_test.php" method="post">
                    <b style="    
                              width: 80%;
                              height: 40px;
                              padding-left: 15px;
                              font-size: larger;
                           ">'.$qution.'</b>
                    <input type="text" name="id" value="'.$id.'" hidden>
                    <br>
                    <br>
                    <input type="Submit" name="option0" placeholder="Right answer." style="    border: 3px solid #9912a2;
                                    width: 26%;
                                    height: 33px;
                                    border-radius: 4px;
                                    padding-left: 15px;" readonly value="'.$op1.'"> <br><br>
                    <input type="Submit" name="option1" placeholder="Option-1" style="    border: 3px solid #e91111;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$ans1.'"><br><br>
                    <input type="Submit" name="option2" placeholder="Option-2" style="    border: 3px solid #00f0ff;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op2.'"><br><br>
                    <input type="Submit" name="option3" placeholder="Option-3" style="    border: 3px solid #ffd912;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op3.'"><br><br>
                    <div style="width: 100%;
                                 height: 60px;
                                 background: #03cae4;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;">

                    </div>
                </form>
            </div>
        </tr>
    </table>';
    }elseif($randomshuffle==3){
        echo '<table>
        <tr>
            <div class="background_div">
            <div style="    
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height:13px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Entrance <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/student_test.php" method="post">
                    <b style="    
                              width: 80%;
                              height: 40px;
                              padding-left: 15px;
                              font-size: larger;
                           ">'.$qution.'</b>
                    <input type="text" name="id" value="'.$id.'" hidden>
                    <br>
                    <br>
                    <input type="Submit" name="option0" placeholder="Right answer." style="    border: 3px solid #9912a2;
                                    width: 26%;
                                    height: 33px;
                                    border-radius: 4px;
                                    padding-left: 15px;" readonly value="'.$op3.'"> <br><br>
                    <input type="Submit" name="option1" placeholder="Option-1" style="    border: 3px solid #e91111;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op2.'"><br><br>
                    <input type="Submit" name="option2" placeholder="Option-2" style="    border: 3px solid #00f0ff;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op1.'"><br><br>
                    <input type="Submit" name="option3" placeholder="Option-3" style="    border: 3px solid #ffd912;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$ans1.'"><br><br>
                    <div style="width: 100%;
                                 height: 60px;
                                 background: #03cae4;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;">

                    </div>
                </form>
            </div>
        </tr>
    </table>';
    }elseif($randomshuffle==4){
        echo '<table>
        <tr>
            <div class="background_div">
            <div style="    
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height:13px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Entrance <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/student_test.php" method="post">
                    <b style="    
                              width: 80%;
                              height: 40px;
                              padding-left: 15px;
                              font-size: larger;
                           ">'.$qution.'</b>
                    <input type="text" name="id" value="'.$id.'" hidden>
                    <br>
                    <br>
                    <input type="Submit" name="option0" placeholder="Right answer." style="    border: 3px solid #9912a2;
                                    width: 26%;
                                    height: 33px;
                                    border-radius: 4px;
                                    padding-left: 15px;" readonly value="'.$op2.'"> <br><br>
                    <input type="Submit" name="option1" placeholder="Option-1" style="    border: 3px solid #e91111;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op1.'"><br><br>
                    <input type="Submit" name="option2" placeholder="Option-2" style="    border: 3px solid #00f0ff;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$ans1.'"><br><br>
                    <input type="Submit" name="option3" placeholder="Option-3" style="    border: 3px solid #ffd912;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value="'.$op3.'"><br><br>
                    <div style="width: 100%;
                                 height: 60px;
                                 background: #03cae4;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;">

                    </div>
                </form>
            </div>
        </tr>
    </table>';
    }

}
?>
<script>
                value=100;
                value2=30;
                green=255;
                red=0;
                function myGreeting(){
                    document.getElementById("progress").style.width = value+'%';   
                    document.getElementById("progress").style.background = 'rgb('+red+' '+green+' 0)';   
                    document.getElementById("value").innerHTML = Math.trunc( value2 )+' sec';   
                    console.log(value);                 
                    value=value-3.3333;
                    value2=value2-1;
                    // if(value2==15){
                    //     red=255;
                    //     green=0
                    // }
                    
                    if(red==255){

                        green=green-17;
                        // green=green-8.5;
                    }else{
                        red=red+17;
                    }
                    if(value>=0){
                        setTimeout(myGreeting, 1000);
                    }else{
                        console.log('next');
                        window.location='controler_student/student_test.php';
                    }
                    
                }
                myGreeting();

                

            </script>
</body>
</html>
<?php
include('config.php');
$_SESSION['teststate']=0;
if (!isset($_SESSION['s_id'])) {
  echo "<script>window.location='login/';</script>";
}
if(isset($_SESSION['resultstate'])) {
    unset($_SESSION['resultstate']);
    echo "<script>window.location='index.php';</script>";
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
    <?php
    if(!isset($_SESSION['qarts'])){
        $_SESSION['qarts']=1;
    }
    if(!isset($_SESSION['qcom'])){
        $_SESSION['qcom']=1;
    }
    if(!isset($_SESSION['qscience'])){
        $_SESSION['qscience']=1;
    }
    if(!isset($_SESSION['qdiploma'])){
        $_SESSION['qdiploma']=1;
    }
    if(!isset($_SESSION['qiti'])){
        $_SESSION['qiti']=1;
    }
       
    function test(){
        $admin = new Admin();
        $rana=rand(1,5);
        if($rana==1){
               
                    if($_SESSION['qarts']<=4){
                    
                        $query = "SELECT * FROM `apti_test` WHERE `apt_type`='admin' AND `apt_stream`='arts' ORDER BY rand()";
                        $stmt = $admin->ret($query);
                        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                            
                                innershuffle($row['apt_id'],$row['apti_test_qution'],$row['apt_answer'],$row['apt_option1'],$row['apt_option2'],$row['apt_option3']);
                                // echo "arts ";
                                break;
                        }
                        // echo $_SESSION['qarts'].'-arts';
                        $_SESSION['qarts']++;
                    }else{
                        $rana="";
                        test();
                    }
                
        }elseif($rana==2){
            
                if($_SESSION['qcom']<=4){
                    $query_sss = "SELECT * FROM `apti_test` WHERE `apt_type`='admin' AND `apt_stream`='commerce' ORDER BY rand()";
                    $stmt_sss = $admin->ret($query_sss);
                    while($row_sss = $stmt_sss->fetch(PDO::FETCH_ASSOC)){
                      
                            innershuffle($row_sss['apt_id'],$row_sss['apti_test_qution'],$row_sss['apt_answer'],$row_sss['apt_option1'],$row_sss['apt_option2'],$row_sss['apt_option3']);
                            // echo "commerce ";
                           

                            break;
                       
                    }

                    // while($row_ss = $stmt_ss->fetch(PDO::FETCH_ASSOC)){

                    // }
                    // echo $_SESSION['qcom'].'-com';
                    $_SESSION['qcom']++;
                }else{
                    $rana="";
                    test();
                }
           
        }elseif($rana==3){
           
                if($_SESSION['qscience']<=4){
                    $query_sds = "SELECT * FROM `apti_test` WHERE `apt_type`='admin'  AND `apt_stream`='science' ORDER BY rand()";
                    $stmt_sds = $admin->ret($query_sds);
                    while($row_sds = $stmt_sds->fetch(PDO::FETCH_ASSOC)){
                     
                            // echo "science ";
                            innershuffle($row_sds['apt_id'],$row_sds['apti_test_qution'],$row_sds['apt_answer'],$row_sds['apt_option1'],$row_sds['apt_option2'],$row_sds['apt_option3']);
           
                            break;
                    }

                    // while($row_ss = $stmt_ss->fetch(PDO::FETCH_ASSOC)){

                    // }
                    // echo $_SESSION['qscience'].'-science';
                    $_SESSION['qscience']++;
                }else{
                    $rana="";
                    test();
                }
            
        }elseif($rana==4){
                if($_SESSION['qdiploma']<=4){
                    $query_sfs = "SELECT * FROM `apti_test` WHERE `apt_type`='admin' AND `apt_stream`='Diploma' ORDER BY rand()";
                    $stmt_sfs = $admin->ret($query_sfs);
                    while($row_sfs = $stmt_sfs->fetch(PDO::FETCH_ASSOC)){
                       
                            innershuffle($row_sfs['apt_id'],$row_sfs['apti_test_qution'],$row_sfs['apt_answer'],$row_sfs['apt_option1'],$row_sfs['apt_option2'],$row_sfs['apt_option3']);
                           
                            // echo "Diploma ";

                            break;
                    }

                    // while($row_ss = $stmt_ss->fetch(PDO::FETCH_ASSOC)){

                    // }
                    // echo $_SESSION['qdiploma'].'-diploma';
                    $_SESSION['qdiploma']++;
                }else{
                    $rana="";
                    test();
                }
            
        }elseif($rana==5){
                if($_SESSION['qiti']<=4){
                    $query_ses = "SELECT * FROM `apti_test` WHERE `apt_type`='admin' AND `apt_stream`='ITI' ORDER BY rand()";
                    $stmt_ses = $admin->ret($query_ses);
                    while($row_ses = $stmt_ses->fetch(PDO::FETCH_ASSOC)){
                       
                            innershuffle($row_ses['apt_id'],$row_ses['apti_test_qution'],$row_ses['apt_answer'],$row_ses['apt_option1'],$row_ses['apt_option2'],$row_ses['apt_option3']);

                            break;
                        
                    }

                    // while($row_ss = $stmt_ss->fetch(PDO::FETCH_ASSOC)){

                    // }
                    // echo $_SESSION['qiti'].'-iti';
                    $_SESSION['qiti']++;
                }else{
                    $rana="";
                    test();
                }
            
        }
    }
    if($_SESSION['qarts']==5 && $_SESSION['qcom']==5 && $_SESSION['qscience']==5 && $_SESSION['qdiploma']==5 && $_SESSION['qiti']==5){
        unset($_SESSION['qarts']);
        unset($_SESSION['qcom']);
        unset($_SESSION['qscience']);
        unset($_SESSION['qdiploma']);
        unset($_SESSION['qiti']);
        echo '<script>window.location="Result.php";</script>';
    }
// }
test();
   
function innershuffle($id,$qution,$ans1,$op1,$op2,$op3){
    $randomshuffle=rand(1,4);
    if($randomshuffle==1){
        echo '<table>
        <tr>

            <div class="background_div">
            
            <div style="    
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height:43px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Psychometric <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/test.php" method="post">
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
            height:43px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Psychometric <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/test.php" method="post">
                    <br>
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
            height:43px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Psychometric <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/test.php" method="post">
                    <br>
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
            height:43px;
            overflow: hidden;
            padding: 10px;
        " id="progress">
        <span id="value"></span>

        </div>
        <div style="background: #5b00ff;width: 100%; height: 2px;">

        </div>
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Psychometric <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_student/test.php" method="post">
                    <br>
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
    <!-- <table>
        <tr>
            <div class="background_div">
                <br>
                <h1 style="padding-top:5px;font-weight: 700;">Psychometric <span style="color:blue;">Test</span></h1>
                <br>
                <form action="controler_admin/add_test_qution.php" method="post">
                    <br>
                    <br>
                    <b style="    
                              width: 80%;
                              height: 40px;
                              padding-left: 15px;
                              font-size: larger;
                           "></b>
                    <br>
                    <br>
                    <input type="Submit" name="corect_answer" placeholder="Right answer." style="    border: 3px solid #9912a2;
                                    width: 26%;
                                    height: 33px;
                                    border-radius: 4px;
                                    padding-left: 15px;" readonly value=""> <br><br>
                    <input type="Submit" name="option1" placeholder="Option-1" style="    border: 3px solid #e91111;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value=""><br><br>
                    <input type="Submit" name="option2" placeholder="Option-2" style="    border: 3px solid #00f0ff;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value=""><br><br>
                    <input type="Submit" name="option3" placeholder="Option-3" style="    border: 3px solid #ffd912;
                                 width: 26%;
                                 height: 33px;
                                 border-radius: 4px;
                                 padding-left: 15px;" readonly value=""><br><br>
                    <div style="width: 100%;
                                 height: 60px;
                                 background: #03cae4;
                                 border-bottom-right-radius: 13px;
                                 border-bottom-left-radius: 13px; border: none;">

                    </div>
                </form>
            </div>
        </tr>
    </table> -->

    <br>
    <br>
    <br>
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
                        window.location='controler_student/test.php';
                    }
                    
                }
                myGreeting();

                

            </script>












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
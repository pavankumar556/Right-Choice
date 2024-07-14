<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-Up | RICH</title>
    <link rel="icon" type="image/x-icon" href="../img/page_icon.png">
    <link href="https://fonts.googleapis.com/css?family=Assistant:400,700" rel="stylesheet">
    <style>
        body {
            background: #5f4def;
            font-family: Assistant, sans-serif;
            display: flex;
            min-height: 90vh;
        }

        .login {
            color: white;
            background: #136a8a;
            background:
                -webkit-linear-gradient(to right, #00119d, #136a8a);
            background:
                linear-gradient(to right, #00119d, #136a8a);
            margin: auto;
            box-shadow:
                0px 2px 10px rgba(0, 0, 0, 0.2),
                0px 10px 20px rgba(0, 0, 0, 0.3),
                0px 30px 60px 1px rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            padding: 50px;
        }

        .login .head {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login .head .company {
            font-size: 2.2em;
        }

        .login .msg {
            text-align: center;
        }

        .login .form input[type=text].text {
            border: none;
            background: none;
            box-shadow: 0px 2px 0px 0px white;
            width: 100%;
            color: white;
            font-size: 1em;
            outline: none;
        }

        .login .form .text::placeholder {
            color: #D3D3D3;
        }

        .login .form input[type=password].password {
            border: none;
            background: none;
            box-shadow: 0px 2px 0px 0px white;
            width: 100%;
            color: white;
            font-size: 1em;
            outline: none;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .login .form input[type=text].text {
            border: none;
            background: none;
            box-shadow: 0px 2px 0px 0px white;
            width: 100%;
            color: white;
            font-size: 1em;
            outline: none;
            margin-bottom: 20px;
            margin-top: 20px;
        }

        .login .form .password::placeholder {
            color: #D3D3D3;
        }

        .login .form .btn-login {
            background: none;
            border: none;
            text-decoration: none;
            color: white;
            box-shadow: 0px 0px 0px 2px white;
            border-radius: 3px;
            padding: 5px 2em;
            transition: 0.5s;
        }

        .login .form .btn-login:hover {
            background: white;
            color: dimgray;
            transition: 0.5s;
        }

        .login .forgot {
            text-decoration: none;
            color: white;
            float: right;
        }

        .login .signup {
            text-decoration: none;
            color: white;
            float: left;
            margin-top: 5px;
        }

        footer {
            position: absolute;
            color: #136a8a;
            bottom: 10px;
            padding-left: 20px;
        }

        footer p {
            display: inline;
        }

        footer a {
            color: green;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

        footer .heart {
            color: #B22222;
            font-size: 1.5em
        }

        #type {
            width: 100%;
            border: none;
            background-color: #136a8a;
            border: 2px solid white;
            /* box-shadow: 0px 2px 0px 0px rgb(21, 3, 3); */
            font-size: 1em;
            border-radius: 5px;
        }
        #latitude{
            margin-top: 32px;
        }
    
    </style>
</head>

<body>
    <?php
    
    
    ?>
    <!-- partial:index.partial.html -->
    <section class='login' id='login' style="width: 24%;">
        <div class='head'>
            <h1 class='company'>RICH | Right Choice</h1>
        </div>
        <p class='msg'>Welcome to RICH</p>
        <div class='form'>
            <form action="../controler_student/signup_student.php" method="post" enctype="multipart/form-data">
                <input type="text" name="name" pattern="[A-Z a-z]+" title="letters only" placeholder='Name' class='text' required><br>
                <input type="date"style="    width: 100%;
    background: none;
    border-radius: 9px;
    border: 2px solid white;
    color: white;" name="birth_date" id="dateidd" onchange="showage(this.value)" min="" max="<?php echo date('Y-m-d');?>" placeholder='Birth Date' class='text' required><br>
                    
                <input type="text" readonly  id="age" placeholder='age' class='text' required><br>
                <input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" placeholder='Email address' class='text' required><br>
                <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" id="password" placeholder='Create password' class='password' required><br>
                <input type="password" name="confirm_password" id="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" placeholder='confirm password' onchange="check()" class='password' required><br>
                <input type="submit" class='btn-login' id='do-login' value="Register Now">
                <br>
                <a href="../login/" class='signup'>Already a member? sign-in</a><br>
            </form>
        </div>
    </section>

    <!-- partial -->

    <script>

        function showage(datestring) {
            var today= new Date();
            var birth_date=new Date(datestring);
            var age=today.getFullYear()-birth_date.getFullYear();   
            document.getElementById('age').value=age+".yrs";
            if(age>=14){
                document.getElementById('age').value=age+".yrs";
                console.log(age);
            }else{
                document.getElementById('dateidd').value="";
            }
            // else{
            //     console.log(age +"not");
            // }
        }
    </script>
    
    
</body>

</html>
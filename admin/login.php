<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login | RICH</title>
    <link rel="icon" type="image/x-icon" href="images/page_icon.png">
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
            margin-bottom: 10px;
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
            margin-bottom: 10px;
            border: none;
            background-color: #136a8a;
            border: 2px solid white;
            /* box-shadow: 0px 2px 0px 0px rgb(21, 3, 3); */
            font-size: 1em;
            border-radius: 5px;
        }
        .invalid{
            color: red;
            margin-bottom: 3px;
            margin-top: 1px;
        }
    </style>
</head>

<body>
    <!-- partial:index.partial.html -->
    <section class='login' id='login'>

        <div class='head'>

            <h1 class='company'>RICH | Right Choice</h1>
        </div>
        <p class='msg'>Welcome back</p>
        <div class='form'>
            <form action="controler_admin/login.php" method="post" enctype="multipart/form-data">
                <input type="text" name="username" placeholder='Email Id' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,4}$" title="xyz@something.com" class='text' id='username' required><br>
                <input type="password" name="password" placeholder='•••••••••' pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" class='password' required><br>
                <!-- <p class="invalid" id="invalid"><i>Invalid username or password</i></p> -->
                <!-- <select name="type" id="type">
                    <option value="student">Student</option>
                    <option value="Centre">Centre</option>
                </select> -->
                <br>
                <!-- <a href="#" class='btn-login' id='do-login'>Login</a> -->
                <input type="submit" class='btn-login' id='do-login' value="Login">

                <!-- <a href="../forgot/" class='forgot'>Forgot?</a><br>
                <a href="../signup/" class='signup'>Not a member? signup</a> -->
            </form>
        </div>
    </section>
   
</body>

</html>
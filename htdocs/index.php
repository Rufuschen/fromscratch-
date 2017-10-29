<?php
session_start();
require 'dbconfig/config.php'; 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Log In</title>
        <link rel="stylesheet" href="css/index.css">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,400i,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/signup.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.css">

        <!-- flexbox styling -->
        <link rel="stylesheet" href="css/flexboxgrid.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!--Jquery -->
        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="crossorigin="anonymous"></script>

    </head>
    <body>

        <nav>
            <ul id="menu-left">
                <li class="company-name"><a href="main.html"><span class="from">from</span>Scratch</a><span class="trademark-sign">&reg;</span></li>
            </ul>
            <ul id="menu-right">
                <li class="account">Already have an account? <span class="log-in"><a href="login.html">Log in</a></span></li>
            </ul>
        </nav>

        <div id="main-wrapper">
            <h2>Login Form</h2>


            <form class="myform" action="index.php" method="post">
                <label>Username:</label>
                <input name="username" type="text" class="inputvalues" placeholder="Type your username" />
                <br>
                <label>Password:</label>
                <input name="password" type="password" class="inputvalues" placeholder="Type your password" />
                <br>
                <input name="login" type="submit" id="login_btn" value="login" />
                <br>
                <a href="register.php">
                    <input type="button" id="register_btn" value="Register" />
                </a>
            </form>
            <?php
            if (isset($_POST['login']))
            {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query ="select * from user WHERE username='$username' AND password = '$password'";
                $query_run = mysqli_query($con,$query);
                //user exists
                if(mysqli_num_rows($query_run)>0)
                {
                    //valid
                    $_SESSION['username']= $username;
                    header('location:main.html');


                }else 
                    //valid
                    echo '<script type="text/javascript"> alert("Invalid Credentials")</script>';
            }
            ?>
        </div>

    </body>


</html>
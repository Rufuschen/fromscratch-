<?php
require 'dbconfig/config.php'; 
?>


<!DOCTYPE html>
<html>
    <head>
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
        <link rel="stylesheet" href="css/register.css">

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
            <h2>Create Account</h2>


            <form class="myform" action="register.php" method="post">
                <label class="username">Username</label>
                <input name="username" type="text" class="inputvalues_1" placeholder="" required />
                <br>
                <label>Password</label>
                <input name="password" type="password" class="inputvalues_2" placeholder="At least 6 characters" required />
                <br>
                <label>Re-enter Password</label>
                <input name="cpassword" type="password" class="inputvalues_3" placeholder="" required />
                <h5>By creating an account, you agree to fromScratch's Conditions of Use and Privacy notice.</h5>
                <input name="submit_btn" type="submit" id="started_btn" class="btn btn-primary" value="Create your account" />
                <br>
            </form>

            <?php 
            if(isset($_POST['submit_btn']))
            {
                //Check if get started button is working echo '<script type="text/javascript"> alert("button clicked") </script>';

                $username = $_POST['username'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];


                //check if password and cpassword mtch
                if ($password == $cpassword)
                {
                    $query= "select * from user where username='$username'";
                    $query_run = mysqli_query($con,$query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                        echo '<script type="text/javascript"> alert("Choose another username") </script>';
                    }
                    else
                    {
                        $query= "insert into user values('$username','$password')";
                        $query_run = mysqli_query($con, $query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("User Registered!") </script>';
                        }
                        else
                        {
                            echo '<script type="text/javascript">alert("Error!")</script>';   
                        }
                    }

                }
                //when passwords do not match
                else{
                    echo '<script type="text/javascript">alert("Passwords do not match")</script>';
                }
            }

            ?>




























        </div>

    </body>


</html>
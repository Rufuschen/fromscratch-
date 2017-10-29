<?php
   require 'dbconfig/config.php'; 
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div id="main-wrapper">
            <h2>Login Form</h2>


            <form class="myform" action="register.php" method="post">
                <label>Username:</label>
                <input name="username" type="text" class="inputvalues" placeholder="Type your username" required />
                <br>
                <label>Password:</label>
                <input name="password" type="password" class="inputvalues" placeholder="Type your password" required />
                <br>
                <label>Confirm Password:</label>
                <input name="cpassword" type="password" class="inputvalues" placeholder="Type your password" required />
                <input name="submit_btn" type="submit" id="login_btn" value="Get Started" />
                <br>
                <a href="index.php">
                    <input type="button" id="register_btn" value="Back" /></a>
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
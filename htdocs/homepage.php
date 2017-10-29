<?php
    session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="css/index.css">
    </head>
    <body>
        <div id="main-wrapper">
            <h2>Welcome 
            <?php echo $_SESSION['username'] ?>
            </h2>


            <form class="myform" action="../main.html" method="post">
                <br>
                <input name="logout" type="submit" id="login_btn" value="logout" />
            </form>
            <?php
                if(isset($_POST['logout']))
                {
                session_destroy();
                header('location:index.php');
                }
            ?>
            
        </div>

    </body>


</html>
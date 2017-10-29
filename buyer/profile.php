<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins:400,500" rel="stylesheet">

        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/profile.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.css">

        <!-- flexbox styling -->
        <link rel="stylesheet" href="css/flexboxgrid.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!--Jquery -->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript">
        </script>
    </head>


    <body>

        <nav>
            <div class="nav-wrapper white">
                <a href="main.php" class="brand-logo"><span class="from">from</span><span class="scratch">Scratch</span></a>
                <ul class="left-nav">

                    <!-- Dropdown for browse -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li><a href="profile.php"><i class="fa fa-user-o"></i> PROFILE</a></li>
                        <li><a href="messages.php"><i class="fa fa-inbox" aria-hidden="true"></i>
                            MESSAGES</a></li>
                        <li><a href="requests.php"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            REQUESTS</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>
                            SETTINGS</a></li>
                        <li><a href="main.html"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            LOGOUT</a></li>

                    </ul>
                </ul>
                <ul class="right hide-on-med-and-down">
                    <li><a href="#" class="dropdown-button" data-activates="dropdown1">Hello,
                        <?php echo $_SESSION['username'] ?><i class="material-icons right">arrow_drop_down</i></a></li> 
                </ul>
            </div>
        </nav>

        <!-- Page Layout here -->
        <div class="container">
            <div class="row">

                <div class="col s4">
                    <span class="camera"></span>
                    <div class="user-info-container">
                        <img class="circle responsive-img" src="img/himawan.jpg">
                        <h5>Himawan</h5>
                        <h5>What's your story in one line? <i class="fa fa-pencil" aria-hidden="true"></i>
                        </h5>
                        <ul>
                            <li><span class="wrapper"><i class="fa fa-map-marker" aria-hidden="true"></i> 
                                Location </span>
                                <span class="li-right-side">United States</span>
                            </li>

                            <li><span class="wrapper"><i class="fa fa-user" aria-hidden="true"></i> 
                                Member since</span>
                                <span class="li-right-side">Nov 2016</span>
                            </li>    

                            <li><span class="wrapper"><i class="fa fa-clock-o" aria-hidden="true"></i> 
                                Avg. response time</span>
                                <span class="li-right-side">1 hour</span>
                            </li>   

                            <li><span class="wrapper"><i class="fa fa-plane" aria-hidden="true"></i> 
                                Vacation Mode</span>    
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="col s1 color"></div>

                <div class="col s7 active-persons">
                    <!-- Teal page content  -->
                    <div class="active-gigs">
                        <h6>ACTIVE GIGS</h6>    
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col s4">
                    <span class="camera"></span>
                    <div class="user-info-container-2">
                        <ul>
                            <li><span class="left-side-align tooltipped" data-position="top" data-tooltip="Tell us more about yourself. Buyers are also interested in learning about you as a person.">Description</span>
                                <span class="right-side-align">Edit Description
                                </span>
                            </li>
                            <br>
                            <li><span class="left-side-align tooltipped" data-position="top" data-tooltip="You can make up to 4 selections">Languages</span><span class="right-side-align">Add New</span>
                                <br>
                                <h6>English - Basic</h6>
                                <br>
                            </li>
                            <br>
                            <li><span class="left-side-align tooltipped" data-position="top" data-tooltip="Hello" >Linked Accounts</span>
                                <span class="right-side-align">Add New</span></li>
                            <br>
                            <ul class="linked-accounts">
                                <li>
                                    <i class="fa fa-plus" aria-hidden="true"></i>Facebook</li>
                                <li><i class="fa fa-plus" aria-hidden="true"></i>Google</li>
                                <li><i class="fa fa-plus" aria-hidden="true"></i>Dribbble</li>
                                <li><i class="fa fa-plus" aria-hidden="true"></i>Stack Overflow</li>
                                <li><i class="fa fa-plus" aria-hidden="true"></i>Linkedin</li>
                            </ul>
                            <br>
                            <li><span class="left-side-align">Skills</span>
                                <span class="right-side-align">Add New</span></li>
                            <br>
                            <li><span class="left-side-align tooltipped" data-position="top" data-tooltip="I am tooltip">Education</span>
                                <span class="right-side-align">Add New</span></li>
                            <br>
                            <li><span class="left-side-align">Certification</span>
                                <span class="right-side-align">Add New</span></li>
                        </ul>
                    </div>
                </div>

                <div class="col s1 color2">
                </div>

                <div class="col s7">
                    <!-- Teal page content  -->
                </div>

            </div>


        </div>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>  
    </body>


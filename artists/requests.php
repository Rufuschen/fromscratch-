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
        <link rel="stylesheet" href="css/testing.css">

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

        <section id="new-requests">
            <div class="container">
                <h4 class="section-heading pt-4">New</h4>
                <ul class="collapsible" data-collapsible="accordian">
                    <li>
                        <div class="collapsible-header title active">
                            <i class="material-icons">build
                            </i>Customized Stars and Stripes T-shirt with "Your Name"
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: <a href="#">Jessica Schwartz</a></span>
                            <p>Payment: 50% up-front, 50% on completion
                            <p>Due on: 12/1/2017</p>
                            <p>
                                <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header title">
                            <i class="material-icons">build</i>Handcrafted wooden vase
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: Jessica Schwartz</span>
                            <p> Payment: USD 25 received on 12/11/2017
                            <p>
                                <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header title">
                            <i class="material-icons">build</i>Mini leather journal
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: Jessica Schwartz</span>
                            <p> Payment: USD 25 received on 12/11/2017
                            <p>
                                <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section id="old-requests">
            <div class="container">
                <h4 class="section-heading pt-4">Completed </h4>
                <ul class="collapsible" data-collapsible="accordian">
                    <li>
                        <div class="collapsible-header title">
                            <i class="material-icons">check_box
                            </i>Customized Stars and Stripes T-shirt with "Your Name"
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: Jessica Schwartz</span>
                            <p> Payment: USD 25 received on 12/11/2017
                            <p>The buyer has not left a review
                            </p>
                            <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header title">
                            <i class="material-icons">check_box</i>Handcrafted wooden vase
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: Jessica Schwartz</span>
                            <p> Payment: USD 25 received on 12/11/2017
                            <p>The buyer has not left a review
                            </p>
                            <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header title">
                            <i class="material-icons">check_box</i>Mini leather journal
                        </div>
                        <div class="collapsible-body">
                            <span>Buyer: Jessica Schwartz</span>
                            <p> Payment: USD 25 received on 12/11/2017
                            <p>The buyer has not left a review
                            </p>
                            <a class="waves-effect waves-light btn">View Chatlog</a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>


        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    </body>
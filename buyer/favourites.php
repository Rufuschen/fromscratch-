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
        <link rel="stylesheet" href="css/artists.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.css">

        <!-- flexbox styling -->
        <link rel="stylesheet" href="css/flexboxgrid.css">

        <!-- Ionicons -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    </head>

    <body>
        <nav>
            <div class="nav-wrapper white">
                <a href="main.php" class="brand-logo"><span class="from">from</span><span class="scratch">Scratch</span></a>
                <ul class="left-nav">

                    <!-- Dropdown for browse -->
                    <ul id="dropdown1" class="dropdown-content">
                        <li class="active"><a href="artists.html"><i class="fa fa-paint-brush" aria-hidden="true"></i>
                            ARTISTS</a></li>
                        <li><a href="categories.html"><i class="fa fa-bullseye" aria-hidden="true"></i>
                            CATEGORIES</a></li>
                    </ul>
                    <li><a href="#" class="dropdown-button" data-activates="dropdown1">BROWSE<i class="material-icons right">arrow_drop_down</i></a></li>
                    <li><a href="#">HOW IT WORKS</a></li>
                </ul>

                <!-- Right side -->
                <ul class="right hide-on-med-and-down">
                    <li>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal">
                            Request Something </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="">
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Email address*</label>
                                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Category*</label>
                                                <select class="form-control" id="exampleFormControlSelect1">
                                                    <optgroup label="Apparel">
                                                        <option value="tees">Tees</option>
                                                        <option value="shirts">Shirts</option>
                                                        <option value="cufflinks">Cufflinks</option>
                                                    </optgroup>
                                                    <optgroup label="Fine Art">
                                                        <option value="paintings">Paintings</option>
                                                        <option value="vases">Vases</option>
                                                        <option value="decorative-pillows">Decorative Pillows</option>
                                                    </optgroup>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Additional Comments</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Try to be as specific as possible! This guarantees a better product delivered"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile">File input</label>
                                                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                                <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>   

                    </li> 
                    <li><a href="#" class="dropdown-button" data-activates="dropdown2">Hello,
                        <?php echo $_SESSION['username'] ?><i class="material-icons right">arrow_drop_down</i></a></li>   
                    <!-- Dropdown for browse -->
                    <ul id="dropdown2" class="dropdown-content">
                        <li><a href="profile.php"><i class="fa fa-user-o"></i> PROFILE</a></li>
                        <li><a href="messages.php"><i class="fa fa-inbox" aria-hidden="true"></i>
                            MESSAGES</a></li>
                        <li><a href="requests.php"><i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            REQUESTS</a></li>
                        <li class="active"><a href="favourites.php"><i class="fa fa-heart-o" aria-hidden="true"></i>
                            FAVOURITES</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-cog" aria-hidden="true"></i>
                            SETTINGS</a></li>
                        <li><a href="../main.html"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            LOGOUT</a></li>
                    </ul>
                </ul>
            </div>
        </nav>
        
       <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        
    </body>
</html>
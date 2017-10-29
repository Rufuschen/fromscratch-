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

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/styles4.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

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
            <ul id="menu-left">
                <li class="company-name"><span class="from">from</span>Scratch<span class="trademark-sign">&reg;</span></li>
                <li>
                    <label class="find-a-gift">
                        <input class="find-artists" placeholder="Find a gift" type="text" name="search" maxlength="50">
                    </label>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">BROWSE
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="browseartists.php"><i class="fa fa-paint-brush" aria-hidden="true"></i>
                            ARTISTS</a></li>
                        <li><a href="messages.php"><i class="fa fa-bullseye" aria-hidden="true"></i>
                            CATEGORIES</a></li>
                    </ul>
                </li>
            </ul>
            <ul id="menu-right">
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
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span>Hello,
                    <?php echo $_SESSION['username'] ?>
                    </span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="profile.php"><i class="fa fa-user-o" aria-hidden="true"></i>
                            Profile</a>
                        <a class="dropdown-item" href="messages.php"><i class="fa fa-envelope-o" aria-hidden="true"></i>
                            Messages</a>
                        <a class="dropdown-item" href="requests.php">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            Requests</a>
                        <a class="dropdown-item" href="favourites.php">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            Favourites</a>
                        <hr>
                        <a class="dropdown-item" href="messages.php"><i class="fa fa-cog" aria-hidden="true"></i>
                            Settings</a>
                        <a href="../main.html" class="dropdown-item" href="messages.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </div>
                </li>
            </ul>
        </nav>

        <section id="main-content">
            <div class="container">
                <div class="row hero-header">
                    <div class="hero-header-text">
                        <h1>Be Part of Your Creation</h1>
                        <h6>Never let any of your creative ideas go to waste.<br>
                            Send your creative ideas to artists who will finish them.</h6>
                        <!--<div class="search-header">
<input class="main-search" placeholder="Looking for something?" type="text" 
maxlength="50">
<button class="btn btn-success">Get Started</button>
</div>-->
                    </div>
                </div>
            </div>
        </section>

        <section id ="main-intro">
            <div class="container intro-container">
                <div class="row intro-categories center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>We Make Real Art</h2>
                    </div>
                    <div class="row categories-images">
                        <div id="image-fashion" class="image-1 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3 class="category-header">Fashion</h3>
                            <div class="inner-fashion">
                                <div class="inner-cta">
                                    <a href="signup.html">Create Your Own</a>
                                </div>
                            </div>
                        </div>
                        <div id="image-art" class="image-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <h3 class="category-header">Fine Art</h3>
                            <div class="inner-art">
                                <div class="inner-cta">
                                    <a href="signup.html">Create Your Own</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row cta">
                    <div class="btn"><a href="signup.html">Start Your Own Project</a></div>
                </div>
            </div>
        </section>

        <section id ="main-inspiration">
            <div class="container inspiration-container">
                <div class="row inspiration-list center-xs center-sm center-md center-lg">
                    <div class="row inspiration-header">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h2>Need Some Inspiration?</h2>
                            <h6>Here are some of the work our artists have created</h6>
                        </div>
                    </div>
                    <div class="row inspiration-images">
                        <div class="inspiration-img img-1"></div>
                        <div class="inspiration-img-shadow-1"></div>
                        <div class="inspiration-img img-2"></div>
                        <div class="inspiration-img-shadow-2"></div>
                        <div class="inspiration-img img-3"></div>
                        <div class="inspiration-img-shadow-3"></div>
                        <div class="inspiration-img img-4"></div>
                        <div class="inspiration-img-shadow-4"></div>
                        <div class="inspiration-img img-5"></div>
                        <div class="inspiration-img-shadow-5"></div>
                        <div class="inspiration-img img-6"></div>
                        <div class="inspiration-img-shadow-6"></div>
                    </div>
                </div>
                <div class="row cta">
                    <div class="btn"><a href="signup.html">Start Your Own Project</a></div>
                </div>
            </div>
        </section>

        <section id="how-it-works">
            <div class="container">
                <div class="row center-xs center-sm center-md center-lg">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2>How it works</h2>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <img src="img/project.png" class="works-pictures"> 
                        <h3><u>POST A PROJECT</u></h3>
                        <p>Post a request to tell us about your project. We'll quickly match you with the right artist.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <img src="img/select.png" class="works-pictures">
                        <h3><u>SELECT</u></h3>
                        <p>You can also send a request directly to an artist you want to work with. Browse artist profiles, past projects and reviews.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <img src="img/create.png" class="works-pictures">
                        <h3><u>CREATE</u></h3>
                        <p>Use the fromScratch platform to chat, share files, and collaborate from your desktop or on the go.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <img src="img/pay.png" class="works-pictures">
                        <h3><u>PAY</u></h3>
                        <p>Conveniently pay for your commissioned art and give feedback on your artist once you receive your delivery.
                        </p>
                    </div>
                    <div class="row cta">
                        <div class="btn"><a href="signup.html">Start Your Own Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="map">
            <div class="container">
                <h2>Search for artists from any location</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d178512.5934623267!2d-73.90964180536172!3d40.61770313691628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1507997596253" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </section>

        <!-- Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>    
    </body>
    <footer style="background: #4D20C8;height: 60px;">
        <div class="container">
            <div class="row copyright">   
                <p style="color: #fff; text-align:center; padding-top: 10px;">Copyright © 2017 fromScratch, Inc. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</html>
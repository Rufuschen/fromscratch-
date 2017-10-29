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
                        <li><a href="favourites.php"><i class="fa fa-heart-o" aria-hidden="true"></i>
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

        <div class="container">
            <h1 class="center-align">Our Artists</h1>
            <input type="text" id="filterInput" placeholder="Search artists...">
            <ul id="artists" class="collection with-header">
                <li class="collection-item">
                    <a href="#">
                        Dakota Malone</a>
                    <a href="#!" class="secondary-content tooltipped" data-position="top" data-tooltip="Top 1% of artists"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item">
                    <a href="#">
                        Meredith Murray</a>
                </li>
                <li class="collection-item">
                    <a href="#">Colin Webster</a>
                </li>
                <li class="collection-item">
                    <a href="#">Grier Purdie</a>
                </li>
                <li class="collection-item">
                    <a href="#">
                        Roydon Keefe</a>
                </li>
                <li class="collection-item">
                    <a href="#" data-target="modal-robin" class="modal-trigger"><b>Robin Darrell</b></a>
                    <!-- Modal -->
                    <div id="modal-robin" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <div class="header">
                                <img class="circle responsive-img" src="img/robin.png" />
                                <span class="icons">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </span>
                                <span class="name"><b>Robin Darrell</b></span>
                                <span class="full-profile btn"><a href="profile.php">View Full Profile</a></span>
                            </div>
                            <hr>
                            <div class="modal-description">
                                <h5><u>Description</u></h5>
                                <p><i>I moonlight as an artist when I am not 'teaching' entrepreneurship. That explains my crappy teaching. Ha! I joined FromScratch because it has an awesome collaboration process, and I am a firm believer that  creating art should never be a one-way process.</i></p>
                            </div>
                            <div class="modal-categories">
                                <h5><u>Categories</u></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias libero reprehenderit sapiente voluptatibus perferendis ab accusantium saepe at voluptates laboriosam asperiores nostrum minus, maiores earum tempora error! Modi, ea, voluptatem!</p>
                            </div>
                            <div class="modal-work">
                                <h5><u>Past Work</u></h5>
                                <table style="width: 100%">
                                    <tr>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/tshirt.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/mug.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/ring.png">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer"> 
                            <a onclick="Materialize.toast('Saved to Favourites!', 2000)" class="btn"><i class="fa fa-heart" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <a href="#">Hardy Sefton</a>
                </li>
                <li class="collection-item">
                    <a href="#">Theobald Randal</a>
                </li>
                <li class="collection-item">
                    <a href="#">Wilbur Major</a>
                </li>
                <li class="collection-item">
                    <a href="#" data-target="modal-owen" class="modal-trigger"><b>Owen Randolf</b></a>
                    <!-- Modal -->
                    <div id="modal-owen" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <div class="header">
                                <img class="circle responsive-img" src="img/owen.jpg" />
                                <span class="icons">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </span>
                                <span class="name"><b>Owen Randolf</b></span>
                                <span class="full-profile btn"><a href="profile.php">View Full Profile</a></span>
                            </div>
                            <hr>
                            <div class="modal-description">
                                <h5><u>Description</u></h5>
                                <p><i>Insert FromScratch's USP</i></p>
                            </div>
                            <div class="modal-categories">
                                <h5><u>Categories</u></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias libero reprehenderit sapiente voluptatibus perferendis ab accusantium saepe at voluptates laboriosam asperiores nostrum minus, maiores earum tempora error! Modi, ea, voluptatem!</p>
                            </div>
                            <div class="modal-work">
                                <h5><u>Past Work</u></h5>
                                <table style="width: 100%">
                                    <tr>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/tshirt.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/mug.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/ring.png">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a onclick="Materialize.toast('Saved to Favourites!', 2000)" class="btn"><i class="fa fa-heart" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#!" class="secondary-content tooltipped" data-position="top" data-tooltip="Top 1% of artists"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item">
                    <a href="#">Charley Brant</a>
                </li>
                <li class="collection-item">
                    <a href="#">Dan Harrison</a>
                </li>
                <li class="collection-item">
                    <a href="#">Jackie Foster</a>
                </li>
                <li class="collection-item">
                    <a href="#">Cass Hallam</a>
                </li>
                <li class="collection-item">
                    <a href="#" data-target="modal2" class="modal-trigger">Teddy Rastus
                    </a>
                    <div id="modal2" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <h1>Hello</h1>
                            <a onclick="Materialize.toast('Saved to Favourites', 2000)" class="btn">Toast</a>
                            <p>A bunch of text</p>
                        </div>
                        <div class="modal-footer">
                            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
                        </div>
                    </div>
                </li>
                <li class="collection-item">
                    <a href="#" data-target="modal1" class="modal-trigger"><b>Himawan Gunadhi</b>
                    </a>
                    <!-- Modal -->
                    <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                            <div class="header">
                                <img class="circle responsive-img" src="img/himawan.jpg" />
                                <span class="icons">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    <i class="fa fa-facebook-official" aria-hidden="true"></i>
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </span>
                                <span class="name"><b>Himawan Gunadhi</b></span>
                                <span class="full-profile btn"><a href="profile.php">View Full Profile</a></span>
                            </div>
                            <hr>
                            <div class="modal-description">
                                <h5><u>Description</u></h5>
                                <p><i>I moonlight as an artist when I am not 'teaching' entrepreneurship. That explains why my teaching sucks. I joined FromScratch because it has an awesome collaboration process, and I am a firm believer that  creating art should never be a one-way process.</i></p>
                            </div>
                            <div class="modal-categories">
                                <h5><u>Categories</u></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias libero reprehenderit sapiente voluptatibus perferendis ab accusantium saepe at voluptates laboriosam asperiores nostrum minus, maiores earum tempora error! Modi, ea, voluptatem!</p>
                            </div>
                            <div class="modal-work">
                                <h5><u>Past Work</u></h5>
                                <table style="width: 100%">
                                    <tr>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/tshirt.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/mug.png">
                                        </td>
                                        <td class="past-work">
                                            <img class="circle responsive-img" src="img/ring.png">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a onclick="Materialize.toast('Saved to Favourites!', 2000)" class="btn"><i class="fa fa-heart" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <a href="#!" class="secondary-content tooltipped" data-position="top" data-tooltip="Top 1% of artists"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item">
                    <a href="#">Josh Mortimer</a>
                    <a href="#" class="secondary-content tooltipped" data-position="top" data-tooltip="Top 1% of artists"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item">
                    <a href="#">Dwain Ryker</a>
                </li>
                <li class="collection-item">
                    <a href="#">Phoenix Roydon</a>
                </li>
                <li class="collection-item">
                    <a href="#">Elvis Byron</a>
                </li>
                <li class="collection-item">
                    <a href="#">Tom Rolf</a>
                </li>
                <li class="collection-item">
                    <a href="#">Stanford Merton</a>
                </li>
            </ul>
        </div>



        <!-- Footer -->
        <footer class="footer1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3">
                        <h4>CATEGORIES</h4>
                        <ul>
                            <li>Fine Art</li>
                            <li>Apparel</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h4>ABOUT</h4>
                        <ul>
                            <li>Careers</li>
                            <li>Press & News</li>
                            <li>Partnerships</li>
                            <li>Privacy Policy</li>
                            <li>Terms of Service</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h4>COMMUNITY</h4>
                        <ul>
                            <li>Blog</li>
                            <li>Forum</li>
                            <li>Academy</li>
                            <li>Podcast</li>
                            <li>Affiliates</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h4>SUPPORT</h4>
                        <ul>
                            <li>Customer Support</li>
                            <li>Trust & Safety</li>
                            <li>Artists</li>
                            <li>Buyers</li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <h4>FOLLOW US</h4>
                        <ul>
                            <li><i class="fa fa-google" aria-hidden="true"></i>Google</li>
                            <li><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</li>
                            <li><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</li>
                            <li><i class="fa fa-linkedin" aria-hidden="true"></i>Linkedin</li>
                            <li><i class="fa fa-pinterest" aria-hidden="true"></i>Pinterest</li>
                            <li><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</li>
                        </ul>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </footer>



        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        <script>
            // Get filter list 
            let filterInput = document.getElementById('filterInput');
            // Add event listener
            filterInput.addEventListener('keyup', filterCategories);

            function filterCategories(){
                //Get value of input
                let filterValue = document.getElementById('filterInput').value.toUpperCase();

                //Get categories ul
                let ul = document.getElementById('artists')
                //Get LIs from ul
                // change this to ul category
                let li = ul.querySelectorAll('li.collection-item');

                //loop through collection-header lis
                for(let i = 0; i < li.length;i++){
                    let a = li[i].getElementsByTagName('a')[0];
                    //If match
                    if(a.innerHTML.toUpperCase().indexOf(filterValue) > -1){
                        li[i].style.display='';

                    }else {
                        li[i].style.display='none';
                    }
                }
            }

            $(document).ready(function(){
                $('.modal').modal();
            })


        </script>

    </body>
</html>

<?php
session_start();
$sess = print_r($_SESSION, true);
echo "<script>console.log($sess);</script>";
if(!isset($_GET['q']))
{
header("Location: gallery.php");
}
else{
  include("php/config/db_config.php");
  $cake_id=$_GET['q'];
  $sql="select title, description, location, price from cravings_test_cake_details where cake_id=? and status='active'";
  if($stmt=$conn->prepare($sql))
  {
    $stmt->bind_param("i",$cake_id);
    if($stmt->execute())
    {
      $stmt->store_result();
      if($stmt->num_rows > 0)
      {
        $stmt->bind_result($title, $description, $location, $price);
        while ($stmt->fetch())
        {
          $title = $title;
          $description = $description;
          $location = $location;
          $price = $price;
        } // while fetch
      } //num_rows
    } //execute()
  } //prepare()
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116041965-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116041965-1');
</script>

        <title>Cravings | Item </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
        <meta name="keywords" content="Cakes, Pastry, Dessert, Wedding Cakes, Birthday Cakes, Baptism Cakes, Cakes in Goa, Goa, Sweets in Goa, Cravings Goa, Cravings Cakes, Cravings Cake Shop Goa, Cravings Dessert, Cravings Parra, Chocolate Cake, Cheesecakes" />

        <!-- Favicon icon -->
        <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.ico" sizes="32x32" />
        <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.ico" sizes="16x16" />
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- bootstrap css -->
        <link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" />
        <!-- gallery css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/font-awesome.css" rel="stylesheet">
        <!-- fontawesome css -->
        <link rel="stylesheet" href="css/sweetalert.css">
        <link rel="stylesheet" type="text/css" href="css/pace.css" media="all">  <!-- pace css -->
        <!--fonts-->
        <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
        <!--//fonts-->

    </head>

    <body>

        <!-- header -->
        <div class="header">
            <div class="content white">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                            <a class="navbar-brand" href="index.php">
							<img src="images/logo.png" alt="Cravings logo" class="logo"/>
						</a>
                        </div>
                        <!--/.navbar-header-->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <nav>
                                <ul class="nav navbar-nav">
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="about.php">About </a></li>
                                    <li><a href="gallery.php" class="active">Gallery</a></li>
                                    <li><a href="contact.php">Mail Us</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" aria-hidden="true"><b class="caret"></b></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <?php
										if (!isset($_SESSION['cravings_id']))
										{
										echo "<script>console.log('not set');</script>";
										?>
                                                <li><a class="g-signin2" data-onsuccess="onSignIn"></a></li>
                                                <!-- google sign in -->
                                                <?php
										}
										else
										{
										echo '<script>console.log("set");</script>';
										?>
                                                   <li><a href="orders.php">My Orders</a></li>
                                                    <li><a href="#" onclick="signOut();">Sign Out <span class="fa fa-sign-out" aria-hidden="true"></a></li>
                                                    <?php
										}
									 	?>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--/.navbar-collapse-->
                        <!--/.navbar-->
                    </div>
                </nav>
            </div>
        </div>
        <!-- //header -->

        <!-- innerpages_banner -->
        <div class="innerpages_banner">
            <h2>
                <?php echo $title ?>
            </h2>
        </div>
        <!-- //innerpages_banner -->

        <!-- cake info -->
        <section class="cake-info">
            <div class="container white-bg pad-20">
                <div class="col-md-4 col-sm-4">
                    <img src="<?php echo $location ?>" alt="cake" class="cake-info-image">
                </div>
                <div class="col-md-8 col-sm-8 cake-info-about ">
                   <?php

                            if($description != "")
                            {
                    ?>
                    <h3>About the cake:</h3>
                    <p>
                        <?php echo $description ?>
                    </p>
                    <?php
                            }
                    ?>
                    <br/>
                    <form name="order" action="" method="post">
                        <div class="col-md-6">
                            Weight:
                            <select name="weight" id="weight">
				<option value="1000">1 kg</option>
				<option value="2000">2 kg</option>
				<option value="3000">3 kg</option>
				<option value="4000">4 kg</option>
				<option value="5000">5 kg and above</option>
			</select>
                            <br/> <br/>
                            <input type="radio" name="egg" value="egg" checked> Egg &emsp;
                            <input type="radio" name="egg" value="eggless"> Eggless<br>
                            <br/> Message on cake:<br>
                            <input type="text" name="message" id="message">
                        </div>
                        <div class="col-md-6 center order">
                            <?php
                                if(isset($_SESSION['cravings_id']))
                                {
                                    $cravings_id = $_SESSION['cravings_id'];
                                    ?>
                                    <a href="#" class="hvr-bounce-to-right read" id="order"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Order Now</a>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                    <a href="#" class="hvr-bounce-to-right read"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Sign In to Order</a>
                                    <?php
                                }
                            ?>


                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- //cake info -->



        <!-- footer -->
        <div class="footer">
            <div class="container">
                <div class="w3_agile_footer_grids">
                    <div class="col-md-3 col-xs-6 w3_agile_footer_grid right">
                        <img src="images/logo.png" alt="logo">
                    </div>
                    <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                        <h3>Navigation</h3>
                        <ul class="agileits_w3layouts_footer_grid_list">
                            <li>
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                                <span class="fa fa-angle-double-right" aria-hidden="true"></span>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 w3ls_address_mail_footer_grids w3_agile_footer_grid">
                        <h3>Contact Us</h3>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-map-marker" aria-hidden="true"></span>
						</div>
						<p>Fuldem Vaddo, Nagoa<br>
							Near Nagoa Grande Hotel,<br>
							Bardez, Goa.
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-whatsapp" aria-hidden="true"></span>
						</div>
						<p>+(91) 88053 09016
							<span>+(91) 95525 59016</span>
						</p>
						<div class="clearfix"></div>
					</div>
					<div class="w3ls_footer_grid_left">
						<div class="w3l-icon">
							<span class="fa fa-envelope-o" aria-hidden="true"></span>
						</div>
						<p>
							savio_travasso@yahoo.com
							<span>

							</span>
						</p>
						<div class="clearfix"></div>
					</div>
                    </div>
                    <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                        <h3>Opening Hours</h3>
                        <ul>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Monday - Saturday</li>
                            <li>&emsp; 9:00 - 20:00</li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Sunday <span>Orders Only</span></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileinfo_copyright">
                    <p>© 2018 Cravings All Rights Reserved | Design by <a href="https://facebook.com/rocking.rishi96">Rishi Gohil</a>
                    </p>
                    <p>
                        <a href="https://www.facebook.com/Cravings-168809469935870/"><i class="fa fa-facebook-square fa-2x icon-fb" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/cravings_goa/"><i class="fa fa-instagram fa-2x icon-instagram" aria-hidden="true"></i></a>
				    </p>
                </div>
            </div>
        </div>
        <!-- //footer -->

        <!-- Supportive js -->
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script src="js/jquery.redirect.js" charset="utf-8"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/pace.min.js"></script>
        <!-- //Supportive js -->

        <!-- google sign in -->

        <script type="text/javascript">
            function onSignIn(googleUser) {
                var profile = googleUser.getBasicProfile();
                var google_id = profile.getId(); // Do not send to your backend! Use an ID token instead.
                var name = profile.getName();
                var img_url = profile.getImageUrl();
                var email = profile.getEmail(); // This is null if the 'email' scope is not present.
                console.log(google_id);
                <?php
                if(!isset($_SESSION['cravings_id']))
                {
                    ?>
                    $.redirect("php/login.php", {
                        google_id: google_id,
                        name: name,
                        img_url: img_url,
                        email: email,
                        redirect_location: 'item.php?q=<?php echo $cake_id ?>'
                    });
                    <?php
                }
                ?>


            }
        </script>

        <!-- //google sign in -->

        <!-- google sign out -->
        <script type="text/javascript">
            function signOut() {
                $.ajax({
                    type : 'POST',
                    url : 'php/logout.php'
                })
                .done(function(msg){
                    console.log(msg);
                    var auth2 = gapi.auth2.getAuthInstance();
                    auth2.signOut().then(function() {
                        console.log('User signed out.');
                        location.reload();
                    });
                });

            }

            function onLoad() {
                gapi.load('auth2', function() {
                    gapi.auth2.init();
                });
            }
        </script>
        <!-- //google sign out -->

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <!-- bootstrap js file -->



        <!-- smooth scrolling js -->
        <script src="js/SmoothScroll.min.js"></script>
        <!-- smooth scrolling js -->

        <!-- start-smooth-scrolling -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event) {
                    event.preventDefault();
                    $('html,body').animate({
                        scrollTop: $(this.hash).offset().top
                    }, 1000);
                });
            });
        </script>

        <!-- here starts scrolling icon -->
        <script type="text/javascript">
            $(document).ready(function() {

                $().UItoTop({
                    easingType: 'easeOutQuart'
                });

            });
        </script>
        <!-- //here ends scrolling icon -->

        <!-- move to top-js-files -->
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <!-- //move to top-js-files -->
        <script type="text/javascript">
            $("#order").click(function() {
                var weight = $('#weight :selected').text();
                var type = $('input[name=egg]:checked').val();
                var message = $('#message').val();
                var message_check = 0;
                console.log(weight);
                console.log(type);
                console.log(message);

                if (message == '') {
                    console.log("empty message");
                    swal({
                            title: "No message entered",
                            text: "Do you want to continue without entering a message to write on the cake?",
                            type: "warning",
                            showCancelButton: true,
                            confirmButtonColor: '#DD6B55',
                            confirmButtonText: 'Yes, Continue!',
                            cancelButtonText: "No, go back!",
                            animation: "slide-from-bottom",
                            closeOnConfirm: false,
                            closeOnCancel: true
                        },
                        function(isConfirm) {
                            console.log(isConfirm);
                            if (isConfirm) {
                                console.log("here");
                                message = "no message";
                                order_swal(); //call function for further details
                            }
                        });
                } else {
                    order_swal(); //call function for further details
                }


                function order_swal() {
                    swal({
                        title: "Enter your Address!",
                        text: "<textarea id='address'></textarea>",
                        html: true,
                        showCancelButton: true,
                        closeOnConfirm: false,
                        animation: "slide-from-top"
                    }, function(inputValue) {
                        var address = document.getElementById('address').value;
                        if (inputValue === false) return false;
                        if (address === "") {
                            swal.showInputError("You need to write something!");
                            return false
                        }
                        // get value using textarea id
                        //swal("Nice!", "You wrote: " + address, "success");
                        swal({
                            title: "Contact Information",
                            text: "Please enter your mobile number:",
                            type: "input",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            //showLoaderOnConfirm: true,
                            inputPlaceholder: "mobile number"
                        }, function(inputValue) {
                            if (inputValue === false) return false;
                            if (inputValue === "") {
                                swal.showInputError("Can't leave this blank.");
                                return false
                            }
                            if (!/^\d{10}$/.test(inputValue)) {
                                swal.showInputError("Invalid number. Must be ten digits")
                                return false
                            }
                            //swal("Nice!", "You wrote: " + inputValue, "success");
                            $.ajax({
                                    method: "POST",
                                    url: "php/place_order.php",
                                    data: {
                                        cake_id: <?php echo $cake_id ?>,
                                        message: message,
                                        weight : weight,
                                        type : type,
                                        address : address,
                                        phone : inputValue,
                                        cravings_id : <?php echo $cravings_id ?>
                                    }
                                })
                                .done(function(msg) {
                                    swal({
                                        title: "Great!",
                                        text : "Your order has been placed",
                                        type: "success"
                                    },
                                        function(){
                                        window.location = 'orders.php';
                                    });
                                });
                        });
                    });
                }
            });
        </script>
        <script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script>
        <!-- google sign in -->
    </body>

    </html>
    <?php
} //isset()
?>

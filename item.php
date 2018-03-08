<?php
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
        <title>Bakery In a Hotel Category Bootstrap Responsive Website Template | Gallery :: w3layouts </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
        <meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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
										session_start();
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
				<option value="500">0.5 kg</option>
				<option value="1000">1 kg</option>
				<option value="1500">1.5 kg</option>
			</select>
                            <br/> <br/>
                            <input type="radio" name="egg" value="egg" checked> Egg &emsp;
                            <input type="radio" name="egg" value="eggless"> Eggless<br>
                            <br/> Message on cake:<br>
                            <input type="text" name="message" id="message">
                        </div>
                        <div class="col-md-6 center order">

                            <a href="#" class="hvr-bounce-to-right read" id="order"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Order Now</a>
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
                            <p>2055 PR Cross Road,
                                <span>Kennebec SD, USA.</span>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="w3ls_footer_grid_left">
                            <div class="w3l-icon">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                            </div>
                            <p>+(112) 455 312 671
                                <span>+(029) 664  951 859</span>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="w3ls_footer_grid_left">
                            <div class="w3l-icon">
                                <span class="fa fa-envelope-o" aria-hidden="true"></span>
                            </div>
                            <p>
                                <a href="mailto:info@example.com">mail@example1.com</a>
                                <span>
								<a href="mailto:info@example.com">mail@example2.com</a>
							</span>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 w3_agile_footer_grid">
                        <h3>Opening Hours</h3>
                        <ul>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Monday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Tuesday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Wednesday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Thursday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Friday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Saturday <span>9:00 - 14:00</span></li>
                            <li><span class="fa fa-clock-o" aria-hidden="true"></span> Sunday <span>Closed</span></li>
                        </ul>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="agileinfo_copyright">
                    <p>© 2018 Cravings All Rights Reserved | Design by <a href="https://facebook.com/rocking.rishi96">Rishi Gohil</a>
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
                $.redirect("php/login.php", {
                    google_id: google_id,
                    name: name,
                    img_url: img_url,
                    email: email,
                    redirect_location: 'item.php?q=<?php echo $cake_id ?>',
                    q: <?php echo $cake_id ?>
                });
            }
        </script>

        <!-- //google sign in -->

        <!-- google sign out -->
        <script type="text/javascript">
            function signOut() {
                <?php
	unset($_SESSION['cravings_id']);
	 ?>
                var auth2 = gapi.auth2.getAuthInstance();
                auth2.signOut().then(function() {
                    console.log('User signed out.');
                    location.reload();
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
                                        phone : inputValue
                                    }
                                })
                                .done(function(msg) {
                                    swal("Nice!", "You wrote: " + msg, "success");
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

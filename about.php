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
<title>Cravings | About </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content="Cakes, Pastry, Dessert, Wedding Cakes, Birthday Cakes, Baptism Cakes, Cakes in Goa, Goa, Sweets in Goa, Cravings Goa, Cravings Cakes, Cravings Cake Shop Goa, Cravings Dessert, Cravings Parra, Chocolate Cake, Cheesecakes" />
<meta name="theme-color" content="#FC01FB" />
<!-- Favicon icon -->
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.ico" sizes="32x32" />
<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.ico" sizes="16x16" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/about.css" rel="stylesheet" type="text/css" media="all" /><!-- about css -->
<link href="css/services.css" rel="stylesheet" type="text/css" media="all" /><!-- services css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/pace.css" media="all">  <!-- pace css -->
<link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->
</head>
<body>

	<!-- header -->
	<div class="header" id="home">
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
								<li><a href="about.php" class="active">About </a></li>
								<li><a href="gallery.php">Gallery</a></li>
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
										<li><a class="g-signin2" data-onsuccess="onSignIn"></a></li> <!-- google sign in -->
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
		<h2>About Us</h2>
	</div>
<!-- //innerpages_banner -->

<!-- Vision Statement -->
<div class="about_section">
    <div class="container white-bg pad-20 about_right">
        <h3 class="bold">Mission Statement : </h3>
        <h3>To deliver cravings to every heart.</h3>
        <div class="clearfix"> </div>
    </div>
</div>



<!-- //Vision Statement -->


<!-- about section content -->
<div class="about_section">
	<div class="container white-bg pad-20">
		<div class="col-md-6 about-left">
			<div class="col-md-6 cakeimg">
				<img src="images/cakes/birthday/other/222.jpg" alt="image" />
				<img src="images/cakes/wedding/6.jpg" alt="image" />
			</div>
			<div class="col-md-6 cakeimg cakeimg2">
				<img src="images/cakes/wedding/125.jpg" alt="image" />
				<img src="images/cakes/other/120.jpg" alt="image" />
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-6 about_right">
			<h3>Made for you</h3>
			<h3 class="bold">with love</h3>
			<p>Producing fresh stuff, we maintain high standard for ourselves which is a distinctive feature of this outlet. We believe in producing excellent quality products with personalized service.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //about section content -->

<!-- stats -->
    <?php
    include ('php/config/db_config.php');
    $query = "SELECT * from cravings_test_stats where stats_id = 1";
    if($result = $conn->query($query))
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $branches = $row['branches'];
            $cakes = $row['cakes_baked'];
            $customers = $row['customers'];
            $orders = $row['orders'];
        }
    }
    else
    {
        echo "Something Went Wrong!";
    }
    ?>
	<div class="stats" id="stats">
	    <div class="container white-bg pad-20">
		<h3 class="heading">Stats</h3>
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-home" aria-hidden="true"></i>
			<p class="counter"><?php echo $branches ?></p>
			<h3>Branch</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-birthday-cake" aria-hidden="true"></i>
			<p class="counter"><?php echo $cakes ?></p>
			<h3>Cakes Baked</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">

		 <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter"><?php echo $customers ?></p>
			<h3>Happy Customers</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-check-square-o" aria-hidden="true"></i>
			<p class="counter"><?php echo $orders ?></p>
			<h3>Orders</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>
</div>
<!-- //stats -->

<div class="pad-top-50">
</div>

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
				<p>© 2018 Bakery In. All Rights Reserved | Design by <a href="https://facebook.com/rocking.rishi96">Rishi Gohil</a>
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
<script src="js/jquery.redirect.js"></script>
<!-- //Supportive js -->

<script src="js/pace.min.js"></script>
<!-- google sign in -->

<script type="text/javascript">

function onSignIn(googleUser) {
var profile = googleUser.getBasicProfile();
var google_id = profile.getId(); // Do not send to your backend! Use an ID token instead.
var name = profile.getName();
var img_url = profile.getImageUrl();
var email = profile.getEmail(); // This is null if the 'email' scope is not present.
console.log(google_id);
console.log("sign-in");
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'about.php' });
}


</script>

<!-- //google sign in -->

<!-- google sign out -->
<script type="text/javascript">
    function signOut()
    {
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

<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
<!-- smooth scrolling js -->

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> <!-- google sign in -->

</body>
</html>

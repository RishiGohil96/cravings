<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakery In a Hotel Category Bootstrap Responsive Website Template | About :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
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
	<div class="stats" id="stats">
	    <div class="container white-bg pad-20">
		<h3 class="heading">Stats</h3>
			<div class="inner_w3l_agile_grids">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
		   	<i class="fa fa-home" aria-hidden="true"></i>
			<p class="counter">1</p>
			<h3>Branch</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
		   <i class="fa fa-birthday-cake" aria-hidden="true"></i>
			<p class="counter">165</p>
			<h3>Cakes Baked</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">

		 <i class="fa fa-smile-o" aria-hidden="true"></i>
			<p class="counter">563</p>
			<h3>Happy Customers</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
		<i class="fa fa-check-square-o" aria-hidden="true"></i>
			<p class="counter">580</p>
			<h3>Orders</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
   </div>
</div>
<!-- //stats -->
<!-- team -->
	<div class="team" id="team">
	   <div class="agile_dot_info two">
		<div class="container">
		<h3 class="heading">Our Staff</h3>
			<div class="agileits_team_grids">
				<div class="col-md-6">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/chef3.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>Laura Olivia</h4>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
					</div>
				</div>
				</div>
				<div class="col-md-6">
				<div class="agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/chef4.jpg" alt=" " class="img-responsive" />
					</div>
					<h4>William James</h4>
					<div class="social-icon">
						<a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a>
						<a href="#" class="social-button twitter"><i class="fa fa-twitter"></i></a>
						<a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>
						<a href="#" class="social-button dribbble"><i class="fa fa-dribbble"></i></a>
					</div>
				</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!-- //team -->

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
							<span class="fa fa-phone" aria-hidden="true"></span>
						</div>
						<p>+(91) 88053 09016
							<!--<span>+(029) 664  951 859</span>-->
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
				<p>© 2018 Bakery In. All Rights Reserved | Design by <a href="https://facebook.com/rocking.rishi96">Rishi Gohil</a>
				</p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.redirect.js" charset="utf-8"></script>
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
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'about.php' });
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
	auth2.signOut().then(function () {
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
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

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

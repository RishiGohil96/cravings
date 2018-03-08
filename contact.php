<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakery In a Hotel Category Bootstrap Responsive Website Template | Contact :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/contact.css" rel="stylesheet" type="text/css" media="all" /><!-- contact css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->
<style>
		#map{
				height:  400px;
		}
</style>
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
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php" class="active">Mail Us</a></li>
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
		<h2>Mail Us</h2>
	</div>
<!-- //innerpages_banner -->

<!-- Contact -->
	<div class="contact-section" id="contact">
		<div class="container">
			<h3 class="heading">Contact Us</h3>
			<div class="col-md-4 address-left">
				<div class="address-grid">
					<h4>Contact <span>Info</span></h4>
					<div class="address-grids">
						<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Mobile </p><span>+(91) 88053 09016</span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grids">
						<span class="fa fa-envelope-o" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Mail </p><span>savio_travasso@yahoo.com</span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grids">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
						<div class="contact-right">
							<p>Location</p><span>Fuldem Vaddo, Nagoa, Near Nagoa Grande Hotel, Bardez, Goa.</span>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
			<!-- map -->
			<div class="col-md-8">
				<div class="map">
	 			<figure class="">
					<div id="map"></div>
				</figure>
			</div>
			</div>
			<!-- //map -->
			<div class="clearfix"> </div>
			<div class="mail_grid_w3l white-bg">
				<form action="#" method="post">
					<div class="col-md-6 contact_left_grid">
						<div class="contact-fields-w3ls">
							<input type="text" name="Name" placeholder="Name" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="email" name="Email" placeholder="Email" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Telephone" placeholder="Phone Number" required="">
						</div>
						<div class="contact-fields-w3ls">
							<input type="text" name="Subject" placeholder="Subject" required="">
						</div>
					</div>
					<div class="col-md-6 contact_rightt_grid">
						<div class="contact-fields-w3ls">
							<textarea name="Message" placeholder="Message..." required=""></textarea>
						</div>
						<input type="submit" value="Submit">
					</div>
					<div class="clearfix"> </div>

				</form>
			</div>
		</div>
	</div>
<!--// Contact -->



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
				<p>© 2018 Cravings All Rights Reserved | Design by <a href="https://facebook.com/rocking.rishi96">Rishi Gohil</a>
				</p>
			</div>
		</div>
	</div>
<!-- //footer -->

<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.redirect.js" charset="utf-8"></script>
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
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'contact.php' });
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
<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

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
<script type="text/javascript">
function initMap() {
var uluru = {lat: 15.561076, lng: 73.78085510000005};
var map = new google.maps.Map(document.getElementById('map'), {
zoom: 15,
center: uluru
});
var marker = new google.maps.Marker({
position: uluru,
map: map
});
}
</script>

<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> <!-- google sign in -->

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxSsBOIm2xLL06ktqqtLpTWg6bp2m9DQY&callback=initMap">
</script>
</body>
</html>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Bakery In a Hotel Category Bootstrap Responsive Website Template | Gallery :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /><!-- gallery css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />


<link href="css/font-awesome.css" rel="stylesheet"><!-- fontawesome css -->
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->
<script src="js/angular.min.js" charset="utf-8"></script>
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
		<h2>Our Gallery</h2>
	</div>
<!-- //innerpages_banner -->
<div ng-app="app" ng-controller="main">


<nav class="navbar navbar-default" role="navigation" id="menu">
	<div class="container">

		<div class="navbar-header" id="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
		<h1>Menu </h1>

		</div>
		<!--/.navbar-header-->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
			<nav>
				<ul class="nav navbar-nav navbar-nav-left">
					<li><a ng-click="filters.type ='' ; filters.subtype=''" id="all_cakes">All</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Birthdays <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a ng-click="filters.type ='3' ; filters.subtype='3'">1<sup>st</sup> Birthday</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='3' ; filters.subtype='4'">21<sup>st</sup> Birthday</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='3' ; filters.subtype='5'">50<sup>th</sup> Birthday</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='3' ; filters.subtype='6'">Kids</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='3' ; filters.subtype='9'">Football</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='3' ; filters.subtype='7'">Other</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Anniversaries <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a ng-click="filters.type ='1' ; filters.subtype='1'">25<sup>th</sup> Anniversary</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='1' ; filters.subtype='2'">50<sup>th</sup> Anniversary</a></li>
							<li class="divider"></li>
							<li><a ng-click="filters.type ='1' ; filters.subtype='8'">Other</a></li>
						</ul>
					</li>
					<li><a ng-click="filters.type ='2' ; filters.subtype=''">Baptism</a></li>
					<li><a ng-click="filters.type ='4' ; filters.subtype=''">Communion</a></li>
					<li><a ng-click="filters.type ='5' ; filters.subtype=''">Wedding</a></li>
					<li><a ng-click="filters.type ='6' ; filters.subtype=''">Adult</a></li>
					<li><a ng-click="filters.type ='7' ; filters.subtype=''">Other</a></li>
				</ul>
			</nav>
		</div>
		<!--/.navbar-collapse-->
		<!--/.navbar-->

	</div>
</nav>
<!-- Portfolio section -->
<section class="portfolio-agileinfo gallery background" id="portfolio" >
			<h3 class="heading">Gallery</h3>
				<div class="container" >
	<div class="gallery-grids">
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">

					<div class="tab_img">
						<div ng-repeat="cake in cakes.cakes | filter : filters" class=" portfolio-grids" data-aos="zoom-in">
							<a href="item.php?q={{cake.cake_id}}" class="b-link-stripe b-animate-go lightninBox" data-lb-group="1">
								<img src="{{cake.location}}" class="img-responsive" alt="{{cake.title}}"/>
								<div class="b-wrapper">
									<h5>{{cake.title}}</h5>
								</div>
							</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				</div>
		</div>
	</div>
	</div>
</section>
</div>
<!-- /Portfolio section -->


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
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- //Supportive js -->
<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->



<!-- smooth scrolling js -->
<script src="js/SmoothScroll.min.js"></script>
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
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'gallery.php' });
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
	/* fix to top */
	var stickySidebar = $('#menu').offset().top;

$(window).scroll(function() {
    if ($(window).scrollTop() > stickySidebar) {
        $('#menu').addClass('affix');
    }
    else {
        $('#menu').removeClass('affix');
    }
});

</script>

	<!-- here starts scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<!-- //here ends scrolling icon -->

	<!-- angular -->
	<script type="text/javascript">

	var app = angular.module('app', []);

	app.controller('main', function($scope) {
	$.getJSON('php/get_cakes.php', function(data) {
	$scope.filters = {};
	$scope.cakes=data;
	//console.log($scope.cakes);
	document.getElementById('all_cakes').click();
	});
	});
	</script>
	<!-- //angular -->

<!-- move to top-js-files -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
<!-- //move to top-js-files -->

<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> <!-- google sign in -->

</body>
</html>

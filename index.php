<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en" >
<head>
<title>Bakery In a Hotel Category Bootstrap Responsive Website Template | Home :: w3layouts </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content="Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!--	modal -->
<link rel="stylesheet" href="css/normalize.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/rotate.css">
<!--	//modal -->
<link rel="stylesheet" type="text/css" href="css/pace.css" media="all">  <!-- pace css -->
<link href="css/font-awesome.css" rel="stylesheet"> <!-- fontawesome css -->
<link rel="stylesheet" href="css/sweetalert.css">
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet" type="text/css">
<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,vietnamese" rel="stylesheet">
<!--//fonts-->

</head>
<body>
	<!--<audio src="music/background.mp3" autoplay>
	<p>If you are reading this, it is because your browser does not support the audio element.     </p>
	<embed src="music/background.mp3" width="180" height="90" hidden="true" />
</audio>-->
<div class="white-bg center" id="music">
<audio id="myAudio" src="music/background.mp3" preload="auto">
</audio>
<a onClick="togglePlay()">Play/Pause music</a>
</div>
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
								<li><a href="index.php" class="active">Home</a></li>
								<li><a href="about.php">About </a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="contact.php">Mail Us</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user" aria-hidden="true"><b class="caret"></b></a>
									<ul class="dropdown-menu dropdown-menu-right">
										<?php
										session_start();
										include ('php/config/db_config.php');
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

	<!-- banner slider -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h2>We have something to fulfill everyone’s <span>sweet tooth.</span></h2>
							<p></p>
							<a href="#about" class="hvr-bounce-to-right read scroll"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Read More</a>
						</div>
						<div class="col-md-6 slider_right">
							<img src="images/cake.png" alt="cake1" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item2">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>Fresh baked cakes <span>throughout the day.</span></h3>
							<p></p>
							<a href="#about" class="hvr-bounce-to-right read scroll"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Read More</a>
						</div>
						<div class="col-md-6 slider_right">
							<img src="images/cake1.png" alt="cake1" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item3">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>There's something for <span>every occasion.</span></h3>
							<p></p>
							<a href="#about" class="hvr-bounce-to-right read scroll"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Read More</a>
						</div>
						<div class="col-md-6 slider_right">
							<img src="images/cake2.png" alt="cake1" />
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="item item4">
				<div class="container">
					<div class="carousel-caption">
						<div class="col-md-6 slider_left">
							<h3>Life is uncertain. <span>Eat dessert first.</span></h3>
							<p></p>
							<a href="#about" class="hvr-bounce-to-right read scroll"><span class="fa fa-birthday-cake" aria-hidden="true"></span>Read More</a>
						</div>
						<div class="col-md-6 slider_right">
							<img src="images/cake4.png" alt="cake1" />
						</div>
						<div class="clearfix"></div>
					</div>
					</div>
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="fa fa-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="fa fa-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
		<!-- The Modal -->
	</div>
	<!-- //banner slider -->
<!-- welcome -->
<div class="welcome"  id="about">
	<div class="container white-bg pad-20">
		<div class="col-md-6 welcome-w3lright">
			<div class="pad-top-50">
				<div> <img src="images/cravings_shop.jpg" alt="" class="img-responsive" /> </div>
			</div>
		</div>
		<div class="col-md-6 welcome_left ">
			<h3 class="agileits-title">Welcome To Cravings</h3>
			<h4>Where we promise to satiate your sweet tooth.</h4>
			<p>Having worked as a Sales Professional, for over a decade with brands such as Xerox, in India and overseas, Savio Travasso, had always a desire to do things differently. And with a passion for service and a better half, Claudia specialized in baking and confectionary, Cravings was conceptualized. And thus, their outlet, Cravings was opened on the day of February 2, 2013. Cravings has something to fulfill one’s sweet tooth. Producing fresh stuff, we maintain high standard for ourselves which is a distinctive feature of this outlet. We believe in producing excellent quality products with personalized service. From rum balls to tarts, to specialty cakes and various delicious desserts, we promise to satiate your sweet tooth. Our cakes and treats are baked fresh throughout the day.</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!-- //welcome -->

<!-- /about -->
	<div class="about">
		<div class="container">
			<div class="wthree_head_section">
				<h3 class="heading">Know More About Cravings</h3>
			</div>
			<div class="agile_wthree_inner_grids">
				<div class="col-md-12 about_agileinfo">
					<h4>Cake for each occasion</h4>
					<p>We offer cakes in a wide range of sizes, flavors, 3D Characters and themes such as, Angry Bird, Spiderman, Tom and Jerry, Doraemon, Chota Bheem, etc. We also design cakes for occasions such as Weddings, Communions, Baptism, Birthday celebrations, etc. Fondant cake and sugar crafted flowers adorn our cakes. We also take orders setting up dessert counters for parties. In the near future, We intend to extend to a wide range of savories as well, like croissants, sandwiches, etc. So come and satisfy your sweet tooth cravings here.</p>
					</div>

				<div class="col-md-12 about_agileinfo"><div class="mid-inner-info">
					<div class="col-md-4 mid-inner-sec one">
						<span class="fa fa-birthday-cake" aria-hidden="true"></span>
						<h5>Delicious Cakes</h5>
						<p>Black Forest, Coffee Mocha, Chocolate Truffle, Chocolate Madness, Ferrero Rocher Cake, Pineapple Cake.</p>

					</div>
					<div class="col-md-4 mid-inner-sec">
						<span class="fa fa-cutlery" aria-hidden="true"></span>
						<h5>Exotic Desserts</h5>
						<p>Brownies, Choco Croissants, Choco Lava, Lemon Tart, Donuts, Fruit Truffle, Apple Pie, Swiss Roll.</p>

					</div>
						<div class="col-md-4 mid-inner-sec one">
							<span class="fa fa-birthday-cake" aria-hidden="true"></span>
							<h5>Muffins</h5>
							<p>Plain Cupcakes, Strawberry, Chocolate, Blueberry, and much more...</p>

						</div>

						<div class="clearfix"></div>

					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
<!--//about -->

<!-- Popular cakes -->
<div class="popular_cakes">
	<div class="container">
		<h3 class="heading">Most Popular cakes</h3>
		<div class="cakes_grids">
			<?php
				$query="select cake_id, title, location from cravings_test_cake_details where popular=1";
				$result= $conn->query($query);
				if(mysqli_num_rows($result) > 0)
				{
					$popular_count = 0;
					while($row= mysqli_fetch_assoc($result))
					{
						$popular_count++;
						$cake_id = $row['cake_id'];
						$location = $row['location'];
						$title = $row['title'];
						?>
						<div class="col-md-4">
							<a href="item.php?q=<?php echo $cake_id ?>">
						<div class="cakes_grid1 white-bg">
							<img src="<?php echo $location ?>" alt="popular cakes" height="250px"/>
							<h3><?php echo $title ?></h3>
						</div>
						</a>
						</div>
						<?php
						if($popular_count  % 3 == 0)
						{
							if($popular_count == 3)
							{
								?>
								<div class="clearfix"></div>
								<div class="cakes_bottom_grids">
								<?php
							}
							else
							{
								?>
								<div class="clearfix"></div>
								</div>
								<div class="cakes_bottom_grids">
								<?php
							}

						}
					}
					if($popular_count >= 3)
					{
						?>
						<div class="clearfix"></div>
						</div>
						<?php
					}
				}
			 ?>


			<div class="clearfix"></div>

		</div>
	</div>
</div>
<!-- //Popular cakes -->


<!-- team -->
<div class="center">
	<div class="team" id="team">
	   <div class="agile_dot_info two" >
		<div class="container" >
		<h3 class="heading">Our Staff</h3>
			<div class="agileits_team_grids ">
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
</div>
<!-- //team -->
<!-- testimonials -->
	<div class="testimonials">
		<div class="container white-bg pad-20">
		<h3 class="heading">Our Customer reviews</h3>
			<div class="testimonials-grids">
				<div class="wmuSlider example1 animated wow slideInUp" data-wow-delay=".5s">
					<div class="wmuSliderWrapper">
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/testimonials/t1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>Tastiest CAKES ever....Yummy#Awesome Designs</p>
										<h4>Sheba Travasso</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/testimonials/t2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>yummilicious........ delicious cakes............awesome designs and creativity</p>
										<h4>Fiona Fernandes</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<!--<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/t2.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
											excepturi sint occaecati cupiditate non provident. Duis maximus, velit posuere rutrum tempus, nibh ligula semper felis.</p>
										<h4>Crisp Ali</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article>
						<article style="position: absolute; width: 100%; opacity: 0;">
							<div class="banner-wrap">
								<div class="testimonials-grid">
									<div class="testimonials-grid-left">
										<img src="images/t1.jpg" alt=" " class="img-responsive" />
									</div>
									<div class="testimonials-grid-right">
										<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
											praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
											excepturi sint occaecati cupiditate non provident. Duis maximus, velit posuere rutrum tempus, nibh ligula semper felis</p>
										<h4>Laura roy</h4>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						</article> -->
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //testimonials -->
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
				<p>© 2018 Cravings All Rights Reserved | Design by <a href="https://www.facebook.com/rocking.rishi96">Rishi Gohil</a>
				</p>
			</div>
		</div>
	</div>
<!-- //footer -->





<!-- Supportive js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.redirect.js" charset="utf-8"></script>
<script src="js/sweetalert.min.js"></script>
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
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'index.php' });
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

<script type="text/javascript">
var myAudio = document.getElementById("myAudio");

function togglePlay() {
  return myAudio.paused ? myAudio.play() : myAudio.pause();
};
</script>
<!-- banner bottom video script -->
<script src="js/simplePlayer.js"></script>
			<script>
				$("document").ready(function() {
					$("#video").simplePlayer();
				});
</script>
<!-- //banner bottom video script -->

<!-- testimonials plugin script -->
	<script src="js/jquery.wmuSlider.js"></script>
	<script>
		$('.example1').wmuSlider();
	</script>
<!-- testimonials plugin script -->

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

		setTimeout(function(){
        swal("Enjoy the music", "You can play/pause our happy music at the top of the window", "info");
	   }, 5000);
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

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->

<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> <!-- google sign in -->

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Cravings | Orders</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-client_id" content="901571492977-108qc682d2sfg686o1i37po8gsogssii.apps.googleusercontent.com"> <!-- google sign in -->
<meta name="keywords" content=" Bakery In Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" /><!-- bootstrap css -->
<link href="css/about.css" rel="stylesheet" type="text/css" media="all" /><!-- about css -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/pace.css" type="text/css" media="all"> <!-- pace css -->

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
								<li><a href="about.php" >About </a></li>
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
										<li><a href="orders.php" class="active">My Orders</a></li>
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
		<h2>My Orders</h2>
	</div>
<!-- //innerpages_banner -->

<!-- orders section content -->
<div class="about_section">
	<div class="container white-bg">
	<?php
        if(isset($_SESSION['cravings_id']))
        {
            include('php/config/db_config.php');
            $query = "SELECT
                        cravings_test_orders_details.order_no,
                        cravings_test_orders_details.order_status,
                        cravings_test_orders_details.cake_mrp,
                        cravings_test_orders_details.delivery,
                        cravings_test_orders_details.payment_status,
                        cravings_test_orders_details.placed_on,
                        cravings_test_cake_details.title,
                        cravings_test_cake_details.location,
                        cravings_test_orders_details.phone
                    FROM
                        cravings_test_orders_details
                    INNER JOIN cravings_test_orders ON cravings_test_orders_details.order_no = cravings_test_orders.order_no
                    INNER JOIN cravings_test_cake_details ON cravings_test_orders_details.cake_id = cravings_test_cake_details.cake_id
                    WHERE
                        cravings_test_orders.cravings_id=".$_SESSION['cravings_id'];
            if($result = $conn->query($query))
            {
                if(mysqli_num_rows($result) == 0)
                {
                    echo "<h2>No Orders Placed!</h2><br><p>Order a cake today. What are you waiting for?</p>";
                }
                else
                {
                    ?>
                    <div class="table-responsive">
                        <table class="table table-hover" >
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Item Title</th>
                                <th>Ordered On</th>
                                <th>Order Status</th>
                                <th>Cake M.R.P.</th>
                                <th>Delivery Charges</th>
                                <th>Total</th>
                                <th>Payment Status</th>
                                <th>Payment</th>
                            </tr>
                        </thead>
                        <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                           ?>
                           <tbody>
                               <tr>
                                   <td><?php echo $row['order_no'] ?></td>
                                   <td><?php echo $row['title'] ?></td>
                                   <td><?php echo $row['placed_on'] ?></td>
                                   <td><?php echo $row['order_status'] ?></td>
                                   <?php
                                        if($row['order_status'] == 'confirmed')
                                        {
                                            $order_no = $row['order_no'];
                                            $total = $row['cake_mrp']+$row['delivery'];
                                            $product = $row['title'];
                                            $phone = $row['phone'];
                                            echo "<td>".$row['cake_mrp']."</td>";
                                            echo "<td>".$row['delivery']."</td>";
                                            echo "<td>".$total."</td>";
                                            echo "<td>".$row['payment_status']."</td>";
                                            if($row['payment_status'] != 'done')
                                            {
                                               ?>
                                                   <td><button class='btn btn-success' onclick="payment(<?php echo $order_no ?>, <?php echo $total ?>, '<?php echo $product ?>', <?php echo $phone ?>)">Pay Now</button></td>
                                                <?php
                                            }
                                            else
                                            {
                                                echo "<td>-</td>";
                                            }
                                        }
                                        else
                                        {
                                            echo "<td>-</td>";
                                            echo "<td>-</td>";
                                            echo "<td>-</td>";
                                            echo "<td>-</td>";
                                            echo "<td>-</td>";
                                        }
                                    ?>
                               </tr>
                           </tbody>
                            <?php
                        }
                        ?>
                        </table>
                    </div>
                    <?php
                }
            }
        }
    ?>



		<div class="clearfix"> </div>
	</div>
</div>
<!-- //orders section content -->



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
$.redirect("php/login.php",{google_id: google_id, name: name, img_url: img_url, email: email, redirect_location: 'orders.php' });
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

<!-- payment function -->
<script type="application/javascript">
    function payment(order_no, total, product, phone)
    {
        console.log(order_no);
        console.log(total);
        console.log(product);
        console.log(phone);
        $.redirect('payment/submit_form.php',{order_no : order_no, amount : total, phone : phone, productinfo : product, });
    }
</script>
<!-- //payment function -->

<script type="text/javascript" src="js/bootstrap.js"></script><!-- bootstrap js file -->
<script src="https://apis.google.com/js/platform.js?onload=onLoad" async defer></script> <!-- google sign in -->

</body>
</html>

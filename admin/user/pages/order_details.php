<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: login/index.html');
    }
    include ('config/db_config.php');
    $order_no = $_POST['order_no'];
    $order_status = $_POST['order_status'];
?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" href="../../../images/favicon/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="../../../images/favicon/favicon-16x16.png" sizes="16x16" />

        <title>Cravings | Admin | Orders</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
        <link rel="stylesheet" href="css/sweetalert.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body class="fix-header card-no-border fix-sidebar">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure">Cravings - Admin Dashboard</div>
                <p class="loader__label"></p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            <header class="topbar">
                <nav class="navbar top-navbar navbar-expand-md navbar-light">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="index.php">
                            <!-- Logo icon --><b>
                            <img src="../../../images/logo.png" alt="homepage" class="dark-logo" width="90" />
                        </b>
                            <!--End Logo icon -->
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-collapse">
                        <!-- ============================================================== -->
                        <!-- toggle and nav items -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav mr-auto">
                            <!-- This is  -->
                            <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
                        </ul>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <ul class="navbar-nav my-lg-0">
                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->

                            <!-- ============================================================== -->
                            <!-- Profile -->
                            <!-- ============================================================== -->
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="#"><img src="../assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <aside class="left-sidebar">
                <!-- Sidebar scroll-->
                <div class="scroll-sidebar">
                    <!-- Sidebar navigation-->
                    <nav class="sidebar-nav">
                        <ul id="sidebarnav">
                            <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                            <li>
                                <a href="#collapse_list" class="collapse-toggle" data-toggle="collapse">
                                   <i class="mdi mdi-file-document"></i>
                                    <span class="hide-menu"> Orders </span>
                                </a>
                                <div id="collapse_list" class="collapse show">
                                    <ul class="list-group">
                                        <li>
                                            <a class="waves-effect waves-dark" href="orders_pending.php" aria-expanded="false">
                                            <i class="fa fa-exclamation"></i>
                                            <span class="hide-menu"> Pending Orders</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="orders_confirmed.php" aria-expanded="true">
                                            <i class="fa fa-check"></i>
                                            <span class="hide-menu"> Confirmed Orders</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="orders_cancelled.php" aria-expanded="true">
                                            <i class="fa fa-times"></i>
                                            <span class="hide-menu"> Cancelled Orders</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#collapse_list_cakes" class="collapse-toggle" data-toggle="collapse">
                                   <i class="mdi mdi-cake"></i>
                                    <span class="hide-menu"> Cakes </span>
                                </a>
                                <div id="collapse_list_cakes" class="collapse">
                                    <ul class="list-group">
                                        <li>
                                            <a class="waves-effect waves-dark" href="cakes_add.php" aria-expanded="false">
                                            <i class="fa fa-plus"></i>
                                            <span class="hide-menu"> Add Cake</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="cakes_update.php" aria-expanded="true">
                                            <i class="fa fa-check"></i>
                                            <span class="hide-menu"> Update Cake</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#collapse_list_customers" class="collapse-toggle" data-toggle="collapse">
                                   <i class="fa fa-address-book-o"></i>
                                    <span class="hide-menu"> Customers </span>
                                </a>
                                <div id="collapse_list_customers" class="collapse">
                                    <ul class="list-group">
                                        <li>
                                            <a class="waves-effect waves-dark" href="customers_add.php" aria-expanded="false">
                                            <i class="fa fa-user-plus"></i>
                                            <span class="hide-menu"> Add Customers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="customers_view.php" aria-expanded="true">
                                            <i class="fa fa-users"></i>
                                            <span class="hide-menu"> View Customers</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="stats.php" aria-expanded="true">
                                    <i class="fa fa-line-chart"></i>
                                    <span class="hide-menu"> Stats</span>
                                </a>
                            </li>
                            <li>
                                <a class="waves-effect waves-dark" href="#" aria-expanded="true" onclick=logout()>
                                    <i class="fa fa-sign-out"></i>
                                    <span class="hide-menu"> Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    <!-- ============================================================== -->
                    <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 align-self-center">
                            <h3 class="text-themecolor">
                                Orders /
                                <?php
                                if($order_status == 'confirmed')
                                    echo " Confirmed Orders /";
                                elseif($order_status == 'pending')
                                    echo " Pending Orders /";
                                elseif($order_status == 'cancelled')
                                    echo " Cancelled Orders /";
                                echo " Order No. $order_no";
                            ?>
                            </h3>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->

                    <?php
                                    $query = "SELECT
                                                cravings_test_orders_details.order_no,
                                                cravings_test_user_details.first_name,
                                                cravings_test_cake_details.title,
                                                cravings_test_orders_details.weight,
                                                cravings_test_orders_details.placed_on,
                                                cravings_test_orders_details.type,
                                                cravings_test_orders_details.message,
                                                cravings_test_orders_details.address,
                                                cravings_test_orders_details.phone,
                                                cravings_test_orders_details.order_status,
                                                cravings_test_orders_details.payment_status,
                                                cravings_test_user_details.email_id,
                                                cravings_test_cake_details.location
                                            FROM
                                                cravings_test_orders_details
                                            INNER JOIN cravings_test_orders ON cravings_test_orders_details.order_no = cravings_test_orders.order_no
                                            INNER JOIN cravings_test_user_details ON cravings_test_orders.cravings_id = cravings_test_user_details.cravings_id
                                            INNER JOIN cravings_test_cake_details ON cravings_test_orders_details.cake_id = cravings_test_cake_details.cake_id
                                            WHERE
                                                cravings_test_orders_details.order_no = $order_no";

                                    if($result = $conn->query($query))
                                    {
                                        if(mysqli_num_rows($result) == 0)
                                        {
                                            echo "<h3>No orders! </h3>";
                                        }
                                        else
                                        {
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                               ?>

                        <!-- Row start -->
                        <div class="row">
                            <!-- Column start-->
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card">
                                    <div class="card-body">
                                        <center class="m-t-30">
                                            <img src="../../../<?php echo $row['location']?>" class="img-responsive" width="150" />
                                            <h4 class="card-title m-t-10">
                                                <?php echo $row['title']?>
                                            </h4>
                                            <div class="row text-center justify-content-md-center">
                                                <div class="col-4">
                                                    <font class="font-medium">
                                                        <?php echo $row['weight'] ?>
                                                    </font>
                                                </div>
                                                <div class="col-4">
                                                    <font class="font-medium">
                                                        <?php echo $row['type'] ?>
                                                    </font>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- Column end -->
                            <!-- Column start-->
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="card">
                                    <div class="card-body">
                                        <p class="col-md-12">Customer Name<br><b>
                                                                    <span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['first_name'] ?> </b></span>
                                            </b>
                                        </p>




                                        <p class="col-md-12">Message on Cake<br>
                                            <b><span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['message'] ?> </b></span>
                                            </b>
                                        </p>

                                        <p class="col-md-12">Order Placed On<br>
                                            <b><span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['placed_on'] ?> </b></span>
                                            </b>
                                        </p>

                                        <p class="col-md-12">Email<br>
                                            <b><span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['email_id'] ?> </b></span>
                                            </b>
                                        </p>

                                        <p class="col-md-12">Phone<br>
                                            <b><span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['phone'] ?> </b></span>
                                            </b>
                                        </p>

                                        <p class="col-md-12">Address<br>
                                            <b><span class="text-themecolor order-details-text"><b>
                                                                    <?php echo $row['address'] ?> </b></span>
                                            </b>
                                        </p>


                                        <div class="row">
                                           <?php
                                                   if($row['order_status'] != 'confirmed')
                                                   {
                                                       ?>
                                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                                            <button class="btn btn-success" onclick="submit_order('confirmed')">Confirm Order</button>
                                                        </div>
                                                        <?php
                                                   }
                                                   if($row['payment_status'] == 'pending' && $row['order_status'] != 'cancelled')
                                                   {
                                                       ?>
                                                        <div class="col-lg-6 col-sm-6 col-md-6">
                                                            <button class="btn btn-danger" onclick="submit_order('cancelled')">Cancel Order</button>
                                                        </div>
                                                       <?php
                                                   }
                                            ?>


                                        </div>


                                    </div>
                                </div>
                            </div>
                            <!-- Column end-->
                        </div>
                        <!-- Row end -->
                        <?php
                                            }
                                            ?>

                        <?php
                                        }
                                    }
                                ?>



                            <!-- ============================================================== -->
                            <!-- End PAge Content -->
                            <!-- ============================================================== -->
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <footer class="footer">
                    © 2018 Cravings - Admin Dashboard
                </footer>
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../assets/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="js/custom.min.js"></script>
        <!-- Redirect JS -->
        <script src="../../../js/jquery.redirect.js"></script>
        <!-- Sweet Alert JS -->
        <script src="js/sweetalert.min.js"></script>

        <script type="text/javascript">
            function logout() {
                 $.ajax({
                    method: "POST",
                    url: "login/logout.php"
                })
                .done(function() {
                    console.log('logged out');
                    window.location = 'login/';
                });
            }


            function submit_order(status) {
                console.log(status);

                if (status == 'confirmed') {
                    swal({
                            title: "M.R.P. of the cake",
                            text: "",
                            type: "input",
                            showCancelButton: true,
                            closeOnConfirm: false,
                            animation: "slide-from-top",
                            inputPlaceholder: "Enter the M.R.P. of the cake"
                        },
                        function(cake_mrp) {
                            if (cake_mrp === false) return false;

                            if (cake_mrp === "") {
                                swal.showInputError("M.R.P. can't be empty!");
                                return false
                            }

                            if (isNaN(cake_mrp)) {
                                swal.showInputError("M.R.P. should be only numbers");
                                return false;
                            }

                            //delivery swal
                            swal({
                                    title: "Delivery Charges",
                                    text: "leave this field empty if free delivery",
                                    type: "input",
                                    showCancelButton: true,
                                    closeOnConfirm: false,
                                    animation: "slide-from-top",
                                    inputPlaceholder: "Enter the extra delivery charges"
                                },
                                function(delivery_charges) {
                                    if (delivery_charges === false) return false;

                                    if (delivery_charges === "") delivery_charges = 0;

                                    if (isNaN(delivery_charges)) {
                                        swal.showInputError("Delivery charges should be only numbers");
                                        return false;
                                    }
                                    //confirm
                                    swal({
                                            title: "Confirm order?",
                                            text: "Cake M.R.P.: Rs " + cake_mrp + ", Delivery Charges: Rs " + delivery_charges,
                                            type: "warning",
                                            showCancelButton: true,
                                            confirmButtonColor: '#06D79C',
                                            confirmButtonText: 'Yes, Confirm!',
                                            cancelButtonText: "No, cancel it!",
                                            closeOnConfirm: false,
                                            closeOnCancel: true
                                        },
                                        function(isConfirm) {

                                            if (isConfirm) {
                                                $.ajax({
                                                        method: "POST",
                                                        url: "submit/submit_order_status.php",
                                                        data: {
                                                            order_no: <?php echo $order_no ?>,
                                                            status: status,
                                                            cake_mrp : cake_mrp,
                                                            delivery_charges : delivery_charges
                                                        }
                                                    })
                                                    .done(function(msg) {
                                                        swal({
                                                            title: "Order Confirmed",
                                                            text: "",
                                                            type: "success"
                                                        },
                                                        function() {
                                                            $.redirect('orders_confirmed.php');
                                                        });


                                                    });
                                            }
                                        });
                                    //confirm end

                                });
                            //delivery swal end

                        });
                }

                else
                    {
                        //confirm
                        swal({
                                title: "Cancel order?",
                                text: "",
                                type: "error",
                                showCancelButton: true,
                                confirmButtonColor: '#06D79C',
                                confirmButtonText: 'Yes, Cancel!',
                                cancelButtonText: "No",
                                closeOnConfirm: false,
                                closeOnCancel: true
                            },
                            function(isConfirm) {

                                if (isConfirm) {
                                    $.ajax({
                                            method: "POST",
                                            url: "submit/submit_order_status.php",
                                            data: {
                                                order_no: <?php echo $order_no ?>,
                                                status: status,

                                            }
                                        })
                                        .done(function(msg) {
                                            swal({
                                                title: "Order Cancelled",
                                                text: "",
                                                type: "success"
                                            },
                                            function() {
                                                $.redirect('orders_pending.php');
                                            });


                                        });
                                }
                            });
                            //confirm end
                    }





            }

            function yo() {
                $.ajax({
                        method: "POST",
                        url: "submit_order_status.php",
                        data: {
                            order_no: <?php echo $order_no ?>,
                            status: status
                        }
                    })
                    .done(function(msg) {
                        swal("Nice!", "You wrote: " + msg, "success");

                        $.redirect('orders_confirmed.php');

                    });
            }
        </script>
    </body>

</html>

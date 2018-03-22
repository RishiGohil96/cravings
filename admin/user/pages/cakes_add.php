<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include ('../../../php/config/db_config.php');
    if(!isset($_SESSION['admin']))
    {
        header('Location: login/index.html');
    }
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

        <title>Cravings | Admin | Add Cake</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/custom.css">
        <!-- You can change the theme colors from here -->
        <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
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
                                <div id="collapse_list" class="collapse">
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
                                <div id="collapse_list_cakes" class="collapse show">
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
                            <h3 class="text-themecolor">Cakes / Add Cake</h3>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Start Page Content -->
                    <!-- ============================================================== -->
                    <!-- Pending Orders -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <form action="submit_upload_file.php" method="post" id="photo_form" enctype="multipart/form-data" ng-app="MyApp1" ng-controller="MyController" class="form-horizontal form-material">
                                        <div class="form-group">
                                            <label class="col-md-12">Cake type:</label>
                                            <div class="select col-md-12">
                                                <select name="cake_type" id="cake_type" ng-model="feed.drop_pick" ng-options="template.value as template.name for template in feed.picks" class="form-control form-control-line">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="cake_subtype_div">
                                            <label class="col-md-12">Cake Sub type:</label>
                                            <div class="col-md-12 select">
                                                <select name="cake_subtype" id="cake_subtype" ng-model="feed.drop_select" ng-options="template.sub_type as template.sub_type for template in feed.drops | filter: {'type' : feed.drop_pick}" class="form-control form-control-line">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Cake title:</label>
                                            <div class="col-md-12">
                                                <input type="text" name="cake_title" id="cake_title" class="form-control form-control-line" placeholder="Birthday Cake" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-12">Select image to upload:</label>
                                            <div class="col-md-12">
                                                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control form-control-line" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12" style="text-align:center">
                                                <Button type="submit" value="Upload Image" name="submit" class="btn btn-success">Upload</Button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Pending Orders -->
                    <!-- ============================================================== -->



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
        <!-- Angular JS -->
        <script src="js/angular.min.js"></script>

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
            $("#cake_type").change(function() {
                var new_type = $('select[name=cake_type]').val();
                if (new_type != 'string:Anniversary' && new_type != 'string:Birthday') {
                    $('#cake_subtype_div').hide();
                } else {
                    $('#cake_subtype_div').show();
                }
            });
        </script>

        <script type="text/javascript">
            var MyApp = angular.module('MyApp1', [])
            MyApp.controller('MyController', function($scope) {
                $scope.feed = {};

                //pick up locations
                $scope.feed.picks = [{
                        'name': 'Anniversary',
                        'value': 'Anniversary'
                    },
                    {
                        'name': 'Baptism',
                        'value': 'Baptism'
                    },
                    {
                        'name': 'Birthday',
                        'value': 'Birthday'
                    },
                    {
                        'name': 'Communion',
                        'value': 'Communion'
                    },
                    {
                        'name': 'Wedding',
                        'value': 'Wedding'
                    },
                    {
                        'name': 'Adult',
                        'value': 'Adult'
                    },
                    {
                        'name': 'Other',
                        'value': 'Other'
                    }
                ];

                //drop locations
                $scope.feed.drops = [{
                        "type": "Anniversary",
                        "sub_type": "25th Anniversary",
                        "location": "images/cakes/anniversary/25-anniversary/"
                    },
                    {
                        "type": "Anniversary",
                        "sub_type": "50th Anniversary",
                        "location": "images/cakes/anniversary/50-anniversary/"
                    },
                    {
                        "type": "Anniversary",
                        "sub_type": "other",
                        "location": "images/cakes/anniversary/other/"
                    },
                    {
                        "type": "Baptism",
                        "location": "images/cakes/baptism/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "1st Birthday",
                        "location": "images/cakes/birthday/1-birthday/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "21st Birthday",
                        "location": "images/cakes/birthday/21-birthday/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "50th Birthday",
                        "location": "images/cakes/birthday/50-birthday/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "football",
                        "location": "images/cakes/birthday/football/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "Kids",
                        "location": "images/cakes/birthday/kids/"
                    },
                    {
                        "type": "Birthday",
                        "sub_type": "other",
                        "location": "images/cakes/birthday/other/"
                    },
                    {
                        "type": "Communion",
                        "location": "images/cakes/communion/"
                    },
                    {
                        "type": "Wedding",
                        "location": "images/cakes/wedding/"
                    },
                    {
                        "type": "Adult",
                        "location": "images/cakes/adult/"
                    },
                    {
                        "type": "other",
                        "location": "images/cakes/other/"
                    }
                ];

                //Setting first option as selected in configuration select
                $scope.feed.drop_pick = $scope.feed.picks[0].value;
                $scope.feed.drop_select = $scope.feed.drops[0].sub_type;
            });
        </script>

        <script type="text/javascript">
            $("#photo_form").submit(function(e) {

                var cake_type = $('#cake_type').find(":selected").text();
                var cake_subtype = $('#cake_subtype').find(":selected").text();
                var cake_title = $('#cake_title').val();

                console.log(cake_type);
                console.log(cake_subtype);
                console.log(cake_title);

                if ((cake_type == 'Anniversary' || cake_type == 'Birthday') && (cake_subtype == '')) {
                    alert("Please select a cake sub-type");
                    $('#cake_subtype').focus();
                    e.preventDefault();
                }
                if (!Checkfiles()) {
                    e.preventDefault();
                }
            });
        </script>
        <script type="text/javascript">
            function Checkfiles() {
                var file = document.getElementById('fileToUpload');
                var fileName = file.value;
                var ext = fileName.substring(fileName.lastIndexOf('.') + 1);

                if (ext == "PNG" || ext == "png" || ext == "JPG" || ext == "jpg" || ext == "JPEG" || ext == "jpeg") {
                    return true;
                } else {
                    alert("Upload jpg or png Images only");
                    return false;
                }
            }
        </script>
    </body>

</html>

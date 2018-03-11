<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    if(!isset($_SESSION['admin']))
    {
        header('Location: login/index.html');
    }
    include ('config/db_config.php');
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

        <title>Cravings | Admin</title>
        <!-- Bootstrap Core CSS -->
        <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/sweetalert.css">
        <!-- Sweet Alert -->
        <script src="js/sweetalert.min.js"></script>
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
                                <div id="collapse_list_cakes" class="collapse">
                                    <ul class="list-group">
                                        <li>
                                            <a class="waves-effect waves-dark" href="cakes_add.php" aria-expanded="false">
                                            <i class="fa fa-plus"></i>
                                            <span class="hide-menu"> Add Cake</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="waves-effect waves-dark" href="cakes_delete.php" aria-expanded="true">
                                            <i class="fa fa-minus"></i>
                                            <span class="hide-menu"> Delete Cake</span>
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
                                <a class="waves-effect waves-dark" href="add_customer.php" aria-expanded="true">
                                    <i class="fa fa-address-book-o"></i>
                                    <span class="hide-menu"> Add Customer</span>
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
                                    <?php


                                        $cake_type = str_replace("string:","",$_POST['cake_type']);
                                        $cake_subtype = str_replace("string:","",$_POST['cake_subtype']);
                                        $cake_title = $_POST['cake_title'];


                                        /////////////////////////////////////////////////////////////////////

                                        $target_dir = "images/cakes/";
                                        $subtype_id = 0;

                                        if($cake_type == 'Baptism')
                                        {
                                          $type_id = 2;
                                          $target_dir.="baptism/";
                                        }
                                        else if($cake_type == 'Communion')
                                        {
                                          $type_id = 4;
                                          $target_dir.="communion/";
                                        }
                                        else if($cake_type == 'Wedding')
                                        {
                                          $type_id = 5;
                                          $target_dir.="wedding/";
                                        }
                                        else if($cake_type == 'Adult')
                                        {
                                          $type_id = 6;
                                          $target_dir.="adult/";
                                        }
                                        else if($cake_type == 'Other')
                                        {
                                          $type_id = 7;
                                          $target_dir.="other/";
                                        }
                                        else if($cake_type == 'Anniversary')
                                        {
                                          $type_id = 1;
                                          if($cake_subtype == '25th Anniversary')
                                          {
                                            $subtype_id = 1;
                                            $target_dir.="anniversary/25-anniversary/";
                                          }
                                          else if($cake_subtype == '50th Anniversary')
                                          {
                                            $subtype_id = 2;
                                            $target_dir.="anniversary/50-anniversary/";
                                          }
                                          else if($cake_subtype == 'other')
                                          {
                                            $subtype_id = 8;
                                            $target_dir.="anniversary/other/";
                                          }
                                        }
                                        else if($cake_type == 'Birthday')
                                        {
                                          $type_id = 3;
                                          if($cake_subtype == '1st Birthday')
                                          {
                                            $subtype_id = 3;
                                            $target_dir.= "birthday/1-birthday/";
                                          }
                                          if($cake_subtype == '21st Birthday')
                                          {
                                            $subtype_id = 4;
                                            $target_dir.= "birthday/21-birthday/";
                                          }
                                          if($cake_subtype == '50th Birthday')
                                          {
                                            $subtype_id = 5;
                                            $target_dir.= "birthday/50-birthday/";
                                          }
                                          if($cake_subtype == 'football')
                                          {
                                            $subtype_id = 9;
                                            $target_dir.= "birthday/football/";
                                          }
                                          if($cake_subtype == 'Kids')
                                          {
                                            $subtype_id = 6;
                                            $target_dir.= "birthday/cartoon-birthday/";
                                          }
                                          if($cake_subtype == 'other')
                                          {
                                            $subtype_id = 7;
                                            $target_dir.= "birthday/other/";
                                          }
                                        }
                                        $location = $target_dir;
                                        $target_dir = "../../../".$target_dir;
                                        //////////////////////////////////////////////////////////////////////////////

                                        $query= "insert into cravings_test_cake_details(title, type_id, subtype_id, location) "
                                                ." values('$cake_title', $type_id, $subtype_id, '$location')";
                                        if($result = $conn->query($query))
                                        {
                                          //echo "<br>insert check";
                                          $cake_id = $conn->insert_id;
                                        }
                                        $imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
                                        $image_name = "$cake_id.$imageFileType";

                                        $query = "update cravings_test_cake_details set location = CONCAT(location, '$image_name') where cake_id=$cake_id";
                                        if($result = $conn->query($query))
                                        {
                                          //echo "<br>update check";
                                        }


                                        ////////////////////////////////////////////////////////////////////////////

                                        //echo "<br> basename: ".basename($_FILES["fileToUpload"]["name"])."<br>";
                                        $target_file = $target_dir . $image_name;
                                        $uploadOk = 1;
                                        // Check if image file is a actual image or fake image
                                        if(isset($_POST["submit"])) {
                                            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                            if($check !== false) {
                                                //echo "File is an image - " . $check["mime"] . ".";
                                                $uploadOk = 1;
                                            } else {
                                                echo "File is not an image.";
                                                $uploadOk = 0;
                                            }
                                        }
                                        // Check if file already exists
                                        if (file_exists($target_file)) {
                                            echo "Sorry, file already exists.";
                                            $uploadOk = 0;
                                        }
                                        // Check file size
                                        if ($_FILES["fileToUpload"]["size"] > 500000) {
                                            echo "Sorry, your file is too large.";
                                            $uploadOk = 0;
                                        }
                                        // Allow certain file formats
                                        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                                        && $imageFileType != "gif" ) {
                                            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                            $uploadOk = 0;
                                        }
                                        // Check if $uploadOk is set to 0 by an error
                                        if ($uploadOk == 0) {
                                            echo "Sorry, your file was not uploaded.";
                                        // if everything is ok, try to upload file
                                        } else {
                                            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                                //echo "<br>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."
                                                //."<br> location: ".$target_dir.$image_name;
                                                ?>
                                                <script type="text/javascript">
                                                    swal({
                                                        title : "Done!",
                                                        text : "File uploaded successfully",
                                                        type : "success"
                                                    },
                                                        function(){
                                                        window.location = "cakes_add.php";
                                                    });
                                                </script>
                                                <?php
                                            } else {
                                                echo "<br>Sorry, there was an error uploading your file.";
                                            }
                                        }
                                        ?>

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
        </script>
    </body>

</html>

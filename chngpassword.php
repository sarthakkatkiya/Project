<?php include 'conn.php';
include 'session.php'; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Form Elements | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <?php
        include 'header.php';
        include 'menu.php';
        ?>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Change Password</h4>
                                <div class="page-title-right">
                                    <a href="dashbord.php"> <button type="button" class="btn btn-primary waves-effect waves-light">Back</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <?php
                    if (isset($_POST["btnsub"])) {
                        $newpswd = $_POST["newpswd"];
                        $oldpswd = $_POST["oldpswd"];
                        $confirmpswd = $_POST["confirmpswd"];
                        $adminid = $_SESSION["adminid"];

                        $data = mysqli_query($conn, "select * from admin where id = $adminid ") or die(mysqli_error($conn));
                        $row = mysqli_num_rows($data);
                        $password =  mysqli_fetch_assoc($data);

                        if ($row >= 1) {

                            if ($password["password"] == $oldpswd && $confirmpswd == $newpswd) {
                                $result = mysqli_query($conn, "UPDATE  admin SET password = '$newpswd' where id = '$adminid' ")
                                    or die(mysqli_error($conn));

                                echo '<div class="alert alert-primary" role="alert">
                                        password changed successfully...!
                                    </div>';
                            } else {

                                echo '<div class="alert alert-danger" role="alert">
                                     Error!
                                    </div>';
                            }
                        } else {

                            echo '<div class="alert alert-danger" role="alert">
                                    Error!
                                </div>';
                        }
                    }
                    ?>

                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-9">
                            <div class="card">
                                <form action="" method="post">
                                    <div class="card-body">
                                        <h4 class="card-title"> </h4>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Old Password </label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" value="" id="oldpswd" name="oldpswd" placeholder="enter your old password here!">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">New Password </label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" value="" id="newpswd" name="newpswd" placeholder="enter your new password !">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Confirm Password </label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="password" value="" id="confirmpswd" name="confirmpswd" placeholder="confirm your new password !">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">

                                            <div class="col-md-10">
                                                <button type="submit" name="btnsub" class="btn btn-primary waves-effect waves-light">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            <?php
            include 'footer.php'
            ?>
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center px-3 py-4">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>
            <!-- Settings -->
            <hr class="mt-0" />
            <h6 class="text-center mb-0">Choose Layouts</h6>
            <div class="p-4">
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-1.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                    <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                </div>
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-2.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch">
                    <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                </div>
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-3.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-3">
                    <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch">
                    <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                </div>
                <div class="mb-2">
                    <img src="assets/images/layouts/layout-4.jpg" class="img-thumbnail" alt="layout images">
                </div>
                <div class="form-check form-switch mb-5">
                    <input class="form-check-input theme-choice" type="checkbox" id="dark-rtl-mode-switch">
                    <label class="form-check-label" for="dark-rtl-mode-switch">Dark RTL Mode</label>
                </div>
            </div>
        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->
    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <script src="assets/js/app.js"></script>

</body>
</html>
<?php
include 'conn.php';
include 'session.php';


// $sql = "DELETE FROM `order` WHERE `order_id` = $id";
// $result = mysqli_query($conn,$sql);
// header("Location: http://demo1.com/order.php");
?>

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
        <!-- Left Sidebar End -->
        <?php
        include 'header.php';
        include 'menu.php' ?>
        <!-- Start right Content here -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 ">Cancel order</h4>

                                <div class="page-title-right">
                                    <a href="order.php"> <button type="button" class="btn btn-primary waves-effect waves-light">Back</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php

                    $id = $_GET['order'];
                    $result = mysqli_query($conn, "SELECT * FROM `order` WHERE `order_id` = $id") or die(mysqli_error($conn));
                    $row = mysqli_fetch_assoc($result);

                    if (isset($_POST['cancel'])) {
                        $reason = $_POST['cancelreason'];
                        $cancel = 'cancel';
                        
                        $result = mysqli_query($conn, "UPDATE `order` SET `order_status` = '$cancel', `cancel_reason` = '$reason' WHERE `order`.`order_id` = $id") or die(mysqli_error($conn));
                        ?>
                        
                        <script> window.location = 'order.php' </script>
                    <?php
                    }
                    ?>


                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-7">
                            <div class="card">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <div class="row">
                                            <label for="example-text-input" class="col-form-label font-size-18">Order <?php echo "#SK25".$row['order_id'] ?></label>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="example-text-input" class="col-form-label font-size-15">Billing Details</label>
                                                </div>
                                                <p class="mb-2">Billing Name: <span class="text-primary"><?php echo $row["billing_name"]; ?></span></p>
                                                <p class="mb-2">Order Date: <span class="text-primary"><?php echo $row["order_date"]; ?></span></p>
                                                <p class="mb-2">Contact No.: <span class="text-primary"><?php echo $row["phone"]; ?></span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <label for="example-text-input" class="col-form-label font-size-15">Shiping Details</label>
                                                </div>
                                                <p class="mb-1   fw-bold" >Address:</p>
                                                <p class="mb-1"><?php echo $row["billing_name"]; ?></p>
                                                <p class="col-md-4 mb-2"><?php echo $row["user_add"]; ?></p>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                                <div class="row">
                                                    <label for="example-text-input" class="col-form-label font-size-15">Payment Details</label>
                                                </div>
                                                <p class="mb-2">Total Amt: <span class="text-primary"><?php echo $row["total"]; ?></span></p>
                                                <p class="mb-2">Payment Status <span class="text-primary"><?php echo $row["pay_status"]; ?></span></p>
                                                <p class="mb-2">Payment Method: <span class="text-primary"><?php echo $row["pay_method"]; ?></span></p>
                                            </div>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Reason</label>
                                            <div class="col-md-4">
                                            <textarea class="form-control" id="" rows="3" name="cancelreason"></textarea>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">

                                            <div class="col-md-10">
                                                <button type="submit" name="cancel" id="cancel" class="btn btn-primary waves-effect waves-light">Cancel</button>
                                            </div>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->


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
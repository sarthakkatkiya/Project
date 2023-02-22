<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("conn.php");
include("session.php");
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

            
          <?php
          include "header.php";
          include "menu.php";
          ?>

                      

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
                                    <h4 class="mb-sm-0 font-size-18">Form Elements</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Elements</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->


                        <?php
                            if(isset($_POST['placeorder'])){
                                $username = $_POST["username"];
                                $product_name = $_POST['product_name'];
                                $phone = $_POST['phone'];
                                $date = $_POST['date'];
                                $total = $_POST['total'];
                                $p_status = $_POST['p_status'];
                                $p_method = $_POST['p_method'];
                                $p_via = $_POST['p_via'];
                                $address = $_POST['address'];
                                $order_status = $_POST['order_status'];
                                $reason = $_POST['cancelreason'];

                                $result = mysqli_query($conn, "INSERT INTO `order`(`billing_name`, `product_name`, `phone`, `order_date`, `total`, `pay_status`, `pay_method`,`pay_via`, `user_add`, `order_status`, `cancel_reason`) VALUES 
                                ('$username','$product_name','$phone','$date','$total','$p_status','$p_method','$p_via','$address','$order_status', '$reason')") or die(mysqli_error($conn));

                                    if($result==true){
                                        echo "Data inserted successfully...!";
                                    }
                                    else{
                                        echo "Data not inserted...!";   
                                    }       
                            }
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card-body">

                                        <h4 class="card-title">Textual inputs</h4>  

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="username" name="username">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">product name</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="product_name" name="product_name">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-tel-input" class="col-md-2 col-form-label">Telephone</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="tel" value="" placeholder="" id="phone" name="phone">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-date-input" class="col-md-2 col-form-label">Date</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="date" value="" id="date" name="date">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Total</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="total" name="total">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">payment status</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="p_status" name="p_status">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Payment method</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="p_method" name="p_method">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Payment via</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="p_via" name="p_via">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">Address</label>
                                            <div class="col-md-10">
                                                <input class="form-control" type="text" value="" id="address" name="address">
                                            </div>
                                        </div>
                                        <div>
                                                <input class="form-control" type="hidden" value="pending" id="order_status" name="order_status">
                                        </div>
                                        <div>
                                                <input class="form-control" type="hidden" value="null" id="cancelreason" name="cancelreason">
                                        </div>
                                        <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light " type="submit" name="placeorder" id="btn">Place order
                                        </button>
                                    </div>
                                </form>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                <?php include "footer.php";?>
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


<!-- Mirrored from themesbrand.com/skote/layouts/form-elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Jul 2022 08:34:15 GMT -->
</html>

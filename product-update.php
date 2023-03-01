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
                                <h4 class="mb-sm-0 font-size-18">Update product</h4>

                                <div class="page-title-right">
                                    <a href="product.php"> <button type="button"
                                            class="btn btn-primary waves-effect waves-light">Back</button></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <?php

                        $id = $_GET['update'];
                        $result = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_id` = $id") or die(mysqli_error($conn));
                        $row = mysqli_fetch_assoc($result);
                        
                        if(isset($_POST['update'])){        
                            $product_name = $_POST['productname'];
                            $product_price = $_POST['productprice'];
                            $ext = pathinfo($_FILES["productimage"]["name"],PATHINFO_EXTENSION);
                            $filename = rand(1111,9999).time().".".$ext;
                            move_uploaded_file($_FILES["productimage"]["tmp_name"],"assets/uploads/product/". $filename);
                            

                            if($_FILES['productimage']['name'] != ""){
                                if ($_FILES["productimage"]["error"] > 0){
                                    echo $_FILES["fileToUpload"]["error"] . "<br>";
                                }
                                else{
                                    unlink("assets/uploads/product/".$row['product_image']);
                                    $sql = "UPDATE `product` SET `product_name` = '$product_name' , `product_image` = '$filename' , `price` = '$product_price'  WHERE `product`.`product_id` = $id";
                                    $result = mysqli_query($conn,$sql);
                                    echo '<script> window.location.href = "http://demo1.com/product.php" </script>';
                                }
                            }
                            else{
                                $sql = "UPDATE `product` SET `product_name` = '$product_name' , `price` = '$product_price'  WHERE `product`.`product_id` = $id";
                                    $result = mysqli_query($conn,$sql);
                                    echo '<script> window.location.href = "http://demo1.com/product.php" </script>';
                            }
                            if ($result == true) {
                                echo '<div class="alert alert-primary" role="alert">
                                    product Updated!
                                    </div>'; 
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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">product
                                                name</label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" id="productname"
                                                    name="productname"  value="<?php echo $row['product_name']?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-2 col-form-label">product
                                                image</label>
                                                <!-- <?php echo $row['product_image']?>  -->
                                            <div class="col-md-4">
                                                <input class="form-control" type="file" name="productimage"
                                                    id="productimage">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input"
                                                class="col-md-2 col-form-label">price</label>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" id="productprice"
                                                    name="productprice"  value="<?php echo $row['price']?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-md-10">
                                                <button type="submit" name="update" id="update" class="btn btn-primary waves-effect waves-light">Update</button>
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
<?php include 'session.php';
include 'conn.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); ?>
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Data Tables | Skote - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <style>
        #datatable-buttons img {
            height: 100px;
            width: 100px;
        }
    </style>

</head>

<body data-sidebar="dark">
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
    <!-- Begin page -->
    <div id="layout-wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <?php
        include 'header.php';
        include 'menu.php' ?>
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4 h4 card-title">Latest Transaction</div>
                                    <div class="mb-2 row">
                                        <!-- <div class="col-md-1">
                                            <select class="form-select">
                                                <option value="10">Show 10</option>
                                                <option value="20">Show 20</option>
                                                <option value="30">Show 30</option>
                                                <option value="40">Show 40</option>
                                                <option value="50">Show 50</option>
                                            </select>
                                        </div> -->
                                    </div>
                                    <div class="table-responsive react-table">
                                        <table role="table" class="table table-bordered table-hover">
                                            <thead class="table-light table-nowrap">
                                                <tr role="row">
                                                    <th>
                                                        <div class="mb-2">#</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Order ID</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Billing Name</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Date</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Total</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Payment Status</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">Payment Method</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                    <th>
                                                        <div class="mb-2" title="Toggle SortBy" style="cursor: pointer;">View Details</div>
                                                        <div style="margin-top: 5px;"></div>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody role="rowgroup">

                                                <?php

                                                $data = mysqli_query($conn, "SELECT * FROM `order`") or die(mysqli_error($conn));

                                                $count = 1;
                                                $revenue = 0;
                                                $average = 0;
                                                while ($row = mysqli_fetch_assoc($data)) {

                                                ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check font-size-16">
                                                                <input class="form-check-input" type="checkbox" id="orderidcheck09">
                                                                <label class="form-check-label" for="orderidcheck09"></label>
                                                            </div>
                                                        </td>
                                                        <td><a href="javascript: void(0);" class="text-body fw-bold"><?php echo "#SK25" . $row['order_id'] ?></a>
                                                        </td>
                                                        <td><?php echo $row["billing_name"]; ?></td>
                                                        <!-- <td><?php echo $row["phone"]; ?></td> -->
                                                        <td><?php echo $row["order_date"]; ?></td>
                                                        <td><?php echo "₹" . $row["total"]; ?></td>
                                                        <td><?php echo $row["pay_status"]; ?></td>
                                                        <td><?php echo $row["pay_method"]; ?></td>
                                                        <td role="cell">
                                                            <a href="payment-slip.php?pay-slip=<?php echo $row['order_id']; ?>">
                                                                <button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button>
                                                            </a>
                                                        </td>

                                                    </tr>
                                                <?php
                                                    $totalorder = $count;
                                                    $count++;
                                                    $revenue += $row["total"];
                                                    $ave = $revenue / $totalorder;
                                                    $average = (int)$ave;
                                                    $_SESSION['revenue'] = $revenue;
                                                    $_SESSION['average'] = $average;
                                                }
                                                ?>

                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="justify-content-md-end justify-content-center align-items-center row">
                                        <div class="col-md-auto col">
                                            <div class="d-flex gap-1"><button type="button" disabled="" class="btn btn-primary disabled">&lt;&lt;</button><button type="button" disabled="" class="btn btn-primary disabled">&lt;</button></div>
                                        </div>
                                        <div class="col-md-auto d-none d-md-block col">Page <strong>1 of 1</strong></div>
                                        <div class="col-md-auto col"><input min="1" max="1" type="number" class="form-control" value="1" style="width: 70px;"></div>
                                        <div class="col-md-auto col">
                                            <div class="d-flex gap-1"><button type="button" disabled="" class="btn btn-primary disabled">&gt;</button><button type="button" disabled="" class="btn btn-primary disabled">&gt;&gt;</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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

                    <!-- Required datatable js -->
                    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
                    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
                    <!-- Buttons examples -->
                    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
                    <script src="assets/libs/jszip/jszip.min.js"></script>
                    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
                    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
                    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

                    <!-- Responsive examples -->
                    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
                    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

                    <!-- Datatable init js -->
                    <script src="assets/js/pages/datatables.init.js"></script>

                    <script src="assets/js/app.js"></script>
</body>
</html>
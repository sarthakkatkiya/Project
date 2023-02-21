<?php include("conn.php");
session_start() ?>
<!doctype html>
<html lang="en">



<head>

    <meta charset="utf-8" />
    <title>Login | Skote - Admin & Dashboard Template</title>
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

<body>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4 h4 card-title">Latest Transaction</div>
                    <div class="mb-2 row">
                        <div class="col-md-1"><select class="form-select">
                                <option value="10">Show 10</option>
                                <option value="20">Show 20</option>
                                <option value="30">Show 30</option>
                                <option value="40">Show 40</option>
                                <option value="50">Show 50</option>
                            </select></div>
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
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2540</a></td>
                                    <td role="cell">Neal Matthews</td>
                                    <td role="cell">07 Oct, 2019</td>
                                    <td role="cell">$400</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-success badge bg-secondary">Paid</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-mastercard me-1"></i> Mastercard</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2541</a></td>
                                    <td role="cell">Jamal Burnett</td>
                                    <td role="cell">07 Oct, 2019</td>
                                    <td role="cell">$380</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-danger badge bg-secondary">Chargeback</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-visa me-1"></i> Visa</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2542</a></td>
                                    <td role="cell">Juan Mitchell</td>
                                    <td role="cell">06 Oct, 2019</td>
                                    <td role="cell">$384</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-success badge bg-secondary">Paid</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-paypal me-1"></i> Paypal</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2543</a></td>
                                    <td role="cell">Barry Dick</td>
                                    <td role="cell">05 Oct, 2019</td>
                                    <td role="cell">$412</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-success badge bg-secondary">Paid</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-mastercard me-1"></i> Mastercard</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2544</a></td>
                                    <td role="cell">Ronald Taylor</td>
                                    <td role="cell">04 Oct, 2019</td>
                                    <td role="cell">$404</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-warning badge bg-secondary">Refund</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-visa me-1"></i> Visa</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
                                <tr>
                                    <td role="cell"><input type="checkbox" class="form-check-input"></td>
                                    <td role="cell"><a class="text-body fw-bold" href="/dashboard">#SK2545</a></td>
                                    <td role="cell">Jacob Hunter</td>
                                    <td role="cell">04 Oct, 2019</td>
                                    <td role="cell">$392</td>
                                    <td role="cell"><span class="font-size-11 badge-soft-success badge bg-secondary">Paid</span></td>
                                    <td role="cell"><span><i class="fab fa-cc-paypal me-1"></i> Paypal</span></td>
                                    <td role="cell"><button type="button" class="btn-sm btn-rounded btn btn-primary">View Details</button></td>
                                </tr>
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

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


</html>
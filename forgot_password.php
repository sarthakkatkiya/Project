<?php include 'conn.php'; ?>


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
    <!-- Toaster -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

</head>
<body>
    <div class="account-pages my-5 pt-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary bg-soft">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue to Skote.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="auth-logo">
                                <a href="index.html" class="auth-logo-light">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>

                                <a href="index.html" class="auth-logo-dark">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">
                                <form class="form-horizontal" action="" id="forgotForm" method="post">
                                    <input type="hidden" name="action" value="forgotForm" />
                                    <div class="mb-3">
                                        <label for="username" class="form-label">Register email</label>
                                        <input type="email" class="form-control name" id="email" name="email" placeholder="Enter email id" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="text" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" id="password" name="password" required>
                                            <!-- <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button> -->
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="input-group auth-pass-inputgroup">
                                            <input type="password" class="form-control" placeholder="Confirm Your password" aria-label="Password" aria-describedby="password-addon" id="confpassword" name="confpassword" required>
                                            <button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                        </div>
                                    </div>
                                    <div class="mt-3 d-grid">
                                        <button class="btn btn-primary waves-effect waves-light " type="submit" name="submit" id="forgotpass">submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="mt-5 text-center">

                        <div>
                            <p>You have an already account ? <a href="login.html" class="fw-medium text-primary">
                                    Signin Here </a> </p>
                            <p>©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script> Skote. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
    <script>      
            function displayToaster() {
                toastr.options = {
                    "positionClass": "toast-top-center",
                    "closeButton": true,
                    "newestOnTop": true,
                    "progressBar": true,
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "100",
                    "hideDuration": "1000",
                    "timeOut": "5000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "showMethod": "show",
                };
            }

        $(document).ready(function() {
            $("#forgotpass").click(function(e) {
                e.preventDefault(); // prevent the default form submission
                var email = $("#email").val();
                var password = $("#password").val();
                var confpassword = $("#confpassword").val();
                var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;

                if (email == '' || email == null) {
                    displayToaster();
                    toastr.error('Enter Your Email!');
                    return false;
                } else if (!pattern.test(email)) {
                    displayToaster();
                    toastr.error('Enter a valid email address!');
                    return false;
                } else if (password == '' || password == null) {
                    displayToaster();
                    toastr.error('Enter Your Password!');
                    return false;
                } else if (confpassword == '' || confpassword == null) {
                    displayToaster();
                    toastr.error('confirm your password!');
                    return false;
                } else if (password != confpassword) {
                    displayToaster();
                    toastr.error('Those passwords didn’t match. Try again!');
                    return false;
                } else {
                    displayToaster();
                    toastr.success('Password updated successfully...');
                }

                var values = $("#forgotForm").serialize();
                console.log(values);

                $.ajax({
                    url: "submit.php",
                    type: "post",
                    data: values,
                    success: function(response) {
                        console.log(response); // log the response from the server
                        // redirect to the login page on successful registration
                        window.location.href = "http://demo1.com/login.php";
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
</body>
</html>

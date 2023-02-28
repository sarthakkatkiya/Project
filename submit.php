<?php
include 'conn.php';
include 'session.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ------------------------REGISTERATION------------------------
if (isset($_POST['action']) && $_POST['action'] == 'registerForm') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpassword'];
    $result = mysqli_query($conn, "INSERT INTO admin (username,password,email) VALUES ('$username','$password','$email')") or die(mysqli_error($conn));
    echo "Registration successful!";
    if (!$result) {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
// --------------------------ORDERPAGE---------------------------
else if (isset($_POST['action']) && $_POST['action'] == 'orderForm') {
    $id = $_POST['id'];
    $value = $_POST['val'];
    $result = mysqli_query($conn, "UPDATE `order` SET `order_status` = '$value' WHERE `order`.`order_id` = $id");
}
// ----------------------------LOGIN-----------------------------
else if (isset($_POST['action']) && $_POST['action'] == 'loginForm') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `admin` where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    if ($row == 0) {
        echo json_encode($row);
    } else {
        echo json_encode($row);
    }
}
// ----------------------------FORGOT PASSWORD----------------------------------
else if (isset($_POST['action']) && $_POST['action'] == 'forgotForm') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpassword'];
    $result = mysqli_query($conn, "UPDATE `admin` SET `password` = '$password' WHERE `admin`.`email` = '$email';") or die(mysqli_error($conn));
    echo "Password update successfully!";
    if (!$result) {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
// ------------------------------ADD PRODUCT-------------------------------------
else if (isset($_POST['action']) && $_POST['action'] == 'addproduct') {

    $productname = $_POST["pname"];

    $ext = pathinfo($_FILES["pimage"]["name"], PATHINFO_EXTENSION);
    $filename = rand(1111, 9999) . time() . "." . $ext;
    move_uploaded_file($_FILES["pimage"]["tmp_name"], "assets/uploads/product/" . $filename);

    $productprice = $_POST["price"];

    $result = mysqli_query($conn, "INSERT INTO product (product_name,product_image, price ) 
        VALUE ('$productname','$filename','$productprice' )") or die(mysqli_error($conn));

    return 0;
}

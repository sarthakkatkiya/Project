<?php
include 'conn.php';
include 'session.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ------------------------REGISTERATION------------------------
if (isset($_POST['action']) && $_POST['action'] == 'registerForm') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['confpassword'];
    $result = mysqli_query($conn, "INSERT INTO admin (username,password) VALUES ('$username','$password')") or die(mysqli_error($conn));
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
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    
    
    if($row == 0){
        echo json_encode($row);                        

    }
    else {
        echo json_encode($row);

    }
}
?>








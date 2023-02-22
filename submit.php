<?php
include 'conn.php';
echo 'asasa';
print_r($_POST);
$id = $_POST['id'];
$value = $_POST['val'];
$result = mysqli_query($conn,"UPDATE `order` SET `order_status` = '$value' WHERE `order`.`order_id` = $id");
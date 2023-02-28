<?php
include 'conn.php';
$id = $_GET['delete'];
$sql1 = mysqli_query($conn,"select * from `product` WHERE `product_id` = $id");
$row = mysqli_fetch_assoc($sql1);

unlink("assets/uploads/product/".$row['product_image']);

$sql = "DELETE FROM `product` WHERE `product_id` = $id";
$result = mysqli_query($conn,$sql);
header("Location: http://demo1.com/product.php");
?>
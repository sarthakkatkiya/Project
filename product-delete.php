<?php
include 'conn.php';
$id = $_GET['delete'];
$sql = "DELETE FROM `product` WHERE `product_id` = $id";
$result = mysqli_query($conn,$sql);
header("Location: http://demo1.com/product.php");
?>
<?php 
include 'koneksi.php';
$category = $_POST['category'];
$name = $_POST['name'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "INSERT INTO item (category_id, nama, price, status) VALUES ('$category','$name', '$price', '$status')";
$result=mysqli_query($konek, $sql);
header('location:index.php');
 ?>
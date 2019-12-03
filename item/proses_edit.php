<?php 
include 'koneksi.php';
$ID = $_POST['id'];
$category = $_POST['category'];
$nama = $_POST['name'];
$price = $_POST['price'];
$status = $_POST['status'];

$sql = "UPDATE item SET category_id='$category', nama = '$nama', price='$price', status='$status' WHERE id = '$ID'";
mysqli_query($konek, $sql);
header('location:index.php');
 ?>

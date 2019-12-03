<?php 
include 'koneksi.php';
$category = $_POST['category1'];

$sql = "INSERT INTO category (nama_category) values ('$category')";
mysqli_query($konek, $sql);
header('location:index.php');
 ?>
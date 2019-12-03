<?php 
include 'koneksi.php';
$ID = $_POST['id'];
$nama = $_POST['name'];

$sql = "UPDATE category SET nama_category = '$nama' WHERE id = '$ID'";
mysqli_query($konek, $sql);
header('location:index.php');
 ?>
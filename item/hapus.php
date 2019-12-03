<?php 
include 'koneksi.php';
$ID = $_GET['id'];

$sql = "DELETE FROM item WHERE id = '$ID'";

mysqli_query($konek, $sql);
header('location:index.php');
 ?>
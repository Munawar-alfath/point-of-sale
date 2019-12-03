<?php 
include 'koneksi.php';
$ID = $_GET['id'];

$sql = "DELETE FROM category WHERE id = '$ID'";

mysqli_query($konek, $sql);
header('location:index.php');
 ?>
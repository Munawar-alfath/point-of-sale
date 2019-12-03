<?php 
include 'koneksi.php';
$table_number = $_POST['table_number'];
$item = $_POST['item_id'];
$qty = $_POST['qty'];

$sql= "SELECT * FROM item WHERE id=".$item;
$rest= mysqli_query($konek, $sql);
$row= mysqli_fetch_assoc($rest);
$total= $qty*$row['price'];

$tambah= "INSERT INTO ordeer (table_number, item_id, qty, total) VALUES('$table_number', '$item', '$qty', '$total')";
mysqli_query($konek, $tambah);
header("location:index.php");
 ?>
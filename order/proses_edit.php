<?php 
include 'koneksi.php';
$ID = $_POST['id'];
$idtable = $_POST['table_number'];
$item = $_POST['item_id'];
$qty = $_POST['qty'];
$sql= "SELECT * FROM item WHERE id=".$item;
$rest= mysqli_query($konek, $sql);
$row= mysqli_fetch_assoc($rest);
$total= $qty*$row['price'];


$sql = "UPDATE ordeer SET table_number= '$idtable', item_id= '$item', qty='$qty', total='$total' WHERE id = '$ID'";
mysqli_query($konek, $sql);
header('location:index.php');
 ?>
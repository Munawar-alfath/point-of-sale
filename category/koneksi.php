<?php 
$server ="localhost";
$usr ="root";
$pass ="1";
$dbname ="point_of_sale";

$konek = mysqli_connect($server, $usr, $pass, $dbname);

if (!$konek) {
	die("koneksi gagal".mysqli_connection_error());
}

$sql = "CREATE TABLE category (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
nama_category VARCHAR(20) NOT NULL
)";

mysqli_query($konek, $sql);
 ?>

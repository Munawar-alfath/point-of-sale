<?php 
$server ="localhost";
$usr ="root";
$pass ="1";
$dbname ="point_of_sale";

$konek = mysqli_connect($server, $usr, $pass, $dbname);

if (!$konek) {
	die("koneksi gagal".mysqli_connection_error());
}

$sql = "CREATE TABLE item (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
category_id INT NOT NULL,
nama VARCHAR(100) NOT NULL,
price INT NOT NULL,
status BOOLEAN NOT NULL,
foreign key(category_id) references category(id) 
)";

mysqli_query($konek, $sql);
 ?>

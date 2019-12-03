<?php 
$server ="localhost";
$usr ="root";
$pass ="1";
$dbname ="point_of_sale";

$konek = mysqli_connect($server, $usr, $pass, $dbname);

if (!$konek) {
	die("koneksi gagal".mysqli_connection_error());
}

$sql = "CREATE TABLE ordeer (
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
table_number VARCHAR(20) NOT NULL,
item_id INT NOT NULL,
qty INT NOT NULL,
total INT NOT NULL,
FOREIGN KEY(item_id) REFERENCES item(id)
)";

mysqli_query($konek, $sql);
 ?>

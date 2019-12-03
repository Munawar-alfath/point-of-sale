<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php 
		include 'koneksi.php';
		$ID = $_GET['id'];
		$sql = "SELECT * FROM category WHERE id='$ID'";
		$result = mysqli_query($konek, $sql);
		$row = mysqli_fetch_assoc($result);
	 ?>

	 <form action="proses_edit.php" method="POST">
	 	<input type="hidden" name="id" value="<?php echo $ID;?>">
	 	<table class="tambah">
	 		<tr>
	 			<td>Category</td>
	 			<td>:</td>
	 			<td>
	 				<input type="text" name="name" value="<?php echo $row['nama_category']; ?>">
	 			</td>
	 			<td>
	 				<input type="submit">
	 			</td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>
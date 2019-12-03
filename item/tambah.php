<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<?php 
	 ?>
	 <form action="proses_tambah.php" method="POST">
	 	<table class="tambah">
	 		<tr>
	 			<td>Category</td>
	 			<td>:</td>
	 			<td><select name="category">
	 				<?php 
	 					include 'koneksi.php';
	 					$sql="SELECT * FROM category";
	 					$result=mysqli_query($konek, $sql);
	 					while ($row =mysqli_fetch_assoc($result)) {
	 					
	 					
	 				 ?>
	 				 <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_category']; ?></option>
	 				 <?php 
	 				 	}
	 				  ?>
	 			</select></td>
	 			<td>Name</td>
	 			<td>:</td>
	 			<td><input type="text" name="name" ></td>
	 			<td>Price</td>
	 			<td>:</td>
	 			<td><input type="number" name="price" ></td>
	 			<td>Satus</td>
	 			<td>:</td>
	 			<td><select name="status">
	 				<option value="1">Aktif</option>
	 				<option value="0">Tidak Aktif</option>
	 			</select></td>
	 		</tr>
	 		<tr>
	 			<td colspan="3">
	 				<label>
	 					<input type="submit">
	 				</label>
	 			</td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>
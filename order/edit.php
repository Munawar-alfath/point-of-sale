<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php 
		include 'koneksi.php';
		$id=$_GET['id'];
		$sql="SELECT * FROM ordeer WHERE id='$id'";
		$result=mysqli_query($konek, $sql);
		$row=mysqli_fetch_assoc($result);
	 ?>
	 <form action="proses_edit.php" method="POST">
	 	<input type="hidden" name="id" value="<?php echo $id;?>">
	 	<table class="tambah">
	 		<tr>
	 			<td>Table Number</td>
	 			<td>:</td>
	 			<td><input type="text" name="table_number" value="<?= $row['table_number']; ?>"></td>
	 		</tr>
	 		<tr>
	 			<td>Item</td>
	 			<td>:</td>
	 			<td>
	 				<select name="item_id">
	 					<?php 
	 						$sql1= "SELECT * FROM item";
	 						$res1= mysqli_query($konek, $sql1);
	 						while ($row1= mysqli_fetch_assoc($res1)) {?>
								<option value="<?= $row1['id']; ?>">
									<?= $row1['nama']; ?>
								</option>
	 					<?php	} ?>
	 				</select>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td>Qty</td>
	 			<td>:</td>
	 			<td>
	 				<input type="number" name="qty" value="<?= $row['qty'];?>">
	 			</td>
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
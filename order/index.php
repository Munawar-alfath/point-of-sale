<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table {border-collapse: collapse;}
		th, td {
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<a href="tambah.php">Tambah Data</a>
	<table>
		<tr>
			<th>No</th>
			<th>Table</th>
			<th>Item</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Diskon</th>
			<th>After Diskon</th>
			<th>Action</th>
		</tr>
	<?php 
	include 'koneksi.php';
	function item($ID, $konek) {
				$sql= "SELECT * FROM item WHERE id=".$ID;
				$result= mysqli_query($konek, $sql);
				$rowz= mysqli_fetch_assoc($result);
				return $rowz['nama'];
			}

			$nomor  = 1;
			$sql = "SELECT * FROM ordeer";
			$result = mysqli_query($konek,$sql);	
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
							<td><?= $nomor++ ?></td>
							<td><?= $row['table_number'] ?></td>
							<td><?= item($row['item_id'],$konek) ?></td>
							<td><?= $row['qty'] ?></td>
							<td><?= $row['total'] ?></td>
							<td><?= ($row['total'] > 100000)?"20%":"-" ?></td>
							<td><?= diskon($row['total']); ?></td>
							<td>
								<a href='edit.php?id= <?= $row['id']; ?>' >edit</a>
								<a href='hapus.php?id= <?= $row['id']; ?>' onclick='javascript:return confirm("apakah anda ingin menghapus file ini?");'>delete</a>
							</td>
						<?php

				}
			}
				function diskon($x)
				{
					$dc=$x*20/100;
					$disc=$x-$dc;
					return $disc;
				}

	 ?>
	 </table>
</body>
</html>
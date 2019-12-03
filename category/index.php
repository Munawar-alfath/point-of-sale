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
			<th>Category</th>
			<th>Action</th>
		</tr>
	<?php 
			include 'koneksi.php';
			$nomor  = 1;
			$sql = "SELECT * FROM category";
			$result = mysqli_query($konek, $sql);	

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>
							<td>".$nomor++."</td>
							<td>".$row['nama_category']."</td>
							<td>
								<a href='edit.php?id=".$row['id']."'>edit</a>
								<a href='hapus.php?id=".$row['id']."' onclick='javascript:return confirm(\"apakah anda ingin menghapus file ini?\")'>delete</a>
							</td>
						";
				}
			}


	 ?>
	 </table>
</body>
</html>
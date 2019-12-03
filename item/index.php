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
			<th>Name</th>
			<th>Price</th>
			<th>Status</th>
			<th>Action</th>
		</tr>
	<?php 
			include 'koneksi.php';
			$nomor  = 1;
			$sql = "SELECT * FROM item";
			$result = mysqli_query($konek, $sql);	

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>
							<td>".$nomor++."</td>
							<td>".kategori($row['category_id'],$konek)."</td>
							<td>".$row['nama']."</td>
							<td>".$row['price']."</td>
							<td>".(($row['status'])?"Aktif":"Tidak Aktif")."</td>
							<td>
								<a href='edit.php?id=".$row['id']."'>edit</a>
								<a href='hapus.php?id=".$row['id']."' onclick='javascript:return confirm(\"apakah anda ingin menghapus file ini?\")'>delete</a>
							</td>
						";
				}
			}

			function kategori($ID, $konek) {
				$sql= "SELECT * FROM category WHERE id=".$ID;
				$result= mysqli_query($konek, $sql);
				$rowz= mysqli_fetch_assoc($result);
				return $rowz['nama_category'];
			}
		 ?>
	 </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
</head>
<body>
	<?php 
	 ?>
	 <form action="proses_edit.php" method="POST">
	 	<?php 
	 			include 'koneksi.php';
	 			$id=$_GET['id'];
				$sql="SELECT * FROM item WHERE id=".$id;
				$result=mysqli_query($konek, $sql);
				$rows =mysqli_fetch_assoc($result);
	 	 ?>	
	 	<table class="tambah">
	 		<input type="hidden" name="id" value="<?php echo $id; ?>">
	 		<tr>
	 			<td>Category</td>
	 			<td>:</td>
	 			<td><select name="category" id="">
	 				<?php 
	 					$sql="SELECT * FROM category";
	 					$result=mysqli_query($konek, $sql);
	 					while ($row =mysqli_fetch_assoc($result)) {
	 					
	 				if ($row['id'] == $rows['category_id']) {?>
						<option selected value="<?php echo $row['id']; ?>"><?php echo $row['nama_category']; ?></option>
	 				<?php }else {
	 					?> <option value="<?php echo $row['id']; ?>"><?php echo $row['nama_category']; ?></option>
	 					<?php }}?>
	 			</select></td>
	 			<td>Name</td>
	 			<td>:</td>
	 			<td><input type="text" name="name" value="<?php echo $rows['nama']; ?>"></td>
	 			<td>Price</td>
	 			<td>:</td>
	 			<td><input type="number" name="price" value="<?php echo $rows['price'] ?>"></td>
	 			<td>Satus</td>
	 			<td>:</td>
	 			<td>
	 				<select  name="status">
	 				 <?php 
	 				 function s1($val){
	 				  if ($val == 1) { 
	 				  	$w= 0;
	 				  }else{
	 				  $w = 1;
	 				  }
	 				  return $w; }

	 				  function s2($nme){
	 				  if ($nme == 1){
	 				  	return "tidak aktif";
	 				  }elseif ($nme == 0) {
	 				  	 return "aktif";
	 				  	  } } 

	 				  function st($status){
	 				  if ($status == 1) { 
	 				  	return "aktif"; 
	 				  }else{ 
	 				  	return "tidak aktif";
	 				  	 } } ?>
	 				  	  <option value="<?= $rows['satus'] ;?>"><?= st($rows['status']) ;?></option>
	 				  	 <option value="<?php echo s1($rows['status']); ?>"><?= s2($rows['status']); ?></option>
	 				  	</select>
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
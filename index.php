<?php
include_once("config.php");

$results = mysqli_query($mysqli, "SELECT * FROM users");



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar CRUD</title>
</head>
<body>

<a href="add.php">Tambah Data</a><br><br>

	<table border="1" width="100%">
<thead>		
<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
</thead>
<tbody>

<?php 
while($res = mysqli_fetch_array($results)) { ?>
<tr>
<td><?php echo $res['id'] ?></td>
<td><?php echo $res['nama'] ?></td>
<td><?php echo $res['email'] ?></td>
<td><?php echo $res['alamat'] ?></td>
<td>
<a onclick="return confirm('Delete data?')" href="delete.php?id=<?php echo $res['id'] ?>">Delete</a>
<a href="edit.php?id=<?php echo $res['id'] ?>">Edit</a>
</td>
</tr>

	<?php } ?>

</tbody>
	</table>
</body>
</html>

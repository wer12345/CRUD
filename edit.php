<?php

include_once("config.php");

$id = $_GET['id'];

$query = mysqli_query($mysqli, "SELECT * FROM users
                                  WHERE id='$id'");

$results = mysqli_fetch_assoc($query);

?>

<form action="proses_update.php" method="POST">
<input type="hidden" value="<?php echo $results['id'] ?>" name="id">

  <label for="nama">nama</label>
  <input type="text" name="nama" value="<?php echo $results['nama'] ?>"><br>

<label for="alamat">alamat</label>
<input type="text" name="alamat" value="<?php echo $results['alamat'] ?>"><br>

<label for="email">email</label>
<input type="text" name="email" value="<?php echo $results['email'] ?>"><br>

<label for="password">password</label>
<input type="password" name="password" value="<?php echo $results['password'] ?>"><br>

<input type="submit" name="submit" value="simpan"> 

</form>


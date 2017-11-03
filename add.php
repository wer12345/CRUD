<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tambah User</title>
</head>
<body>
  <form action="add.php" method="POST">

  <label for="nama">nama</label>
<input type="text" name="nama"><br>

<label for="alamat">alamat</label>
<input type="text" name="alamat"><br>

<label for="email">email</label>
<input type="text" name="email"><br>

<label for="password">password</label>
<input type="password" name="password"><br>

<input type="submit" name="submit" value="simpan"> 

</form>
</body>
</html>

<?php
include_once("config.php");
include_once("helper.php");

if(isset($_POST['submit'])) {
  $nama = filterData($_POST['nama']);
  $password = filterData(md5($_POST['password']));
  $email = filterData($_POST['email']);
  $alamat = filterData($_POST['alamat']);


  mysqli_query($mysqli, "INSERT INTO users(email, password, nama, alamat)
    VALUES('$email', '$password', '$nama', '$alamat')");

  header("location:index.php");
}


?>

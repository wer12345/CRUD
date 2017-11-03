<?php 
  include_once("config.php");

  $id = $_GET['id'];


  // delete data berdasarkan id
  mysqli_query($mysqli, "DELETE FROM users
                          WHERE id='$id'");

// setelah delete data lempar ke index.php
header("location:index.php");

?>

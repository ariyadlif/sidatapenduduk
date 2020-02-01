<?php
include '../koneksi.php';

$password = md5($_POST['password']);

mysqli_query($koneksi,"UPDATE admin SET password='$password'");

header("location:ganti_password.php?pesan=password");

?>
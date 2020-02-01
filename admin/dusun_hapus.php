<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM dusun WHERE dusun_id='$id'");

header("location:dusun.php");

?>
<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM warga WHERE warga_id='$id'");

header("location:warga.php");

?>
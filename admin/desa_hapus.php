<?php

include '../koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM desa WHERE desa_id='$id'");

header("location:desa.php");

?>
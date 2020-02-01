<?php

include '../koneksi.php';

$nama = $_POST['nama'];

mysqli_query($koneksi,"INSERT INTO desa VALUES('','$nama')");

header("location:desa.php");

?>
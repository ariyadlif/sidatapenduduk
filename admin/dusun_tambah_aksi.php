<?php

include '../koneksi.php';

$nama = $_POST['nama'];

mysqli_query($koneksi,"INSERT INTO dusun VALUES('','$nama')");

header("location:dusun.php");

?>
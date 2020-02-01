<?php

include '../koneksi.php';

$nama = $_POST['nama'];

mysqli_query($koneksi,"INSERT INTO data_kelahiran VALUES('','$nama')");

header("location:data_kelahiran.php");

?>
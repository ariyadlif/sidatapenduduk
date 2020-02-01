<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$id = $_POST['id'];

mysqli_query($koneksi,"UPDATE desa SET desa_nama='$nama' WHERE desa_id='$id'");

header("location:desa.php");

?>
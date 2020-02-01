<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$id = $_POST['id'];

mysqli_query($koneksi,"UPDATE dusun SET dusun_nama='$nama' WHERE dusun_id='$id'");

header("location:dusun.php");

?>
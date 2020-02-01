<?php
include '../koneksi.php';

$no = $_POST['no'];
$nama = $_POST['nama'];
$ktp = $_POST['ktp'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$desa = $_POST['desa'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];


mysqli_query($koneksi,"INSERT INTO warga VALUES('$no','$nama','$ktp','$ttl','$jk','$desa','$dusun','$rt','$rw','$status','$pendidikan','$agama')");

header("location:warga.php");

?>
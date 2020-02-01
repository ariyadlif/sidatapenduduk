<?php
include '../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$ttl = $_POST['ttl'];
$jk = $_POST['jk'];
$desa = $_POST['desa'];
$dusun = $_POST['dusun'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$status = $_POST['status'];
$pendidikan = $_POST['pendidikan'];
$agama = $_POST['agama'];


mysqli_query($koneksi,"UPDATE warga SET warga_nama='$nama', warga_nik='$nik', warga_ttl='$ttl',warga_jk='$jk', warga_desa='$desa', warga_dusun='$dusun', warga_rt='$rt', warga_rw='$rw', warga_status='$status', warga_pendidikan='$pendidikan', warga_agama='$agama' WHERE warga_id='$id'");

header("location:warga.php");
?>
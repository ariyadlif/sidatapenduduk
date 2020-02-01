<?php
$koneksi = mysqli_connect("localhost","root","","penduduk");

if(mysqli_connect_errno()){
	echo "Koneksi database gagal";
}

?>
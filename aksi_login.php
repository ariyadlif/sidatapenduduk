<?php

include 'koneksi.php';

session_start();

$username = $_POST['uname'];
$password = md5($_POST['pass']);


$cek = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username' and password='$password'");

$jumlah = mysqli_num_rows($cek);

if($jumlah > 0){
	//jika login berhasil
	$_SESSION['status'] = "berhasil";
	header("location:admin/index.php");

}else{
	header("location:login.php?pesan=gagal");
}



?>

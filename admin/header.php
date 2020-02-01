<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Sistem Informasi Pendataan Penduduk</title>

	<link rel="stylesheet" type="text/css" href="../assets/font-awesome/css/all.css">
	<link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css">
	<script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>

	<script type="text/javascript" src="../assets/js/Chart.js"></script>

</head>
<body>
	<?php
	include 'cek_login.php';
	include '../koneksi.php';
	?>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
		<div class="container">

			<a class="navbar-brand" href="#">S.I Administrasi Data Penduduk</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="index.php"><i class="fa fa-home"></i> Dashboard <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="warga.php"><i class="fa fa-users"></i> Data Kependudukan</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-briefcase"></i> Master Data
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<!-- <a class="dropdown-item" href="desa.php">Data Desa</a> -->
							<a class="dropdown-item" href="dusun.php">Data Dusun</a>
							<a class="dropdown-item" href="data_kelahiran.php">Data Kelahiran</a>
							<a class="dropdown-item" href="data_penduduk_pindah_dtg.php">Data Penduduk Pindah & Datang</a>
							<a class="dropdown-item" href="data_permohonan_kk.php">Data Permohonan KK</a>
							<a class="dropdown-item" href="data_permohonan_ektp.php">Data Permohonan e-KTP</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="ganti_password.php"><i class="fa fa-lock"></i> Ganti Password</a>
					</li>
				</ul>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>

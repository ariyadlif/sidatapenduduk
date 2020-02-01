<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pendataan Penduduk - Login</title>

	<link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="assets/js/jquery.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">S.I Administrasi Data Penduduk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Berita <span class="sr-only">(current)</span></a>
          </li>
          
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil Desa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="sejarah_desa.php">Sejarah Singkat Desa Cikalongsari</a>
              <a class="dropdown-item" href="#">Buat Surat Pengajuan/Permohonan</a>
              <a class="dropdown-item" href="user/user_index.php">Data Kependudukan</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="login.php">Admin</a>
              <a class="dropdown-item" href="login2.php">Kepala Desa</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          
        </ul>
        
      </div>
    </div>
  </nav>
  <br>

	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4 mx-auto">

				<?php
				if(isset($_GET['pesan'])){
					if($_GET['pesan']=="gagal"){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  <strong>Maaf!</strong> Username atau Password salah.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
					}else if($_GET['pesan']=="logout"){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  Anda Telah Berhasil Logout.
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
					}else if($_GET['pesan']=="belumlogin"){
						echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
									  Anda Harus Login Terlebih Dahulu
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
									</div>';
					}
				}

				?>

			</div>
		</div>

		<div class="container">
		<div class="jumbotron">
		<div class="row">
			<div class="col-md-3 mx-auto">
				<blockquote class="text-muted">Login sebagai Kepala Desa</blockquote>

				<div class="card mt-4">
					<div class="card-body">

						<form action="aksi_login2.php" method="post">

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="uname" required="required" class="form-control" placeholder="Masukkan username ..">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" required="required" class="form-control" placeholder="Masukkan Password ..">
							</div>

							<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block mb-3">

						</form>

					</div>
				</div>

			</div>
		</div>
		</div>
		</div>
	</div>

  	<?php
      include 'footer1.php';
    ?>

</body>
</html>

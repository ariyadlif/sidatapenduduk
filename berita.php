<!DOCTYPE html>
<html>
<head>
	<title>Sistem Informasi Pendataan Penduduk</title>

	<link rel="stylesheet" type="text/css" href="assets/font-awesome/css/all.css">
  <link href="assets/css/bootstrap.css" type="text/css" rel="stylesheet">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css">
  <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">

      <a class="navbar-brand" href="index.php">S.I Administrasi Data Penduduk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Dashboard <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php"><i class="fas fa-newspaper"></i> Berita</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-landmark"></i> Profil Daerah
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- <a class="dropdown-item" href="desa.php">Data Desa</a> -->
              <a class="dropdown-item" href="sejarah_desa.php">Sejarah Singkat Desa Cikalongsari</a>
              <a class="dropdown-item" href="user/user_buat_permohonan.php">Buat Surat Permohonan</a>
              <a class="dropdown-item" href="user/user_warga.php">Data Kependudukan</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-sign-in-alt"></i> Login
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- <a class="dropdown-item" href="desa.php">Data Desa</a> -->
              <a class="dropdown-item" href="login.php">Admin</a>
              <a class="dropdown-item" href="login2.php">Kepala Desa</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="card">
      <div class="card-body">
        <div class="row grid">
          <div class="col-md-12 bg-secondary text-white"><h3>Dashboard</h3>
            <p>Halaman Berita di Desa Cikalongsari</p>
          </div>
        </div>
        <br>
        <section class="padding-xxs" >
          <div class="container">
            <div class="row">
              <div class="blog-post-item col-md-3 col-sm-6">
                <!-- IMAGE -->
                <figure class="margin-bottom-20">
                  <div class="">
                    <img class="img-responsive" src="gambar/gambar4.jpg" alt="" style="width:100%; height:160px;">
                  </div>        
                </figure>
                  <h5><a href="#"><div class="judulnya">Sawah di Desa Cikalongsari mulai ditanam padi lagi oleh para petani</div></a></h5>
                  <p style="text-align:justify">Lahan sawah yang sudah dipanen pada bulan sebelum nya, mulai di tanam padi lagi oleh para petani</p>
              </div>           

              <div class="blog-post-item col-md-3 col-sm-6">
                <!-- IMAGE -->
                <figure class="margin-bottom-20">
                  <div class="">
                    <img class="img-responsive" src="gambar/gambar5.jpg" alt="" style="width:100%; height:160px;">
                  </div>              
                </figure>
                  <h5><a href="#"><div class="judulnya">Aliran air sungai dari irigasi sumber pengairan untuk sawah-sawah petani</div></a></h5>
                  <p style="text-align:justify">Sumber air untuk sawah dari irigasi yang menjadi faktor utama kesuburan sawah, sehingga tanah sawah tidak kekeringan</p>
              </div>           
                                        
              <div class="blog-post-item col-md-3 col-sm-6">  
                <!-- IMAGE -->
                <figure class="margin-bottom-20">
                  <div class="">
                    <img class="img-responsive" src="gambar/gambar6.jpeg" alt="" style="width:100%; height:160px;">
                  </div>
                </figure>
                  <h5><a href="#"><div class="judulnya">Senja disawah sore hari ketika matahari terbenam sunset nya pedesaan</div></a></h5>
                  <p style="text-align:justify">Keindahan matahari terbenam sore hari menyejukan mata memandang asli dan asri anugrah alam </p>
              </div>                      
            </div>                                        
          </div>    
        </section>
      </div>
    </div>
  </div>

<!--
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
  	<div class="container">
      <a class="navbar-brand" href="#">S.I Administrasi Data Penduduk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

  		<div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="fa fa-briefcase"></i> Masuk Sebagai
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="user/user_index.php">Penduduk</a>
							<a class="dropdown-item" href="login.php">Admin</a>
              <a class="dropdown-item" href="login.php">Kepala Desa</a>
						</div>
					</li>
        </ul>
  		</div>

      
  	</div>
  </nav>
-->

  <div class="col-md-4 mx-auto">
    <br>
  </div>
  
  	<?php
      include 'footer1.php';
    ?>

</body>
</html>

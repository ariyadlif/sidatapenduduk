<?php
include 'user_header.php';
?>

<div class="container">

	<div class="card">
		<div class="card-body">

			<h3>Dashboard</h3>
			<p class="text-muted">Halaman Login Buat Surat Keterangan Lahir</p>

			<hr>
			<b><p>Login dulu yahh.. <br>
				Username menggunakan NIK dan Password menggunakan Tanggal Lahir<br></p></b>
			<div class="jumbotron">
				<div class="col-md-3 mx-auto">
					<div class="card mt-4">
						<div class="card-body">

							<!--<p>Buat permohonan surat pengajuan administrasi data kependudukan Desa Cikalongsari seperti permohonan pembuatan kartu keluarga, pembuatan e-KTP, surat keterangan penduduk pindah/datang, surat keterangan kelahiran. Gunakan dengan bijak dan benar</p>
							<a href="user_surat_lahir.php">Permohonan Surat Keterangan Lahir</a><br>
							<a href="user_surat_pindah.php">Permohonan Keterangan Pindah/Datang</a><br>
							<a href="user_surat_kk.php">Permohonan Pembuatan Kartu Keluarga</a><br>
							<a href="user_surat_ktp.php">Permohonan Pembuatan e-KTP</a><br>-->
							<form action="user_surat_lahir.php">

							<div class="form-group">
								<label>Username</label>
								<input type="text" name="uname" required="required" class="form-control" placeholder="Masukkan username..">
							</div>

							<div class="form-group">
								<label>Password</label>
								<input type="password" name="pass" required="required" class="form-control" placeholder="Masukkan Password ..">
							</div>

							<input type="submit" name="submit" value="Login" class="btn btn-primary btn-block mb-3">

						</form>
						<a href="#">Daftar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<br>
<?php
include 'user_footer.php';
?>

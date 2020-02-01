<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card mb-5">
				<div class="card-body">

					<h3>Tambah Warga</h3>
					<p class="text-muted">Tambah Data Warga</p>

					<hr>

					<a class="btn btn-primary btn-sm mb-5" href="warga.php">Kembali</a>

					<form action="warga_tambah_aksi.php" method="post">

						<div class="form-group">
							<label>No</label>
							<input type="text" name="no" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Nama</label>
							<input type="text" name="nama" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>No.KTP</label>
							<input type="text" name="ktp" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Tempat Tanggal Lahir</label>
							<input type="text" name="ttl" class="form-control" required="required">
						</div>

						<div class="form-group">
							<label>Jenis Kelamin</label>
							<select name="jk" class="form-control" required="required">
								<option value=""> - Pilih - </option>
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>

						<div class="form-group">
							<label>Desa</label>
							<select name="desa" class="form-control" required="required">
								<option value=""> - Pilih - </option>
								<option value="Cikalongsari">Cikalongsari</option>
							</select>
						</div>

						<div class="form-group">
							<label>Dusun</label>
							<select name="dusun" class="form-control" required="required">
								<option value=""> - Pilih - </option>
								<option value="01">Cikalong 01</option>
								<option value="02">Cikalong 02</option>
								<option value="03">Cikalong 03</option>
							</select>
						</div>

						<div class="form-group">
							<label>RT</label>
							<input type="text" name="rt" class="form-control">
						</div>

						<div class="form-group">
							<label>RW</label>
							<input type="text" name="rw" class="form-control">
						</div>

						<div class="form-group">
							<label>Status</label>
							<select name="status" class="form-control" required="required">
								<option value="">- Pilih -</option>
								<option value="Kawin">Kawin</option>
								<option value="Belum Kawin">Belum Kawin</option>
							</select>
						</div>

						<div class="form-group">
							<label>Pendidikan</label>
							<select name="pendidikan" class="form-control" required="required">
								<option value="">- Pilih -</option>
								<option value="SD">SD</option>
								<option value="SMP">SMP</option>
								<option value="SMA">SMA</option>
								<option value="S1">S1</option>
								<option value="S2">S2</option>
								<option value="S3">S3</option>
							</select>
						</div>

						<div class="form-group">
							<label>Agama</label>
							<select name="agama" class="form-control" required="required">
								<option value="">- Pilih -</option>
								<option value="Islam">Islam</option>
								<option value="Kristen">Kristen</option>
								<option value="Budha">Budha</option>
								<option value="Hindu">Hindu</option>
							</select>
						</div>
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
					</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
include 'footer.php';
?>
<?php  
include 'header.php';
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card">
				<div class="card-body">
					<h3>Tambah Data Kelahiran</h3>
					<hr>

					<form action="tambah_data_kelahiran_aksi.php" method="post">
						<div class="form-group">
							<label>Dusun</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Desa</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Kecamatan</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Kabupaten</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Nama Anak</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Lahir Pada Tanggal</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Anak ke-</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Nama Ayah</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Pekerjaan Ayah</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Umur Ayah</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Alamat Sekarang</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Nama Ibu</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Pekerjaan Ibu</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Umur Ibu</label>
							<input type="text" name="nama" required="required" class="form-control">
							<label>Alamat Sekarang</label>
							<input type="text" name="nama" required="required" class="form-control">


							
						</div>
						<input type="submit" name="submit" name="Simpan" class="btn btn-primary btn-sm">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php  
include 'footer.php';
?>
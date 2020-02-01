<?php
include 'user_header.php';
?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row grid">
            	<div class="col-md-12 bg-secondary text-white"><h3>Dashboard</h3>
					<p>Halaman Buat Surat Permohonan Penduduk Pindah/Datang</p>
            	</div>
			</div>
			<hr>
			
			<p>Menerangkan Data Daerah Asal</p>
			<form>
				<div class="form-row">
					<div class="form-group col-md-4">
				      <label for="inputEmail4">Nama Kartu Keluarga</label>
				      <input type="text" class="form-control" id="inputEmail4" placeholder="Nama lengkap">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputEmail4">Tempat Tanggal Lahir</label>
				      <input type="text" class="form-control" id="inputEmail4" placeholder="Tempat tanggal lahir">
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
				      	<label for="inputPassword4">Alamat</label>
				      	<input type="text" class="form-control" id="inputPassword4" placeholder="Alamat sekarang">
				    </div>
				    
				    <div class="form-group col-md-4">
				      	<label for="inputPassword4">Desa/Kelurahan</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputPassword4">Kecamatan</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputPassword4">Kabupaten</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputPassword4">Provinsi</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				</div>
				
				<hr>
				
				<p>Menerangkan Data Kepindahan</p>
				<div class="form-row">
					<div class="form-group col-md-4">
				      	<label for="inputEmail4">Alasan Pindah</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Kenapa">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputEmail4">Alamat Tujuan Pindah</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Alamat">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputPassword4">Desa/Kelurahan</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputPassword4">Kecamatan</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputPassword4">Kabupaten</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputPassword4">Provinsi</label>
				      	<input type="text" class="form-control" id="inputPassword4">
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
				      	<label for="inputEmail4">Jenis Kepindahan</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Pindah karna">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputEmail4">Klasifikasi Pindah</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Pindah antar mana">
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="inputZip">Nama Keluarga Yang Pindah</label>
				      	<input type="text" class="form-control" id="inputZip">
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="inputZip">NIK</label>
				      	<input type="text" class="form-control" id="inputZip">
				    </div>
				</div>

				<div class="form-group">
				    <div>
				    	<i>*Upload file persyaratan untuk membuat pengajuan/permohonan surat keterangan penduduk pindah/datang dengan format foto<br>
				    		-Photo Fotocopy Kartu Keluarga<br>
				    		-Photo Fotocopy KTP</i><br>Permohonan ini dibuat pada tanggal :
				    	<?php 
							echo date('l, d-m-Y');
						?> <br><br>
				      	<input type="file">
				    </div>
				</div>
  				<button type="submit" class="btn btn-primary">Kirim</button>
			</form>
		</div>
	</div>
</div>


<br>
<?php
include 'user_footer.php';
?>

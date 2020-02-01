<?php
include 'user_header.php';
?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row grid">
            	<div class="col-md-12 bg-secondary text-white"><h3>Dashboard</h3>
					<p>Halaman Buat Surat Permohonan Pembuatan e-KTP</p>
            	</div>
			</div>

			<hr>
						
			<p>Mengisi form dengan sebenarnya bahwa :</p>
			<form>
				<div class="form-row">
					<div class="form-group col-md-4">
				      		<label for="inputEmail4">No KK</label>
				      		<input type="text" class="form-control" id="inputEmail4">
				    </div>
				    <div class="form-group col-md-4">
				      		<label for="inputEmail4">NIK</label>
				      		<input type="text" class="form-control" id="inputEmail4" placeholder="isi NIK bagi yang memiliki KTP rusak/hilang">
				    </div>
				    <div class="form-group col-md-4">
				      		<label for="inputPassword4">Nama Lengkap</label>
				      		<input type="text" class="form-control" id="inputPassword4">
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-2">
				      		<label for="inputEmail4">Jenis Kelamin</label>
				      		<input type="text" class="form-control" id="inputEmail4" placeholder="L/P">
				    </div>
				    <div class="form-group col-md-3">
				      		<label for="inputEmail4">Tempat Tanggal Lahir</label>
				      		<input type="text" class="form-control" id="inputEmail4" placeholder="">
				    </div>
				    <div class="form-group col-md-3">
				      		<label for="inputPassword4">Provinsi</label>
				      		<input type="text" class="form-control" id="inputPassword4" placeholder="">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputPassword4">Pendidikan</label>
				      		<input type="text" class="form-control" id="inputPassword4" placeholder="">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputState">Status Kawin</label>
				      	<select id="inputState" class="form-control">
				      		<option selected>Pilih</option>
				      		<option>Kawin</option>
				      		<option>Tidak Kawin</option>
				      		<option>Duda</option>
				      		<option>Janda</option>
				      	</select>
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-2">
				      		<label for="inputEmail4">Agama</label>
				      		<input type="text" class="form-control" id="inputEmail4">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputEmail4">Pekerjaan</label>
				      		<input type="text" class="form-control" id="inputEmail4">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputPassword4">Alamat</label>
				      		<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputPassword4">Kewarganegaraan</label>
				      		<input type="text" class="form-control" id="inputPassword4" placeholder="WNI/WNA">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputPassword4">Nama Ayah</label>
				      		<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-2">
				      		<label for="inputPassword4">Nama Ibu</label>
				      		<input type="text" class="form-control" id="inputPassword4">
				    </div>
				    <div class="form-group col-md-8">
				      		<label for="inputPassword4">Keterangan</label>
				      		<input type="text" class="form-control" id="inputPassword4" placeholder="isi dengan (pemula) bagi pengguna baru/kehilangan KTP bagi yang kehilangan/rusak">
				    </div>
				</div>
				<hr>
				<div class="form-group">
				    <div>
				    	<i>*Upload file persyaratan untuk membuat pengajuan/permohonan pembuatan e-KTP wajib berumur lebih 17-Tahun dengan format foto<br>
				    	-Photo Fotocopy Ijazah<br>
				    	-Photo Berwarna Merah 3X4<br>
				    	-Photo Fotocopy Akta Lahir</i> <br>Permohonan ini dibuat pada tanggal : 
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

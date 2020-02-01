<?php
include 'user_header.php';
?>

<div class="container">
	<div class="card">
		<div class="card-body">
			<div class="row grid">
            	<div class="col-md-12 bg-secondary text-white"><h3>Dashboard</h3>
					<p>Halaman Buat Surat Permohonan Keterangan Kelahiran</p>
            	</div>
			</div>
			<hr>
			
			<p>Menerangkan dengan sebenarnya bahwa ternyata di :</p>
			<form>
				<div class="form-row">
				    <div class="form-group col-md-2">
				      	<label for="inputState">Dusun</label>
				      	<select id="inputState" class="form-control">
				      		<option selected>Pilih</option>
				      		<option>Dusun 01</option>
				      		<option>Dusun 02</option>
				      		<option>Dusun 03</option>
				      	</select>
				    </div>
					<div class="form-group col-md-2">
				      <label for="inputEmail4">Desa/kelurahan</label>
				      <input type="text" class="form-control" id="inputEmail4" placeholder="Desa/kelurahan">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputEmail4">Kecamatan</label>
				      <input type="text" class="form-control" id="inputEmail4" placeholder="Kecamatan">
				    </div>
				    <div class="form-group col-md-4">
				      <label for="inputPassword4">Kabupaten</label>
				      <input type="text" class="form-control" id="inputPassword4" placeholder="Kabupaten">
				    </div>
				</div>
				
				<hr>
				
				<div class="form-row">
					<div class="form-group col-md-6">
				      	<label for="inputEmail4">Telah lahir putra/putri yang diberi nama</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Nama putra/putri">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputEmail4">Lahir pada tanggal</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Tgl lahir">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputZip">Jenis Kelamin</label>
				      	<input type="text" class="form-control" id="inputZip">
				    </div>
				</div>
				<p>Dari pasangan suami-istri</p>
				<div class="form-row">
					<div class="form-group col-md-6">
				      	<label for="inputEmail4">Nama ayah</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Nama ayah">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputEmail4">Pekerjaan</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Umur">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputZip">Umur</label>
				      	<input type="text" class="form-control" id="inputZip">
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="inputZip">Alamat</label>
				      	<input type="text" class="form-control" id="inputZip" placeholder="Alamat sekarang">
				    </div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
				      	<label for="inputEmail4">Nama ibu</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Nama ibu">
				    </div>
				    <div class="form-group col-md-4">
				      	<label for="inputEmail4">Pekerjaan</label>
				      	<input type="text" class="form-control" id="inputEmail4" placeholder="Umur">
				    </div>
				    <div class="form-group col-md-2">
				      	<label for="inputZip">Umur</label>
				      	<input type="text" class="form-control" id="inputZip">
				    </div>
				    <div class="form-group col-md-6">
				      	<label for="inputZip">Alamat</label>
				      	<input type="text" class="form-control" id="inputZip" placeholder="Alamat sekarang">
				    </div>
				</div>

				<div class="form-group">
				    <div>
				    	<i>*Upload file persyaratan untuk membuat pengajuan/permohonan surat keterangan lahir dengan format foto <br>
				    		-Photo Fotocopy Kartu Keluarga<br>
				    		-Photo Buku Nikah Suami-istri<br>
				    		-Photo Fotocopy KTP Suami-istri</i><br>Permohonan ini dibuat pada tanggal :
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

<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Penduduk Pindah Datang</title>
	<link href="../assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="../assets/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/js/bootstrap.js"></script>
</head>
<body>

	<?php
	include 'cek_login.php';
	include '../koneksi.php';
	?>
	<div class="card-body">
	<table>
		<tbody>
			<tr>
				<td>
					<img src="../gambar/karawang.jpg" width="100px" height="100px" alt="...">
				</td>
				<td> </td>
				<td> </td>
				<td>PEMERINTAH KABUPATEN KARAWANG <br>
					      KECAMATAN JATISARI <br>
					KEPALA DESA CIKALONGSARI <br>
					Jln. Raya Cikalongsari No. 35</td>
			</tr>
		</tbody>
	</table>
	</div>
	<div class="card-body">
	<h3 class="text-center mb-4">Laporan Data Penduduk Pindah Datang</h3>
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Kartu Keluarga</th>
				<th>Tempat Tanggal Lahir</th>
				<th>Alamat Desa Asal</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Alasan Pindah</th>
				<th>Alamat Tujuan Pindah</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Provinsi</th>
				<th>Jenis Kepindahan</th>
				<th>Klasifikasi Pindah</th>
				<th>Nama Keluarga Yang Pindah</th>
				<th>NIK</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$data_penduduk_pdh_dtg = mysqli_query($koneksi,"SELECT * FROM data_penduduk_pdh_dtg");
			while($w = mysqli_fetch_array($data_penduduk_pdh_dtg)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['nm_krt_klg']; ?></td>
				<td><?php echo $w['ttl']; ?></td>
				<td><?php echo $w['alamat_asal']; ?></td>
				<td><?php echo $w['desa_asal']; ?></td>
				<td><?php echo $w['kec_asal']; ?></td>
				<td><?php echo $w['kab_asal']; ?></td>
				<td><?php echo $w['prov_asal']; ?></td>
				<td><?php echo $w['alasan_pindh']; ?></td>
				<td><?php echo $w['almt_tujuan_pindh']; ?></td>
				<td><?php echo $w['desa_pindh']; ?></td>
				<td><?php echo $w['kec_pindh']; ?></td>
				<td><?php echo $w['kab_pindh']; ?></td>
				<td><?php echo $w['prov_pindh']; ?></td>
				<td><?php echo $w['pindh_krn']; ?></td>
				<td><?php echo $w['pindh_antar_mn']; ?></td>
				<td><?php echo $w['nm_klg_pindh']; ?></td>
				<td><?php echo $w['nik']; ?></td>
			</tr>
			<?php 
			}
			?>
		</tbody>
	</table>
	<?php 
		echo date('l, d-m-Y');
	?>
	</div>
	<br>
	<br>
	<p style="text-align: right;">Mengetahui Kepala Desa Cikalongsari</p>
	<br>
	<br>
	<br>
	<p style="text-align: right;">Endang Sugiarto</p>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>


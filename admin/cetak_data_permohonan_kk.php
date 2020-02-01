<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Permohonan KK</title>
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
	<h3 class="text-center mb-4">Laporan Data Permohonan KK</h3>
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Nama Pemohon</th>
				<th>Nama Kepala Keluarga</th>
				<th>Alamat</th>
				<th>Nama Lengkap</th>
				<th>NIK</th>
				<th>Tempat Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Status Kawin</th>
				<th>Pendidikan</th>
				<th>Pekerjaan</th>
				<th>Hubungan Dengan Kepala Keluarga</th>
				<th>Nama Bapak/Ibu</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$data_permohonan_buat_kk = mysqli_query($koneksi,"SELECT * FROM data_permohonan_buat_kk");
			while($w = mysqli_fetch_array($data_permohonan_buat_kk)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['desa']; ?></td>
				<td><?php echo $w['kec']; ?></td>
				<td><?php echo $w['kab']; ?></td>
				<td><?php echo $w['nm_pemohon']; ?></td>
				<td><?php echo $w['nm_kepala_klg']; ?></td>
				<td><?php echo $w['alamat']; ?></td>
				<td><?php echo $w['nm_lengkap']; ?></td>
				<td><?php echo $w['nik']; ?></td>
				<td><?php echo $w['ttl']; ?></td>
				<td><?php echo $w['jenis_kel']; ?></td>
				<td><?php echo $w['agama']; ?></td>
				<td><?php echo $w['status_kwn']; ?></td>
				<td><?php echo $w['pendidikan']; ?></td>
				<td><?php echo $w['pekerjaan']; ?></td>
				<td><?php echo $w['hub_dgn_kpl_klg']; ?></td>
				<td><?php echo $w['nm_bpk_ibu']; ?></td>
				<td><?php echo $w['ket']; ?></td>
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
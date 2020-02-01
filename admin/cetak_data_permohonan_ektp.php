<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Permohonan e-KTP</title>
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
	<h3 class="text-center mb-4">Laporan Data Permohonan e-KTP</h3>
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>No KK</th>
				<th>NIK</th>
				<th>Nama Lengkap</th>
				<th>Jenis Kelamin</th>
				<th>Tempat Tanggal Lahir</th>
				<th>Provinsi</th>
				<th>Pendidikan</th>
				<th>Status Kawin</th>
				<th>Agama</th>
				<th>Pekerjaan</th>
				<th>Alamat</th>
				<th>Kewarganegaraan</th>
				<th>Nama Ayah</th>
				<th>Nama Ibu</th>
				<th>Keterangan</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$data_permohonan_ektp = mysqli_query($koneksi,"SELECT * FROM data_permohonan_ektp");
			while($w = mysqli_fetch_array($data_permohonan_ektp)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['no_kk']; ?></td>
				<td><?php echo $w['nik']; ?></td>
				<td><?php echo $w['nm_lengkap']; ?></td>
				<td><?php echo $w['jenis_kel']; ?></td>
				<td><?php echo $w['ttl']; ?></td>
				<td><?php echo $w['prov']; ?></td>
				<td><?php echo $w['pendidikan']; ?></td>
				<td><?php echo $w['status_kwn']; ?></td>
				<td><?php echo $w['agama']; ?></td>
				<td><?php echo $w['pekerjaan']; ?></td>
				<td><?php echo $w['alamat']; ?></td>
				<td><?php echo $w['kewarganegaraan']; ?></td>
				<td><?php echo $w['nm_ayh']; ?></td>
				<td><?php echo $w['nm_ibu']; ?></td>
				<td><?php echo $w['keterangan']; ?></td>
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
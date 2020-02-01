<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Warga</title>
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
	<h3 class="text-center mb-4">Laporan Data Warga</h3>
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>No.KTP</th>
				<th>JK</th>
				<th>Desa</th>
				<th>Dusun</th>
				<th>RT</th>
				<th>RW</th>
				<th>Status</th>
				<th>Pendidikan</th>
				<th>Agama</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$warga = mysqli_query($koneksi,"SELECT * FROM warga");
			while($w = mysqli_fetch_array($warga)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['warga_nama']; ?></td>
				<td><?php echo $w['warga_nik']; ?></td>
				<td><?php echo $w['warga_jk']; ?></td>
				<td><?php echo $w['warga_desa']; ?></td>
				<td><?php echo $w['warga_dusun']; ?></td>
				<td><?php echo $w['warga_rt']; ?></td>
				<td><?php echo $w['warga_rw']; ?></td>
				<td><?php echo $w['warga_status']; ?></td>
				<td><?php echo $w['warga_pendidikan']; ?></td>
				<td><?php echo $w['warga_agama']; ?></td>
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
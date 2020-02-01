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
			$desa = $_GET['desa'];
			$warga = mysqli_query($koneksi,"SELECT * FROM warga,desa,dusun WHERE warga_desa=desa_id and warga_dusun=dusun_id and warga_desa='$desa' ORDER BY warga_id ASC");
			while($w = mysqli_fetch_array($warga)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['warga_nama']; ?></td>
				<td><?php echo $w['warga_ktp']; ?></td>
				<td><?php echo $w['warga_jk']; ?></td>
				<td><?php echo $w['desa_nama']; ?></td>
				<td><?php echo $w['dusun_nama']; ?></td>
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


	<script type="text/javascript">
		window.print();
	</script>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Cetak Data Kelahiran</title>
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
	<h3 class="text-center mb-4">Laporan Data Kelahiran</h3>
	<table class="table table-bordered table-hover table-striped table-saya">
		<thead>
			<tr>
				<th>No</th>
				<th>Kartu Keluarga</th>
				<th>Dusun</th>
				<th>Desa</th>
				<th>Kecamatan</th>
				<th>Kabupaten</th>
				<th>Nama Anak</th>
				<th>Lahir Pada Tanggal</th>
				<th>Jenis Kelamin</th>
				<th>Nama Ayah</th>
				<th>Pekerjaan</th>
				<th>Umur</th>
				<th>Alamat Sekarang</th>
				<th>Nama Ibu</th>
				<th>Pekerjaan</th>
				<th>Umur</th>
				<th>Alamat Sekarang</th>
			</tr>
		</thead>
		
		<tbody>
			<?php
			$no = 1;
			$data_kelahiran = mysqli_query($koneksi,"SELECT * FROM data_kelahiran");
			while($w = mysqli_fetch_array($data_kelahiran)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $w['kk']; ?></td>
				<td><?php echo $w['dusun']; ?></td>
				<td><?php echo $w['desa']; ?></td>
				<td><?php echo $w['kecamatan']; ?></td>
				<td><?php echo $w['kabupaten']; ?></td>
				<td><?php echo $w['nama_anak']; ?></td>
				<td><?php echo $w['lhr_pd_tgl']; ?></td>
				<td><?php echo $w['jk']; ?></td>
				<td><?php echo $w['nm_ayh']; ?></td>
				<td><?php echo $w['pkrjn_ayh']; ?></td>
				<td><?php echo $w['umr_ayh']; ?></td>
				<td><?php echo $w['almt_skg_ayh']; ?></td>
				<td><?php echo $w['nm_ibu']; ?></td>
				<td><?php echo $w['pkrjn_ibu']; ?></td>
				<td><?php echo $w['umr_ibu']; ?></td>
				<td><?php echo $w['almt_skg_ibu']; ?></td>
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
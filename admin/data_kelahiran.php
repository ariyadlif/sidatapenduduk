<?php
include 'header.php';
?>

		<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Permohonan Surat Kelahiran</h3>
					<p class="text-muted">Data Kelahiran</p>

					<hr>
					<a class="btn btn-success btn-sm mb-3 float-right" href="cetak_data_kelahiran.php" target="_blank"><i class="fa fa-file"></i> Cetak Laporan</a>

					<!-- <a href="tambah_data_kelahiran.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data Kelahiran</a> -->

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr style="font-weight: bold;">
								<th>No</th>
								<th width="1%">Kartu Keluarga</th>
								<th>Dusun</th>
								<th>Desa</th>
								<th>Kecamatan</th>
								<th>Kabupaten</th>
								<th>Nama Anak</th>
								<th>Lahir Pada Tanggal</th>
								<th>Jenis Kelamin</th>
								<th>Nama Ayah</th>
								<th>Pekejaan</th>
								<th>Umur</th>
								<th>Alamat Sekarang</th>
								<th>Nama Ibu</th>
								<th>Pekejaan</th>
								<th>Umur</th>
								<th>Alamat Sekarang</th>
								<th width="20%">Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$data_kelahiran = mysqli_query($koneksi,"SELECT * FROM data_kelahiran");
							while($d = mysqli_fetch_array($data_kelahiran)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['kk']; ?></td>
								<td><?php echo $d['dusun']; ?></td>
								<td><?php echo $d['desa']; ?></td>
								<td><?php echo $d['kecamatan']; ?></td>
								<td><?php echo $d['kabupaten']; ?></td>
								<td><?php echo $d['nama_anak']; ?></td>
								<td><?php echo $d['lhr_pd_tgl']; ?></td>
								<td><?php echo $d['jk']; ?></td>
								<td><?php echo $d['nm_ayh']; ?></td>
								<td><?php echo $d['pkrjn_ayh']; ?></td>
								<td><?php echo $d['umr_ayh']; ?></td>
								<td><?php echo $d['almt_skg_ayh']; ?></td>
								<td><?php echo $d['nm_ibu']; ?></td>
								<td><?php echo $d['pkrjn_ibu']; ?></td>
								<td><?php echo $d['umr_ibu']; ?></td>
								<td><?php echo $d['almt_skg_ibu']; ?></td>
								<td>
									<a href="#" class="btn btn-success text-white btn-sm"><b>Simpan</b></a>
									<a href="data_kelahiran_edit.php?id=<?php echo $d['kk']; ?>" class="btn btn-warning text-white btn-sm"><b>Ubah</b></a>
									<a href="#" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus data?');"><b>Hapus</b></a>
								</td>
							</tr>
							<?php 
							}
							?>
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
<br>
<?php
include 'footer.php';
?>
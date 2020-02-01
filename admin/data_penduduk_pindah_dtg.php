<?php
include 'header.php';
?>

<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Permohonan Penduduk Pindah/Datang</h3>
					<p class="text-muted">Data Penduduk Pindah/Datang</p>

					<hr>
					<a class="btn btn-success btn-sm mb-3 float-right" href="cetak_data_penduduk_pdh_dtg.php" target="_blank"><i class="fa fa-file"></i> Cetak Laporan</a>

					<!-- <a href="tambah_data_kelahiran.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data Kelahiran</a> -->

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th>No</th>
								<th width="1%">Nama Kartu Keluarga</th>
								<th>Tempat Tangal Lahir</th>
								<th>Alamat Daerah Asal</th>
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
								<th width="20%">Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$data_penduduk_pdh_dtg = mysqli_query($koneksi,"SELECT * FROM data_penduduk_pdh_dtg");
							while($d = mysqli_fetch_array($data_penduduk_pdh_dtg)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['nm_krt_klg']; ?></td>
								<td><?php echo $d['ttl']; ?></td>
								<td><?php echo $d['alamat_asal']; ?></td>
								<td><?php echo $d['desa_asal']; ?></td>
								<td><?php echo $d['kec_asal']; ?></td>
								<td><?php echo $d['kab_asal']; ?></td>
								<td><?php echo $d['prov_asal']; ?></td>
								<td><?php echo $d['alasan_pindh']; ?></td>
								<td><?php echo $d['almt_tujuan_pindh']; ?></td>
								<td><?php echo $d['desa_pindh']; ?></td>
								<td><?php echo $d['kec_pindh']; ?></td>
								<td><?php echo $d['kab_pindh']; ?></td>
								<td><?php echo $d['prov_pindh']; ?></td>
								<td><?php echo $d['pindh_krn']; ?></td>
								<td><?php echo $d['pindh_antar_mn']; ?></td>
								<td><?php echo $d['nm_klg_pindh']; ?></td>
								<td><?php echo $d['nik']; ?></td>
								<td>
									<a href="#" class="btn btn-success text-white btn-sm"><b>Simpan</b></a>
									<a href="data_kelahiran_edit.php?id=<?php echo $d['kk']; ?>" class="btn btn-warning text-white btn-sm"><b>Ubah</b></a>
									<a href="data_kelahiran_hapus.php?id=<?php echo $d['kk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus data?');"><b>Hapus</b></a>
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
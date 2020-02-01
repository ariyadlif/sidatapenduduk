<?php
include 'header.php';
?>

<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Permohonan Pembuatan KK</h3>
					<p class="text-muted">Data Permohonan Pembuatan KK</p>

					<hr>
					<a class="btn btn-success btn-sm mb-3 float-right" href="cetak_data_permohonan_kk.php" target="_blank"><i class="fa fa-file"></i> Cetak Laporan</a>

					<!-- <a href="tambah_data_kelahiran.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data Kelahiran</a> -->

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th>No</th>
								<th width="1%">Desa</th>
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
								<th width="20%">Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$data_permohonan_buat_kk = mysqli_query($koneksi,"SELECT * FROM data_permohonan_buat_kk");
							while($d = mysqli_fetch_array($data_permohonan_buat_kk)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['desa']; ?></td>
								<td><?php echo $d['kec']; ?></td>
								<td><?php echo $d['kab']; ?></td>
								<td><?php echo $d['nm_pemohon']; ?></td>
								<td><?php echo $d['nm_kepala_klg']; ?></td>
								<td><?php echo $d['alamat']; ?></td>
								<td><?php echo $d['nm_lengkap']; ?></td>
								<td><?php echo $d['nik']; ?></td>
								<td><?php echo $d['ttl']; ?></td>
								<td><?php echo $d['jenis_kel']; ?></td>
								<td><?php echo $d['agama']; ?></td>
								<td><?php echo $d['status_kwn']; ?></td>
								<td><?php echo $d['pendidikan']; ?></td>
								<td><?php echo $d['pekerjaan']; ?></td>
								<td><?php echo $d['hub_dgn_kpl_klg']; ?></td>
								<td><?php echo $d['nm_bpk_ibu']; ?></td>
								<td><?php echo $d['ket']; ?></td>
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
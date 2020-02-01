<?php
include 'header.php';
?>

<div class="container-fluid">
			<div class="card">
				<div class="card-body">
					<h3>Data Permohonan Pembuatan e-KTP</h3>
					<p class="text-muted">Data Permohonan Pembuatan e-KTP</p>

					<hr>
					<a class="btn btn-success btn-sm mb-3 float-right" href="cetak_data_permohonan_ektp.php" target="_blank"><i class="fa fa-file"></i> Cetak Laporan</a>

					<!-- <a href="tambah_data_kelahiran.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Data Kelahiran</a> -->

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th>No</th>
								<th width="1%">No KK</th>
								<th>NIK</th>
								<th>Nama Lengkap</th>
								<th>Jenis Kelamin</th>
								<th>Tempat Tanggal Lahir</th>
								<th>Provinsi</th>
								<th>Pendidikan</th>
								<th>Status Kawin</th>
								<th>agama</th>
								<th>pekerjaan</th>
								<th>Alamat </th>
								<th>Kewarganegaraan</th>
								<th>Nama Ayah</th>
								<th>Nama Ibu</th>
								<th>Keterangan</th>
								<th width="20%">Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$data_permohonan_ektp = mysqli_query($koneksi,"SELECT * FROM data_permohonan_ektp");
							while($d = mysqli_fetch_array($data_permohonan_ektp)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['no_kk']; ?></td>
								<td><?php echo $d['nik']; ?></td>
								<td><?php echo $d['nm_lengkap']; ?></td>
								<td><?php echo $d['jenis_kel']; ?></td>
								<td><?php echo $d['ttl']; ?></td>
								<td><?php echo $d['prov']; ?></td>
								<td><?php echo $d['pendidikan']; ?></td>
								<td><?php echo $d['status_kwn']; ?></td>
								<td><?php echo $d['agama']; ?></td>
								<td><?php echo $d['pekerjaan']; ?></td>
								<td><?php echo $d['alamat']; ?></td>
								<td><?php echo $d['kewarganegaraan']; ?></td>
								<td><?php echo $d['nm_ayh']; ?></td>
								<td><?php echo $d['nm_ibu']; ?></td>
								<td><?php echo $d['keterangan']; ?></td>
								<td>
									<a href="#" class="btn btn-warning text-white btn-sm">Simpan</a>
									<a href="data_kelahiran_edit.php?id=<?php echo $d['kk']; ?>" class="btn btn-warning text-white btn-sm">Ubah</a>
									<a href="data_kelahiran_hapus.php?id=<?php echo $d['kk']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus data?');"><i class="fa fa-trash"></i></a>
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
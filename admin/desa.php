<?php
include 'header.php';
?>


<div class="container">

	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-body">

					<h3>Data Desa</h3>
					<p class="text-muted">Semua Data Desa</p>

					<hr>


					<a href="desa_tambah.php" class="btn btn-primary btn-sm mb-3"><i class="fa fa-plus"></i> Tambah Desa Baru</a>


					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Nama Desa</th>
								<th width="20%">Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$desa = mysqli_query($koneksi,"SELECT * FROM desa");
							while($d = mysqli_fetch_array($desa)){
							?>
							<tr>
								<td><?php echo $no++ ?></td>
								<td><?php echo $d['desa_nama']; ?></td>
								<td>
									<a href="desa_edit.php?id=<?php echo $d['desa_id']; ?>" class="btn btn-warning text-white btn-sm">Ubah <i class="fa fa-wrench"></i></a>
									<a href="desa_hapus.php?id=<?php echo $d['desa_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?');"><i class="fa fa-trash"></i></a>
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
	</div>

</div>
<br>
<br>

<?php
include 'footer.php';
?>





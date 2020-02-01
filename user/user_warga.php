<?php
include 'user_header.php';
?>

<div class="container-fluid">

	<div class="card">
		<div class="card-body">

			<h3>Data Warga Cikalongsari</h3>
			<p class="text-muted">Semua Data Warga</p>

			<hr>

			<a class="btn btn-success btn-sm mb-3 float-right" href="user_warga_cetak.php" target="_blank"><i class="fa fa-file"></i> Cetak</a>
			<form action="" method="post">
				<input type="text" name="keyword" size="40" placeholder=" cari nama warga..." autocomplete="off" id="keyword">
				<button type="submit" name="cari" id="tombol-cari">cari</button>
			</form>

			<table class="table table-bordered table-hover table-striped table-saya">
				<thead align="center">
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>No KTP</th>
						<th>Tempat tanggal lahir</th>
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

						<td><?php echo $w['warga_id']; ?></td>
						<td><?php echo $w['warga_nama']; ?></td>
						<td><?php echo $w['warga_nik']; ?></td>
						<td><?php echo $w['warga_ttl']; ?></td>
						<td><?php echo $w['warga_jk']; ?></td>
						<td><?php echo $w['warga_desa']; ?></td>
						<td><?php echo $w['warga_dusun']; ?></td>
						<td><?php echo $w['warga_rt']; ?></td>
						<td><?php echo $w['warga_rw']; ?></td>
						<td><?php echo $w['warga_status']; ?></td>
						<td><?php echo $w['warga_pendidikan']; ?></td>
						<td><?php echo $w['warga_agama']; ?></td>
						<!--<td>
							<a href="warga_edit.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-warning text-white btn-sm" onclick="return confirm('Yakin diubah?');"><i class="fa fa-wrench"> Ubah</i></a>
							<a href="warga_hapus.php?id=<?php echo $w['warga_id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Hapus?');"><i class="fa fa-trash"></i></a>
						</td>-->
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
			<nav aria-label="Page navigation example">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Previous">
			        <span aria-hidden="true">&laquo;</span>
			      </a>
			    </li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item"><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><a class="page-link" href="#">4</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#" aria-label="Next">
			        <span aria-hidden="true">&raquo;</span>
			      </a>
			    </li>
			  </ul>
			</nav>
		</div>
	</div>
</div>
<br>

<?php
include 'user_footer.php';
?>

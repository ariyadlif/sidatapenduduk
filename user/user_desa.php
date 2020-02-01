<?php
include 'user_header.php';
?>


<div class="container">

	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-body">

					<h3>Data Desa Cikalongsari</h3>

					<hr>

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Nama Desa</th>

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
include 'user_footer.php';
?>

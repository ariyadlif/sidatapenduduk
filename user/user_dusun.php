<?php
include 'user_header.php';
?>


<div class="container">

	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="card">
				<div class="card-body">

					<h3>Data Dusun Cikalongsari</h3>

					<hr>

					<table class="table table-bordered table-striped table-hover table-saya">
						<thead>
							<tr>
								<th width="1%">No</th>
								<th>Nama Dusun</th>

							</tr>
						</thead>

						<tbody>
							<?php
							$no = 1;
							$dusun = mysqli_query($koneksi,"SELECT * FROM dusun");
							while($d = mysqli_fetch_array($dusun)){
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $d['dusun_nama']; ?></td>

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

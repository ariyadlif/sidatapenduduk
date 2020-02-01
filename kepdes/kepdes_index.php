<?php
include 'kepdes_header.php';
?>

<div class="container">

	<div class="card">
		<div class="card-body">

			<h3>Dashboard</h3>
			<p class="text-muted">Halaman Dashboard Admin</p>

			<hr>

			<div class="row">
				<div class="col-md-4">
					<div class="card bg-danger text-white">
						<div class="card-body">

							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-users fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Warga</h4>
									<?php
									$warga = mysqli_query($koneksi,"SELECT * FROM warga");
									$jumlah_warga = mysqli_num_rows($warga);
									?>
									<p><?php echo $jumlah_warga; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-warning text-white">
						<div class="card-body">

							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Desa</h4>
									<?php
									$desa = mysqli_query($koneksi,"SELECT * FROM desa");
									$jumlah_desa = mysqli_num_rows($desa);
									?>
									<p><?php echo $jumlah_desa; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card bg-success text-white">
						<div class="card-body">

							<div class="row">
								<div class="col-md-4">
									<i class="fa fa-briefcase fa-4x"></i>
								</div>
								<div class="col-md-8">
									<h4>Data Dusun</h4>
									<?php
									$dusun = mysqli_query($koneksi,"SELECT * FROM dusun");
									$jumlah_dusun = mysqli_num_rows($dusun);
									?>
									<p><?php echo $jumlah_dusun; ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>



				<div class="col-md-12">

					<br/>
					<br/>
					<center>
						<h3>Grafik Warga</h3>
						<p class="text-muted">Jumlah Data Warga Berdasarkan Desa</p>
					</center>
					<br/>

					<div style="width: 100%;height: 700px">
						<canvas id="myChart"></canvas>
					</div>

				</div>
			</div>


		</div>
	</div>

</div>
<br>
<?php
include 'kepdes_footer.php';
?>

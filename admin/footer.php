
<script type="text/javascript">
	$(document).ready(function(){
		$(".table-saya").DataTable();


		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [

				<?php
				$desa = mysqli_query($koneksi, "SELECT * FROM desa");
				while($d=mysqli_fetch_array($desa)){
				?>
				"<?php echo $d['desa_nama']; ?>", 
				<?php
				}
				?>

				],
				datasets: [{
					label: 'Jumlah Warga',
					data: [

					<?php
					$desa = mysqli_query($koneksi, "SELECT * FROM desa");
					while($d=mysqli_fetch_array($desa)){
						$id_desa = $d['desa_id'];
						$w = mysqli_query($koneksi,"SELECT * FROM warga WHERE warga_desa='$id_desa'");
						$ww = mysqli_num_rows($w);
						?>
						"<?php echo $ww; ?>", 
						<?php
					}
					?>

					],
					backgroundColor: [
					'rgba(255, 99, 132, 0.2)',
					'rgba(54, 162, 235, 0.2)',
					'rgba(255, 206, 86, 0.2)',
					'rgba(75, 192, 192, 0.2)',
					'rgba(153, 102, 255, 0.2)',
					'rgba(255, 159, 64, 0.2)'
					],
					borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	});
</script>
<footer>
	<div class="navbar-dark bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<br>
					<h4 class="footer-title" style="color: white">Info Kontak</h4>
					<hr>
					<div class="footer-content">
						<p style="color: white" class="i-flex"><i class="fa fa-home"></i> Dusun Cikalong 01, Desa Cikalongsari, 			Kecamatan Jatisari, Kota Karawang. 41374 </p>
						<p class="i-flex"><i class="glyphicon glyphicon-earphone m-r-10"></i></p>
							<p style="color: white"> Copyright &copy; 2019
    					    All Right Reserved</p>
					</div>
				</div>
				<div class="col-md-4">
					<br>
					<h4 class="footer-title" style="color: white">Tentang</h4>
					<hr>
					<div class="footer-content">
					    						
						<!--<p class="statistics-count">583108</p>-->
						<!--<p>Pengunjung hari ini :  </p>-->
						<!--<p>Total pengunjung : 583108 </p>-->
						<!--<p>Pengunjung Online: 48</p>-->
					</div>
				</div>
			</div>
		</div>
	</div>
	
</footer>
<br>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
	<div class="container">
        Copyright &copy; 2019
        Designed by ..............<br>
    </div>
</nav> -->
</body>
</html>
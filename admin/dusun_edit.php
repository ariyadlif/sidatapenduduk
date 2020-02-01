<?php
include 'header.php';
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 mx-auto">
			
			<div class="card">
				<div class="card-body">

					<h3>Edit Dusun</h3>
					<p class="text-muted">Edit Data Dusun</p>

					<hr>

					<form action="dusun_update.php" method="post">
						<?php
						$id = $_GET['id'];

						$data = mysqli_query($koneksi,"SELECT * FROM dusun WHERE dusun_id='$id'");
						while($d = mysqli_fetch_array($data)){
						?>
						<div class="form-group">
							<label>Nama Dusun</label>
							<input type="text" name="nama" required="required" value="<?php echo $d['dusun_nama']; ?>" class="form-control">
							<input type="hidden" name="id" value="<?php echo $d['dusun_id']; ?>">
						</div>
						<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-sm">
						<?php 
						}
						?>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<br>

<?php
include 'footer.php';
?>
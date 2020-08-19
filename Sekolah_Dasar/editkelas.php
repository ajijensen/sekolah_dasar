<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Kelas</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM tb_kelas WHERE kode_kelas='$_GET[kd]'");
						$pecah=$ambil->fetch_assoc();
					?>
					<form method="post" enctype="multipart/form-data">
					<div class="form-group">
					  <label>Kode Kelas</label>
					  <input type="text" class="form-control" name="kode_kelas"  value="<?php echo $pecah['kode_kelas']; ?>">	
					</div>
					<div class="form-group">
				    <label>Kelas</label>
					  <input type="text" class="form-control" name="kelas" value="<?php echo $pecah['kelas']; ?>">
					</div>
					  <button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
					  <a href="index.php?page=kelas" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Kelas</a>
					</form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE tb_kelas SET kode_kelas='$_POST[kode_kelas]',kelas='$_POST[kelas]' WHERE kode_kelas='$_GET[kd]'");

					 			echo "<script>alert('Data Kelas Telah Diedit');</script>";

					 		}
					 	 ?>
			</div>
		</div>
	</div>
</div>
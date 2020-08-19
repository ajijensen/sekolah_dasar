<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Mata Pelajaran</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM tb_mapel WHERE kode_mapel='$_GET[kd]'");
						$pecah=$ambil->fetch_assoc();
					 ?>
					 <form method="post" enctype="multipart/form-data">
					 	<div class="form-group">
					 		<label>Nama Mata Pelajaran</label>
					 		<input type="text" class="form-control" name="nama_mapel" value="<?php echo $pecah['nama_mapel']; ?>">
					 	</div>
					 	<div class="form-group">
					 		<label>Keterangan</label>
					 		<input type="text" class="form-control" name="keterangan" value="<?php echo $pecah['keterangan']; ?>">
					 	</div>
					 		<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=mapel" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Mata Pelajaran</a>
					 </form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE tb_mapel SET nama_mapel='$_POST[nama_mapel]',keterangan='$_POST[keterangan]' WHERE kode_mapel='$_GET[kd]'");

					 			echo "<script>alert('Data Mata Pelajaran Telah Diedit');</script>";

					 		}
					 	 ?>
			</div>
		</div>
	</div>
</div>
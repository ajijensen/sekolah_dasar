<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Kelas</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Kode Kelas</label>
						<input type="text" class="form-control"  name="kode_kelas" placeholder="Masukan Kode Kelas" maxlength="8">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=kelas" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Kelas</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO tb_kelas
				 		(kode_kelas,kelas) VALUES ('$_POST[kode_kelas]','$_POST[kelas]')");

				 	echo "<script>alert('Data Produk Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>
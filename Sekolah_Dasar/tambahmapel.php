<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Mata Pelajaran</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>Kode Mata Pelajaran</label>
						<input type="text" class="form-control"  name="kode_mapel" placeholder="Masukan Kode Mata Pelajaran, Ex: B001" maxlength="8">
					</div>
					<div class="form-group">
						<label>Nama Mata Pelajaran</label>
						<input type="text" class="form-control" name="nama_mapel" placeholder="Masukan Nama Mata Pelajaran">
					</div>
					<div class="form-group">
						<label>Status</label>
						<input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan, Ex : Aktif/Non Aktif">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=mapel" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Mata Pelajaran</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO tb_mapel
				 		(kode_mapel,nama_mapel,keterangan) VALUES ('$_POST[kode_mapel]','$_POST[nama_mapel]','$_POST[keterangan]')");

				 	echo "<script>alert('Data Mata Pelajaran Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>
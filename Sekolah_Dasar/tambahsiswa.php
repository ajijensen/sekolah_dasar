<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Siswa</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>NIS</label>
						<input type="number" class="form-control"  name="nis" placeholder="Masukan Nomor Induk Siswa" maxlength="8">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama_siswa" placeholder="Masukan Nama Lengkap">
					</div>
					<div class="form-group">
						<label>Kelas</label>
						<input type="text" class="form-control" name="kelas" placeholder="Masukan Kelas">
          </div>
          <div class="form-group">
						<label>Jenis Kelamin</label>
						<input type="text" class="form-control" name="jenis_kelamin" placeholder="Masukan Jenis Kelamin">
					</div>
					<div class="form-group">
						<label>Agama</label>
						<input type="text" class="form-control" name="agama" placeholder="Masukan Agama">
          </div>
          <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukan Tempat Lahir">
          </div>
          <div class="form-group">
						<label>Tanggal Lahir</label>
						<input type="date" class="form-control" name="tanggal_lahir">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=siswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Data Siswa</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO tb_siswa
				 		(NIS,nama_siswa,kelas,jenis_kelamin,agama,tempat_lahir,tanggal_lahir) VALUES ('$_POST[nis]','$_POST[nama_siswa]','$_POST[kelas]','$_POST[jenis_kelamin]','$_POST[agama]','$_POST[tempat_lahir]','$_POST[tanggal_lahir]')");

				 	echo "<script>alert('Data Siswa Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>
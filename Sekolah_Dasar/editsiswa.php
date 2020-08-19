<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Siswa</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM tb_siswa WHERE NIS='$_GET[kd]'");
						$pecah=$ambil->fetch_assoc();
					?>
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label>NIS</label>
							<input type="text" class="form-control" name="nis" value="<?php echo $pecah['NIS']; ?>">
						</div>
						<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama_siswa" value="<?php echo $pecah['nama_siswa']; ?>">
            </div>
            <div class="form-group">
							<label>Kelas</label>
							<input type="text" class="form-control" name="kelas" value="<?php echo $pecah['kelas']; ?>">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin']; ?>">
            </div>
            <div class="form-group">
							<label>Agama</label>
							<input type="text" class="form-control" name="agama" value="<?php echo $pecah['agama']; ?>">
						</div>
						<div class="form-group">
							<label>Tempat Lahir</label>
							<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $pecah['tempat_lahir']; ?>">
            </div>
            <div class="form-group">
							<label>Tanggal Lahir</label>
							<input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pecah['tanggal_lahir']; ?>">
						</div>
							<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=siswa" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Data Siswa</a>
					</form>
						<?php 
							if (isset($_POST['edit'])) 
							{
								# code...
								$koneksi->query("UPDATE tb_siswa SET NIS='$_POST[nis]',nama_siswa='$_POST[nama_siswa]',kelas='$_POST[kelas]',jenis_kelamin='$_POST[jenis_kelamin]',agama='$_POST[agama]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tanggal_lahir]' WHERE NIS='$_GET[kd]'");

								echo "<script>alert('Data Siswa Telah Diedit');</script>";

				  		}
					  ?>
			</div>
		</div>
	</div>
</div>
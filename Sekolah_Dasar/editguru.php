<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;"> Edit Guru</h3>
					<?php 
						$ambil=$koneksi->query("SELECT * FROM tb_guru WHERE NIP ='$_GET[kd]'");
						$pecah=$ambil->fetch_assoc();
					 ?>
					 <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_guru']; ?>">
            </div>
            <div class="form-group">
            <label for="mapel">Mata Pelajaran</label>
            <select name="kode_mapel" id="mapel" class="form-control" required>
              <option value="">- Pilih -</option>
              <?php
              $ambil=$koneksi->query("SELECT * FROM tb_mapel")
              ?>
              <?php while($pecah=$ambil->fetch_assoc()){ ?>
              <option value="<?php echo $pecah['kode_mapel'] ?>"><?php echo $pecah['nama_mapel'] ?></option>;

              <?php
              } ?>
            </select>
            </div>
            <?php 
              $ambil=$koneksi->query("SELECT * FROM tb_guru WHERE NIP ='$_GET[kd]'");
              $pecah=$ambil->fetch_assoc();
            ?>
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
                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $pecah['tanggal_lahir']; ?>>
            </div>
            <div class="form-group">
                <label>Status</label>
                <input type="text" class="form-control" name="ket" value="<?php echo $pecah['keterangan']; ?>">
            </div>
					 		<button class="btn btn-primary" name="edit"><i class="fa fa-save"></i> Simpan</button>
							<a href="index.php?page=guru" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Guru</a>
					 </form>
					 	<?php 
					 		if (isset($_POST['edit'])) 
					 		{
					 			# code...
					 			$koneksi->query("UPDATE tb_guru SET nama_guru='$_POST[nama]',kode_mapel='$_POST[kode_mapel]',jenis_kelamin='$_POST[jenis_kelamin]',agama='$_POST[agama]',tempat_lahir='$_POST[tempat_lahir]',tanggal_lahir='$_POST[tgl_lahir]',keterangan='$_POST[ket]' WHERE NIP='$_GET[kd]'");

					 			echo "<script>alert('Data Guru Telah Diedit');</script>";

					    }
					 	?>
			</div>
		</div>
	</div>
</div>
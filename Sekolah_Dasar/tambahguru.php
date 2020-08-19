<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:#f00;">Tambah Guru</h3>
				<form method = "post" enctype="multipart/form-data">
					<div class="form-group">
						<label>NIP</label>
						<input type="number" class="form-control"  name="nip" placeholder="Masukan NIP" maxlength="8">
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
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
					<div class="form-group">
							<label>Jenis Kelamin</label>
							<input type="text" class="form-control" name="jenis_kelamin"  placeholder="Masukan Jenis Kelamin">
					
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
							<input type="date" class="form-control" name="tgl_lahir">
          </div>
          <div class="form-group">
							<label>Status</label>
							<input type="text" class="form-control" name="ket" placeholder="Masukan Keterangan, Ex : Aktif/Non Aktif">
					</div>
					<button class="btn btn-primary" name="save"><i class="fa fa-save"></i> Simpan</button>
					<a href="index.php?page=guru" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali ke Guru</a>
				</form>
				<?php
				if (isset($_POST['save'])) {
				 	# code...
				 	$koneksi->query("INSERT INTO tb_guru
				 		(NIP,nama_guru,kode_mapel,jenis_kelamin,agama,tempat_lahir,tanggal_lahir,keterangan) VALUES ('$_POST[nip]','$_POST[nama]','$_POST[kode_mapel]','$_POST[jenis_kelamin]','$_POST[agama]','$_POST[tempat_lahir]','$_POST[tgl_lahir]','$_POST[ket]')");

				 	echo "<script>alert('Data Guru Berhasil Disimpan');</script>";

				 } 
				 ?>
			</div>
		</div>
	</div>
</div>
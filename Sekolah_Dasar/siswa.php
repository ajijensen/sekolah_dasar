<div class="row"> 
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Siswa</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>NIS</th>
								<th>Nama</th>
                <th>Kelas</th>
                <th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
							</tr>
						</thead>
						<tbody>
              <?php 
                $nomor=1;
                $ambil=$koneksi->query("SELECT * FROM tb_siswa")
              ?>
              <?php while($pecah=$ambil->fetch_assoc()){ ?>
              <tr class="odd gradeX">
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['NIS']; ?></td>
                <td><?php echo $pecah['nama_siswa']; ?></td>
                <td><?php echo $pecah['kelas']; ?></td>
                <td><?php echo $pecah['jenis_kelamin']; ?></td>
                <td><?php echo $pecah['agama']; ?></td>
                <td><?php echo $pecah['tempat_lahir']; ?></td>
                <td><?php echo $pecah['tanggal_lahir']; ?></td>
                <td>
                  <a href="index.php?page=editsiswa&kd=<?php echo $pecah['NIS']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
                  <a href="index.php?page=hapussiswa&kd=<?php echo $pecah['NIS']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
                </td>
              </tr>
                <?php $nomor++; ?>
                <?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="index.php?page=tambahsiswa" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Siswa</a>
			</div>
		</div>
	</div>
</div>
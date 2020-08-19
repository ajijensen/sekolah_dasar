<div class="row">
	<div class="col-md-12">
		<div>
			<div class="panel-heading">Data Guru</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>NIP</th>
                <th>Nama</th>
								<th>Mata Pelajaran</th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
							<tbody>
									<?php 
										$nomor=1;
										$ambil = $koneksi->query("SELECT * FROM tb_guru INNER JOIN tb_mapel ON tb_guru.kode_mapel=tb_mapel.kode_mapel");
                  ?>
                  <?php while($pecah=$ambil->fetch_assoc()){ ?> 
								<tr>
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['NIP'] ?></td>
                  <td><?php echo $pecah['nama_guru']; ?></td>
                  <td><?php echo $pecah['nama_mapel']; ?></td>
									<td><?php echo $pecah['jenis_kelamin']; ?></td>
									<td><?php echo $pecah['agama']; ?></td>
                  <td><?php echo $pecah['tempat_lahir']; ?></td>
                  <td><?php echo $pecah['tanggal_lahir']; ?></td>
									<td><?php echo $pecah['keterangan']; ?></td>
									<td>
										<a href="index.php?page=editguru&kd=<?php echo $pecah['NIP']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="index.php?page=hapusguru&kd=<?php echo $pecah['NIP']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
                  <?php $nomor++; ?>
                  <?php } ?>
							</tbody>
						</thead>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="index.php?page=tambahguru" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Guru</a>
			</div>
		</div>
	</div>
</div>
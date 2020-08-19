<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Mata Pelajaran</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Mata Pelajaran</th>
								<th>Nama Mata Pelajaran</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
									$nomor=1;
									$ambil=$koneksi->query("SELECT * FROM tb_mapel")
								?>
									<?php while($pecah=$ambil->fetch_assoc()){ ?>
						    <tr>
						    	<td><?php echo $nomor; ?></td>
						    	<td><?php echo $pecah['kode_mapel']; ?></td>
						    	<td><?php echo $pecah['nama_mapel']; ?></td>
						    	<td><?php echo $pecah['keterangan']; ?></td>
						    	<td>
						    		<a href="index.php?page=editmapel&kd=<?php echo $pecah['kode_mapel']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
									<a href="index.php?page=hapusmapel&kd=<?php echo $pecah['kode_mapel']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
						    	</td>
						    </tr>
						    	<?php $nomor++; ?>
							    <?php } ?>
						</tbody>
					</table>
				</div>
				<div class="panel-footer">
					<a href="index.php?page=tambahmapel" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Mata Pelajaran</a>
				</div>
			</div>
		</div>
	</div>
</div>
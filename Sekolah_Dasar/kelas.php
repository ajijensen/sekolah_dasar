<div class="row"> 
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Data Kelas</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
								<th>Kode Kelas</th>
								<th>Kelas</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
								<?php 
										$nomor=1;
										$ambil=$koneksi->query("SELECT * FROM tb_kelas")
								?>
									 	<?php while($pecah=$ambil->fetch_assoc()){ ?>
								<tr class="odd gradeX">
									<td><?php echo $nomor; ?></td>
									<td><?php echo $pecah['kode_kelas']; ?></td>
									<td><?php echo $pecah['kelas']; ?></td>
									<td>
										<a href="index.php?page=editkelas&kd=<?php echo $pecah['kode_kelas']; ?>" class="btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</a>
										<a href="index.php?page=hapuskelas&kd=<?php echo $pecah['kode_kelas']; ?>" class="btn-danger btn-xs"><i class="fa fa-trash"></i> Hapus</a>
									</td>
								</tr>
									<?php $nomor++; ?>
									<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="panel-footer">
				<a href="index.php?page=tambahkelas" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Kelas</a>
			</div>
		</div>
	</div>
</div>
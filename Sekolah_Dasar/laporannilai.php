<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">Laporan Nilai Rapor</div>
			<div class="panel-body">
				<div class="table">
					<table class="table table-striped table-bordered table-hover">
						<thead>
							<tr>
								<th>No</th>
                <th>NIS</th>
                <th>Nama</th>
								<th>Mata Pelajaran</th>
								<th>Kelas</th>
								<th>Semester</th>
                <th>Tahun Ajaran</th>
                <th>Sikap</th>
                <th>Izin</th>
                <th>Sakit</th>
                <th>Alfa</th>
                <th>Nilai</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							 	$nomor=1;
							 	$ambil=$koneksi->query("SELECT tb_rapor.NIS,tb_siswa.nama_siswa,tb_mapel.nama_mapel,tb_siswa.kelas,tb_rapor.semester,tb_rapor.tahun_pelajaran,tb_rapor.sikap,tb_rapor.izin,tb_rapor.sakit,tb_rapor.alfa,tb_rapor.nilai
                  FROM tb_rapor
                  JOIN tb_siswa
                  ON tb_rapor.NIS=tb_siswa.NIS
                  JOIN tb_mapel
                  ON tb_rapor.kode_mapel=tb_mapel.kode_mapel"); 
							?>
									<?php while($pecah = $ambil->fetch_assoc()) { ?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $pecah['NIS']; ?></td>
								<td><?php echo $pecah['nama_siswa']; ?></td>
								<td><?php echo $pecah['nama_mapel']; ?></td>
								<td><?php echo $pecah['kelas']; ?></td>
								<td><?php echo $pecah['semester']; ?></td>
                <td><?php echo $pecah['tahun_pelajaran']; ?></td>
                <td><?php echo $pecah['sikap']; ?></td>
								<td><?php echo $pecah['izin']; ?></td>
								<td><?php echo $pecah['sakit']; ?></td>
                <td><?php echo $pecah['alfa']; ?></td>
                <td><?php echo $pecah['nilai']; ?></td>
								<td>
									<a href="index.php?page=detailnilai&kd=<?php echo $pecah['NIS']?>" class="btn btn-info btn-xs"><i class="fa fa-search"></i> Detail</a>
								</td>
							</tr>
									<?php $nomor++; ?>
									<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
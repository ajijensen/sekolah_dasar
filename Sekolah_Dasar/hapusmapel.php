<?php  
	$ambil = $koneksi->query("SELECT * FROM tb_mapel WHERE kode_mapel='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM tb_mapel WHERE kode_mapel = '$_GET[kd]'");

	echo "<script>alert('Mata Pelajaran Telah di Hapus !');</script>";
	echo "<script>location='index.php?page=mapel';</script>";

 ?> 
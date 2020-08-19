<?php  
	$ambil = $koneksi->query("SELECT * FROM tb_siswa WHERE NIS='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM tb_siswa WHERE NIS = '$_GET[kd]'");

	echo "<script>alert('Data Siswa Telah di Hapus !');</script>";
	echo "<script>location='index.php?page=siswa';</script>";

 ?> 
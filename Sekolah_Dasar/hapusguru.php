<?php  
	$ambil = $koneksi->query("SELECT * FROM tb_guru WHERE NIP='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM tb_guru WHERE NIP='$_GET[kd]'");

	echo "<script>alert('Guru Telah Di Hapus !');</script>";
	echo "<script>location='index.php?page=guru';</script>";

 ?> 
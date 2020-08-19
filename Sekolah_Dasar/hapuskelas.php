<?php  
	$ambil = $koneksi->query("SELECT * FROM tb_kelas WHERE kode_kelas='$_GET[kd]'");
	$pecah = $ambil->fetch_assoc();
	$koneksi->query("DELETE FROM tb_kelas WHERE kode_kelas = '$_GET[kd]'");

	echo "<script>alert('Kelas terhapus');</script>";
	echo "<script>location='index.php?page=kelas';</script>";

 ?> 
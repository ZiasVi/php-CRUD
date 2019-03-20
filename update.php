<?php
	include "koneksi.php";
	$nomhs = $_POST['nomhs'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];

	mysqli_query($koneksi,"UPDATE mahasiswa SET No_Mhs = '$nomhs', Nama = '$nama', Jenis_Kelamin = '$jk', Jurusan = '$jurusan', Alamat = '$alamat' WHERE No_Mhs = '$nomhs' ");

	header("location:form.php?pesan=update");
?>
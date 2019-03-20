<?php
	include "koneksi.php";
	$nomhs = $_POST['nomhs'];
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$jurusan = $_POST['jurusan'];
	$alamat = $_POST['alamat'];

	mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES ('$nomhs','$nama','$jk','$jurusan','$alamat')");

	header("location:form.php?pesan=input");
?>
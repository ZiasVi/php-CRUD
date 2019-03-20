<?php
	include "koneksi.php";
	$nomhs = $_GET['nomhs'];
	mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE No_Mhs='$nomhs'");

	header("location:form.php?pesan=hapus")
?>
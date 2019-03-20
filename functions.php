<?php
	$koneksi = mysqli_connect("localhost","root","","form_mhs");

	function query($query){
		global $koneksi;
		$result = mysqli_query($koneksi, $query);
		$rows = [];
		while ($row = mysqli_fetch_assoc($result)) {
			$rows[] = $row;
		}
		return $rows;
	}

	function cari($keyword){
		$query = "SELECT * FROM mahasiswa WHERE No_Mhs LIKE '%$keyword%'OR Nama LIKE '%$keyword%'OR Jenis_Kelamin LIKE '%$keyword%'OR Jurusan LIKE '%$keyword%'OR Alamat LIKE '%$keyword%'";
		return query($query);
	}
?>
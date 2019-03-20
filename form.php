<!DOCTYPE html>
<html>
<head>
	<title>CRUD Form Mahasiswa</title>
	<style type="text/css">
		body{
			font-family: Arial;
		}
		a{
			color: #000;
			text-decoration: none;
		}
		.judul{
			background: #55efc4;
			height: 100px;
			text-align: center;
			padding:20px;
			margin-bottom: 30px;
		}
		.input, .form{
			margin-left: 30px;
		}
		.form{
			margin-bottom: 30px;
		}
		h3{
			margin-left: 30px;
		}
		.table{
			border-collapse: collapse;
			margin-left: 30px;
		}
		 
		table.table td td , table.table tr td{
			padding: 10px 20px	;
		}
	</style>
	<?php
		require "functions.php";
		$mahasiswa = query("SELECT * FROM mahasiswa");

		if (isset($_POST["cari"])) {
			$mahasiswa = cari($_POST["keyword"]);
		}
	?>
</head>
<body>
	<div class="judul">
		<h1>Form Mahasiswa</h1>
		<h3>Lihat Semua Data</h3>
	</div>

	<?php 
		if (isset($_GET['pesan'])) {
			$pesan = $_GET['pesan'];
			if ($pesan == 'input') {
				echo "Data berhasil diinputkan!";
			}
			elseif ($pesan == 'hapus') {
				echo "Data berhasil dihapus!";
			}
			elseif ($pesan == 'update') {
				echo "Data berhasil diubah!";
			}
		}
	?>
	<br>
	<a href="input.php" class="input">+ Tambah Data</a>

	<h3>Data Mahasiswa</h3>
	<form action="" method="post" class="form">
		<input type="text" name="keyword" size="30" autofocus placeholder="Masukkan keyword pencarian.." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	
	<table border="1" class="table">
		<tr>
			<td>No</td>
			<td>No Mahasiswa</td>
			<td>Nama</td>
			<td>Jenis Kelamin</td>
			<td>Jurusan</td>
			<td>Alamat</td>
			<td>Opsi</td>
		</tr>
		<?php
			$nomor = 1;
			foreach ($mahasiswa as $row ) :
		?>
		<tr>
			<td><?= $nomor++ ?></td>
			<td><?= $row['No_Mhs']?></td>
			<td><?=$row['Nama']?></td>
			<td><?=$row['Jenis_Kelamin']?></td>
			<td><?=$row['Jurusan']?></td>
			<td><?=$row['Alamat']?></td>
			<td>
				<a href="edit.php?nomhs=<?= $row['No_Mhs']?>">Edit</a> |
				<a href="hapus.php?nomhs=<?= $row['No_Mhs']?>">Hapus</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>
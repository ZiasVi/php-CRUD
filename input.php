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
		.lihat{
			margin-left: 30px;
		}
		form{
			margin-top: 30px;
			margin-left: 30px;
		}
	</style>
</head>
<body>
	<div class="judul">
		<h1>Form Mahasiswa</h1>
		<h3>Input Data</h3>
	</div>

	<a href="form.php" class="lihat">Lihat Data</a>

	<form action="input-aksi.php" method="post">
		<table>
			<tr>
				<td>No Mahasiwa</td>
				<td><input type="text" name="nomhs"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="radio" name="jk" value="laki-laki">Laki-Laki</td>
				<td><input type="radio" name="jk" value="perempuan">Perempuan</td>
			</tr>
			<tr>
				<td>Jurusan</td>
				<td>
					<select name="jurusan">
						<option>Teknik Informatika</option>
						<option>Sistem Informasi</option>
						<option>Manajemen Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat" cols="30" rows="5"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
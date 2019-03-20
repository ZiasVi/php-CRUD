
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
		<h3>Edit Data</h3>
	</div>

	<a href="form.php" class="lihat">Lihat Data</a>

	<?php 
		include "koneksi.php";
		$nomhs = $_GET['nomhs'];
		$query_mysql = mysqli_query($koneksi,"SELECT * FROM mahasiswa WHERE No_Mhs ='$nomhs'");
		while ($data = mysqli_fetch_array($query_mysql)) {
	?>
		<form action="update.php" method="post">
			<table>
				<tr>
					<td>No Mahasiwa</td>
					<td><input type="text" name="nomhs" value="<?= $data['No_Mhs']?>"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama" value="<?= $data['Nama']?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<?php
						if ($data['Jenis_Kelamin'] == 'laki-laki') {
							echo "<td>";
							echo "<input type='radio' name='jk' value='laki-laki' checked='checked'> Laki-Laki";
							echo "</td>";
							echo "<td>";
							echo "<input type='radio' name='jk' value='perempuan'> Perempuan";
							echo "</td>";
						}
						elseif ($data['Jenis_Kelamin'] == 'perempuan') {
							echo "<td>";
							echo "<input type='radio' name='jk' value='laki-laki'> Laki-Laki";
							echo "</td>";
							echo "<td>";
							echo "<input type='radio' name='jk' value='perempuan' checked='checked'> Perempuan";
							echo "</td>";
						}
					?>
				</tr>
				<tr>
					<td>Jurusan</td>
					<td>
						<select name="jurusan">
							<option><?= $data['Jurusan']?></option>
							<option>Teknik Informatika</option>
							<option>Sistem Informasi</option>
							<option>Manajemen Informatika</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat" cols="30" rows="5"><?= $data['Alamat']?></textarea></td>
				</tr>
				<tr>
					<td><input type="submit" value="Simpan"></td>
				</tr>
			</table>
		</form>
	<?php }?>
</body>
</html>
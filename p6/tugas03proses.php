<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Tugas03 </title>
</head>
<body>
	<h1>Data Registrasi</h1>

	<?php
		$nama         = $_GET['nama'];
		$alamat       = $_GET['alamat'];
		$tempatlahir  = $_GET['tempatlahir'];
		$tanggallahir = $_GET['tanggallahir'];
		$jeniskelamin = $_GET['jeniskelamin'];
		$pendidikan   = $_GET['pendidikan'];
	?>

	<table border="1">
		<tr>
			<td width="150px">nama</td>
			<td width="150px"><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>alamat</td>
			<td><?php echo $alamat; ?></td>
		</tr>
		<tr>
			<td>tempat lahir</td>
			<td><?php echo $tempatlahir; ?></td>
		</tr>
		<tr>
			<td>tangal lahir</td>
			<td><?php echo $tanggallahir ?></td>
		</tr>
		<tr>
			<td>jenis kelamin</td>
			<td><?php echo $jeniskelamin ?></td>
		</tr>
		<tr>
			<td>pendidikan</td>
			<td><?php echo $pendidikan ?></td>
		</tr>
	</table>

	<a href="tugas03.php"><input type="button" value="back to home"></a>

</body>
</html>
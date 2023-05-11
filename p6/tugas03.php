<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form Registrasi</title>
</head>
<body>
	<h1> Form Registrasi </h1>
	Isi Data Dibawah Ini :
	<table>
		<form method="GET" action="tugas03proses.php">
			<tr>
				<td width="150px">nama</td>
				<td><input type="text" name="nama"></input></td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><textarea rows="5" cols="50" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>tempat lahir</td>
				<td><input type="text" name="tempatlahir"></input></td>
			</tr>
			<tr>
				<td>tanggal lahir</td>
				<td><input type="text" name="tanggallahir"></input></td>
			</tr>
			<tr>
				<td>jenis kelamin</td>
				<td>
					<input type="radio" name="jeniskelamin" value="L">laki-laki</input>
					<input type="radio" name="jeniskelamin" value="P">perempuan</input>
				</td>
			</tr>
			<tr>
				<td>pendidikan</td>
				<td>
					<select name="pendidikan" required>
						<option value="D3">D3</option>
						<option value="S1">S1</option>
						<option value="S2">S2</option>
						<option value="S3">S3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit"></input>
					<input type="reset" name="cencel" value="cancel"></input>
				</td>
			</tr>
		</form>
	</table>
</body>
</html>
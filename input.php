<!DOCTYPE html>
<html>
<head>
	<title>Membuat Dengan PHP dan PHPMyAdmin - Menampilkan data dari database</title>
	<link rel="stylesheet" tyspe="text/css" href="style.css">
</head>
<body>
	<div class="judul">s
		<h1>Membuat Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data</h2>

	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input2.php" method="post">
		<table>
      <tr>
        <td>Id</td>
        <td><input type="text" name="id"></td>
      </tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="level"></td>
			</tr>
      <tr>
				<td>Fullname</td>
				<td><input type="text" name="fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>
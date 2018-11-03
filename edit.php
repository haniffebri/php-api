<!DOCTYPE html>
<html>
<head>
	<title>Menampilkan data dari database ke dalam bentuk tabel</title>
</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h3>Edit Database</h3>
	</div>
	<br/>
	<a href="index.php"></a>

	<br/>
	<h3>Edit Data</h3>
	<form action="edit2.php" method="post">
		<table>
			<tr>
				<td>Id</td>
				<td><input type="text" name="id"></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="Username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="Password"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><input type="text" name="Level"></td>
			</tr>
			<tr>
				<td>Fullname</td>
				<td><input type="text" name="Fullname"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>

</body>
</html>
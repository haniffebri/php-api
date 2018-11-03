<?php 
	include "koneksi.php";
	$id = $_GET['id'];

	$sql_delete=("DELETE FROM profile_class WHERE id='$id' ");

	mysql_query($conn,$sql_delete)or die(mysql_error($conn));

	echo'<script>
	alert("Data Berhasil Dihapus")
	location="index.php?"
	</script>';
 ?>
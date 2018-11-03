<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="container">
    <h2><center>DATA PESERTA</center></h2>

    <table class=" table table-bordered table-hovered" align="center">
  <tr>
    <th>id</th>
    <th>username</th>
    <th>password</th>
    <th>level</th>
    <th>fullname</th>
    <th>pilihan</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('koneksi.php');
  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM profile_class";
  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);
  // 4. Lakukan fetch dengan result type MYSQL_ASSOC
  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['ID'];?></td>
      <td><?php echo $baris_data['Username'];?></td>
      <td><?php echo $baris_data['Password'];?></td>
      <td><?php echo $baris_data['Level'];?></td>
      <td><?php echo $baris_data['Fullname'];?></td>
      <td><a class="edit" href="edit.php id=<?php echo $baris_data['id']; ?>">Edit</a>-<a class="hapus" href="hapus.php id=<?php echo $baris_data['id']; ?>">Hapus</a></td>
    </tr>
  <?php }?>
</body>
</html>
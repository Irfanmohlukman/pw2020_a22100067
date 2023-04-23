<?php

$conn = mysqli_connect('localhost', 'root', '', 'pw_a22100067');

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

$rows = [];
while ($row = 'mysql_fetch_assoc'($result)) {
  $rows[] = $row;
}



$mahsiswa = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table border="1" cellpadding="10" cellspacing="0"></table>
  <tr>
  <tr>#</tr>
  <th>Gambar</th>
  <th>Nama</th>
  <th>Nim</th>
  <th>Email</th>
  <th>jurusan</th>
  <th>Aksi</th>
  </tr>

  <?php $i = 1;
  foreach ($mahsiswa as $m) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $m['gambar']; ?>" width="60"></td>
      <td><?= $m['nim']; ?></td>
      <td><?= $m['nama']; ?></td>
      <td><?= $m['email']; ?></td>
      <td><?= $m['jurusan']; ?></td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </table>

</body>

</html>
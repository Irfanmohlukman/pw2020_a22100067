<?php
require 'functions.php';
$mahsiswa = query("SELECT*FOM mahasiswa");
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
  <th>NRP</th>
  <th>Email</th>
  <th>jurusan</th>
  <th>Aksi</th>
  </tr>

  <?php foreach ($mahsiswa as $m) : ?>
    <tr>
      <td>1</td>
      <td><img src="img/phpp" width="80"></td>
      <td>A22100067</td>
      <td>Irfan Mohammad lukaman</td>
      <td>irfanmohlukman@gmail.com</td>
      <td>Teknik Informatika</td>
      <td>
        <a href="">ubah</a> | <a href="">hapus</a>
      </td>
    </tr>
  <?php endforeach; ?>
  </table>

</body>

</html>
<php require 'functions.php' ; $id=$GET['id']; $m=query("SELECT * FROM mahsiswa WHRE id=$id"); ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
  </head>

  <body>
    <h3>Daetail Mahasiswa</h3>
    <ul>
      <li>img src="img/<?= $m['gambar']; ?>"</li>
      <li>Nim : <?= $m['nim']; ?></li>
      <li>Nama : <?= $m['nama']; ?></li>
      <li>Email : <?= $m['email']; ?></li>
      <li>Jurusan : <?= $m['jurusan']; ?></li>
      <li><a href="">ubah</a> | <a href="">hapus</a></li>
      <li><a href="latihan3.php">kembali ke daftar mahsiswa</a></li>


    </ul>

    <table border="1" cellpadding="10" cellspacing="0" ;>
      <tr>
        <th>#</th>
        <th>#</th>
        <th>#</th>



      </tr>
    </table>


  </body>

  </html>
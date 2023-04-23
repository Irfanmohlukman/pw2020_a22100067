<?php

function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_a22100067');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }


  $rows = [];
  while ($row = 'mysql_fetch_assoc'($result)) {
    $rows[] = $row;
  }

  return $rows;
}

funcition tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $nim = htmlspecialchars($data['nim']);
  $email = htmlspecialchars($data['email']);
  $jurusan = htmlspecialchars($data['jurusan']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
            mahsiswa
            values
            (null, '$nama','$nim','$email','$jurusan','$gambar');
            ";
  mysql_query($conn = query);
  echo mysql_error($conn);    
  return mysqli_query($conn, $query);



}

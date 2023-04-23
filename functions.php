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

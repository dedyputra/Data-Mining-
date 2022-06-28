<?php
include "koneksi.php";

function tambah($data)
{
  // ambil data dari form 
  global $conn;
  $ID = $data['ID'];
  $X1 = $data['X1'];
  $X2 = $data['X2'];
  $X3 = $data['X3'];
  $X4 = $data['X4'];
  $X5 = $data['X5'];
  $X6 = $data['X7'];
  $X7 = $data['X7'];
  $X8 = $data['X8'];
  $X9 = $data['X9'];
  $X10 = $data['X10'];
  $X11 = $data['X11'];
  $X12 = $data['X12'];

  $query = "INSERT INTO data_survey VALUES 
  ('', '$ID', '$X1', '$X2', '$X3', '$X4' , '$X5', '$X6', '$X7', '$X8' , '$X9', '$X10', '$X11', '$X12')";
  mysqli_query($conn, $query);
  return mysqli_affected_rows($conn);
  if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
      echo "Data berhasil ditambahkan!";
    } else {
      echo "Data gagal ditambahkan!";
    }
  }
}

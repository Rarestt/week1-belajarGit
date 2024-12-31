<?php
  $host = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'test';

  $error = '';
  $isError = false;

  $conn = new mysqli($host, $username, $password, $database);
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  } 

  if(isset($_POST['nama']) && $_POST['nama'] !== '') {
    if(isset($_POST['nim']) && $_POST['nim'] !== '') {
      $error = '';
      $isError = false;
    } else {
      $error = 'NIM belum diisi';
      $isError = true;
    }
  } else {
    $error = 'Nama belum diisi';
    $isError = true;
  }
?>
<?php 
$conn = new mysqli(hostname: "localhost", username: "root", password: "", database: "genkichi");

if ($conn->connect_errno) {
  echo "Koneksi Gagal, silahkan coba lihat DB: " . $conn->connect_error;
  exit();
}

?>
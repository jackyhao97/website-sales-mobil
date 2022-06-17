<?php
  if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
  }
  else {
    $uri = 'http://';
  }

  $uri .= $_SERVER['HTTP_HOST'];  
  
  // local
  define ('BASE_URL', $uri.'/website-sales-mobil');
  // live
  // define ('BASE_URL', $uri);
  define('DS', '/');
  date_default_timezone_set('Asia/Jakarta');

  // Koneksi Live
  // $servername = "localhost";
  // $username = "harb2847_eben";
  // $password = "Orig1neben2022";
  // $dbname = "harb2847_eben";
  // $conn = mysqli_connect($servername, $username, $password, $dbname);
  // if (!$conn) {
  //   echo "Failed to connect!";
  // }
  // Akhir Koneksi Live

  // Koneksi Local
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "mitsubishi-vandys";
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    echo "Failed to connect!";
  }
  // Akhir Koneksi Local
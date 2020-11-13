<?php

// koneksi ke db mysql
$nhost = "localhost";
$nuser = "root";
$npass = "";
$nbd = "arkademy";

$conn = mysqli_connect($nhost, $nuser, $npass, $nbd);

//function untuk page index.php
function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

//function untuk page tambah.php
function tambah($data)
{
  global $conn;
  //ambil data dari tiap elemen form
  $namaproduk = htmlspecialchars($data["namaproduk"]);
  $harga =  htmlspecialchars($data["harga"]);
  $jumlah =  htmlspecialchars($data["jumlah"]);
  $keterangan =  htmlspecialchars($data["keterangan"]);

  //query insert data
  $query = "INSERT INTO produk VALUE ('$namaproduk','$harga','$jumlah','$keterangan')";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

//function untuk page hapus.php
function hapus($namaproduk)
{
  // gunakan tanda petik satu (') data string jika number tanpa tanda petik satu '$namaproduk'
  global $conn;
  $hps = "DELETE FROM produk WHERE namaproduk = '$namaproduk'";
  mysqli_query($conn, $hps);
  return mysqli_affected_rows($conn);
}

// function untuk page ubah.php
function ubah($data)
{
  global $conn;
  //ambil data dari tiap elemen form
  $namaproduk = htmlspecialchars($data["namaproduk"]);
  $harga =  htmlspecialchars($data["harga"]);
  $jumlah =  htmlspecialchars($data["jumlah"]);
  $keterangan =  htmlspecialchars($data["keterangan"]);

  //query update data
  $query = "UPDATE produk SET harga = '$harga', jumlah = '$jumlah', keterangan = '$keterangan' WHERE namaproduk = '$namaproduk'";
  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

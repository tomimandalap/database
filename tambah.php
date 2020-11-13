<?php

require 'functions.php';

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

  //cek apakah data berhasil ditambah atau tidak
  if (tambah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil ditambahkan!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('Data gagal ditambahkan!');
      document.location.href = 'index.php';
    </script>
  ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Input Data</title>

  <style>
    h2 {
      color: teal;
      font-size: 35px;
    }

    .tombol {
      color: white;
      font-family: arial;
      border: 1px solid teal;
      background-color: teal;
      padding: 15px;
    }

    .lis {
      margin-top: 15px;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    footer {
      color: white;
      text-align: center;
      background-color: grey;
      font-size: 16px;
      border: 2px solid grey;
      padding: 5px;
      margin: 0;
      margin-top: 250px;
    }
  </style>

</head>

<body>
  <h2>Input Data Produk</h2>
  <hr>
  <form action="" method="post">
    <ul>
      <li class="lis">
        <label for="namaproduk">Nama Barang: </label>
        <input type="text" name="namaproduk" id="namaproduk" required>
      </li>
      <li class="lis">
        <label for="harga">Harga: </label>
        <input type="text" name="harga" id="harga" required>
      </li>
      <li class="lis">
        <label for="jumlah">Jumlah: </label>
        <input type="text" name="jumlah" id="jumlah" required>
      </li>
      <li class="lis">
        <label for="keterangan">Keterangan: </label>
        <input type="text" name="keterangan" id="keterangan">
      </li>
      <li class="lis">
        <button class="tombol" type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>

  <footer>
    <p>copyright tomi mandala putra</p>
  </footer>
</body>

</html>
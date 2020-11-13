<?php

require 'functions.php';

$namaproduk = $_GET["namaproduk"];

// query data mproduk beradasarkan nama produk
$prod = query("SELECT * FROM produk WHERE namaproduk = '$namaproduk'")[0];

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {

  //cek apakah data berhasil diubah
  if (ubah($_POST) > 0) {
    echo "
      <script>
        alert('Data berhasil diubah!');
        document.location.href = 'index.php';
      </script>
    ";
  } else {
    echo "
    <script>
      alert('Data gagal diubah!');
      document.location.href = 'index.php';
    </script>
  ";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Update Data</title>
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
  <h2>Update Data Produk</h2>
  <hr>
  <form action="" method="post">
    <ul>
      <li class="lis">
        <label for="namaproduk">Nama Barang: </label>
        <input type="text" name="namaproduk" id="namaproduk" required value="<?php echo $prod["namaproduk"];  ?>">
      </li>
      <li class="lis">
        <label for="harga">Harga: </label>
        <input type="text" name="harga" id="harga" required value="<?php echo $prod["harga"];  ?>">
      </li>
      <li class="lis">
        <label for="jumlah">Jumlah: </label>
        <input type="text" name="jumlah" id="jumlah" required value="<?php echo $prod["jumlah"];  ?>">
      </li>
      <li class="lis">
        <label for="keterangan">Keterangan: </label>
        <input type="text" name="keterangan" id="keterangan" value="<?php echo $prod["keterangan"];  ?>">
      </li>
      <li class="lis">
        <button class="tombol" type="submit" name="submit">Update Data</button>
      </li>
    </ul>
  </form>
  <footer>
    <p>copyright tomi mandala putra</p>
  </footer>
</body>

</html>
<?php

require 'functions.php';

//menampilkan database ke page html dengan query SELECT
$produk = query("SELECT * FROM produk")

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dasboard</title>
  <link rel="stylesheet" href="css/style.css">

  <style>
    .tombol {
      color: white;
      font-family: arial;
      border: 1px solid teal;
      background-color: teal;
      padding: 15px;
    }

    .ubah {
      color: white;
      font-size: 12px;
      font-family: arial;
      border: 1px solid none;
      background-color: skyblue;
      padding: 8px;
    }

    .hapus {
      color: white;
      font-size: 12px;
      font-family: arial;
      border: 1px solid none;
      background-color: tomato;
      padding: 8px;
    }

    footer {
      color: white;
      text-align: center;
      background-color: grey;
      font-size: 16px;
      border: 2px solid grey;
      padding: 5px;
      margin: 0;
      margin-top: 110px;
    }
  </style>

</head>

<body>
  <h2 style="color:teal; font-size:35px;">Daftar Produk</h2>
  <hr><br><br>
  <a class="tombol" href=" tambah.php">Tambah Data</a>
  <div style="margin-top:50px;">
    <table border="1px" cellpadding="10" cellspacing="0">
      <tr>
        <th>No.</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Jumlah</th>
        <th>Keterangan</th>
        <th>Aksi</th>
      </tr>
      <?php $i = 1; ?>
      <?php foreach ($produk as $row) : ?>
        <tr>
          <td><?php echo $i ?></td>
          <td><?php echo $row["namaproduk"]; ?></td>
          <td><?php echo $row["harga"]; ?></td>
          <td><?php echo $row["jumlah"]; ?></td>
          <td><?php echo $row["keterangan"]; ?></td>
          <td>
            <a class="ubah" href="ubah.php?namaproduk=<?php echo $row["namaproduk"]; ?>">ubah</a>
            <a class="hapus" href="hapus.php?namaproduk=<?php echo $row["namaproduk"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data ini?');">hapus</a>
          </td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>
    </table>
  </div>
  <footer>
    <p>copyright tomi mandala putra</p>
  </footer>
</body>

</html>
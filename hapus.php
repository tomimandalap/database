<?php
require 'functions.php';

$namaproduk = $_GET["namaproduk"];

if (hapus($namaproduk) > 0) {
  echo "
      <script>
        alert('Data berhasil dihapus!');
        document.location.href = 'index.php';
      </script>
    ";
} else {
  echo "
      <script>
        alert('Data gagal dihapus!');
        document.location.href = 'index.php';
      </script>
    ";
}

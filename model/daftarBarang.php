<?php 
session_start();
$_SESSION["daftarBarang"][] = [
    "nama" => $produk["nama"],
    "jumlahBarang" => $jumlahBarang,
    "size" => $sizeBarang,
    "total" => $output,
    "img" => $produk["img"],
    "jumlahBarang" => $jumlahBarang,
    "size" => $sizeBarang,
    "harga" => $produk["harga"]
  ];
  $_SESSION["harga"] = $produk["harga"];
  $_SESSION['output'] = $output;
  $_SESSION["nama"] = $produk["nama"];
  $_SESSION["bayar"] =  $produk["bayar"];
  $_SESSION["img"] = $produk["img"];
  $_SESSION["jumlahBarang"] = $_POST["jumlahBarang"];
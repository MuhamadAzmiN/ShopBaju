<?php


class Bayar {
    public $namaBarang,
           $jumlahBarang,
           $sizeBarang,
           $hargaBarang;

           


    public function __construct($namaBarang, $jumlahBarang = 2, $sizeBarang, $hargaBarang = 0   )
    {
        $this->namaBarang = $namaBarang;
        $this->jumlahBarang = $jumlahBarang;
        $this->sizeBarang = $sizeBarang;
        $this->hargaBarang = $hargaBarang;  
    }

    public function harga_a()
    {
        return  50000;
    }

    public function harga_b()
    {
        return 70000;
    }

    public function harga_c()
    {
        return 30000;
    }


    public function perjumlahan_barang_a()
    {
        $totalHarga =  $this->harga_a() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }

    public function perjumlahan_barang_b()
    {
        $totalHarga =  $this->harga_b() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }

    public function perjumlahan_barang_c()
    {
        $totalHarga =  $this->harga_c() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }

    


}
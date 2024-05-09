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

    public function harga_d()
    {
        return 30000;
    }

    public function harga_e()
    {
        return 30000;
    }

    public function harga_f()
    {
        return 30000;
    }
    public function harga_g()
    {
        return 30000;
    }
    public function harga_h()
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

    
    public function perjumlahan_barang_d()
    {
        $totalHarga =  $this->harga_d() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }


    public function perjumlahan_barang_e()
    {
        $totalHarga =  $this->harga_e() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }
    

    public function perjumlahan_barang_f()
    {
        $totalHarga =  $this->harga_f() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }
    public function perjumlahan_barang_g()
    {
        $totalHarga =  $this->harga_g() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }
    public function perjumlahan_barang_h()
    {
        $totalHarga =  $this->harga_h() * $this->jumlahBarang;
        $totalFormatted = $totalHarga;
        return $totalFormatted;
    }


}
<?php
class Pembayaran {
    public $bayar ;
    public $metode_pembayaran;


    public function __construct($bayar, $metode_pembayaran)
    {
        $this->bayar = $bayar;
        $this->metode_pembayaran = $metode_pembayaran;
    }

    public function proses()
    {
        $error = null;
        if($this->bayar <= $_SESSION["jumlahTotal"]){
          $error = '<div style="text-align: center;" class="alert alert-danger " role="alert">
          anda gagal transaksi karna uang anda tidak mencukupi
          </div>';
          return $error;
        }else if($this->bayar == $_SESSION["jumlahTotal"]){
          echo "uang anda cukup";
          header("Location: bukti.php");
          exit;
        }else if($this->bayar > $_SESSION["jumlahTotal"]){
          echo "uang anda cukup"; 
          header("Location: bukti.php");
          exit;
        }else {
          echo "error";

        }
    }
}
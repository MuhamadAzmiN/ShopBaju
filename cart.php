<?php
session_start();



require 'Proses/prosesPembayaran.php';
if(isset($_POST["btn"])){
  $inputBayar = $_POST["bayar"];
  $metode_pembayaran = $_POST["metode_pembayaran"];
  $namaPengguna = $_POST["namaPengguna"];
  $_SESSION['namaPengguna'] = $namaPengguna;
  $_SESSION['metode_pembayaran'] = $metode_pembayaran;
  $bayar = new Pembayaran($inputBayar, $metode_pembayaran, $namaPengguna);
  echo $bayar->proses();




  




  
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Products - Red store</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href=/css/bootstrap.css">
    <link href="path/to/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
<?php include('nav.php');?>

  <!-- Cart Items Details -->
  <div class="small-container cart-page">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Size</th>
       </tr>


      <?php $_SESSION["jumlahTotal"] = 0 ;?>

      <?php if($_SESSION["daftarBarang"] == null) :?>
        <div style="text-align: center;" class="alert alert-warning" role="alert">
         Anda belum beli apapun
        </div>
      

      <?php else :?>
      
      <?php foreach($_SESSION["daftarBarang"] as $key => $post ) :?>
      <tr>
        <td>
          <div class="cart-info">
            <img  src="<?= $post["img"];?>" alt="" />
            <div>
              <p><?= $post["nama"];?></p>
              <small>Price: <?php $total = $post["total"];
                    $formatted_total = number_format($total);
              ?><?= $post["harga"];?>
                  </small>
              <h1></h1>
              <br />
              <a href="hapus.php?id=<?= $key ;?>">Remove</a>
            </div>
          </div>
        </td>
        <?php
        $_SESSION["jumlahTotal"] += $total;
        ?>
        <td><?= $post["jumlahBarang"];?></td>
        <td><?= $post["size"];?></td>
      </tr>
      <?php endforeach ;?>
     

    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Total</td>
          <td>Rp.<?= number_format($_SESSION["jumlahTotal"], 0, ',', '.');?></td>
          <td>
      
          </td>
          <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Bayar Transaksi</button>

          </td>
        </tr>
        
      </table>
      
    </div>
  </div>
   <?php endif;?>
  <?= $error ;?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembayaran Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="post">
    <div class="mb-3">
        <label for="nama">Nama Pengguna:</label>
        <input type="text" class="form-control" id="nama" name="namaPengguna">
    </div>
    <div class="mb-3">
        <label for="metode_pembayaran">Metode Pembayaran</label>
        <select name="metode_pembayaran" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option selected>Open this select menu</option>
            <option value="BCA">BCA</option>
            <option value="Gopay">Gopay</option>
            <option value="Cash">Cash</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="bayar">Jumlah Pembayaran:</label>
        <input type="number" class="form-control" id="bayar" name="bayar">
    </div>
    <div class="modal-footer">
        <button name="close" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button name="btn" type="submit" class="btn btn-primary">Bayar</button>
    </div>
</form>

    </div>
  </div>
</div>
  
  <!-- Footer -->
  <!-- JS for Toggle menu -->
  <script src="./assets/js/toggleMenu.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="path/to/popper.min.js"></script>
<script src="path/to/bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="/js/bootstrap.js"></script>
</body>

</html>
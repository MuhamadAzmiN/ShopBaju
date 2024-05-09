<?php 
session_start();
require 'Proses/prosesBayar.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';

// Memastikan ID adalah integer
$id = filter_var($id, FILTER_VALIDATE_INT);

// Cek apakah ID produk valid
if ($id !== false && isset($_SESSION["data"][$id])) {
    // Produk ditemukan, ambil informasi produk
    $produk = $_SESSION["data"][$id];
} else {
  
    header('Location: index.php');
    exit;
}

if(isset($_POST["btn"])){

$namaBarang = $_POST["namaBarang"];
$jumlahBarang = $_POST["jumlahBarang"];
$sizeBarang = $_POST["sizeBarang"];

$bayar = new Bayar($namaBarang, $jumlahBarang, $sizeBarang);

$output = null;
if($produk["nama"] == "Baju"){
  $output = $bayar->perjumlahan_barang_a();
}else if($produk["nama"] == "Celana"){
  $output = $bayar->perjumlahan_barang_b();
}else if($produk["nama"] == "Topi"){
  $output = $bayar->perjumlahan_barang_c();
}else if($produk["nama"] == "Jam") {
  $output = $bayar->perjumlahan_barang_d();
}else if($produk["nama"] == "Sepatu"){
  $output = $bayar->perjumlahan_barang_e();
}else if($produk["nama"] == "Jogger"){
  $output = $bayar->perjumlahan_barang_f();
}else if($produk["nama"] == "Kaos Kaki"){
  $output = $bayar->perjumlahan_barang_g();
}else if($produk["nama"] == "Sepatu White"){
  $output = $bayar->perjumlahan_barang_h();
}

require 'model/daftarBarang.php';


header("Location: cart.php");
exit;
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
    <link rel="stylesheet" href="assets/css/bukti.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

  <!-- Single Products Detail -->
  <div class="small-container single-product">
    <div class="row">
      <div class="col-2">
        <img src="<?= $produk["img"];?>" class="small-img" />

        <div class="small-img-row">
          <div class="small-img-col">
          
          </div>
        </div>
      </div>
      <div class="col-2">

        <p>Home / T-shirt</p>
        <h2><?= $produk["nama"]?></h2>
        <h4>Rp<?= $produk["harga"];?></h4>
        <form action="" method="post">
        <select name="sizeBarang" id="sizeBarang" required>
          <option value="">Select Size</option>
          <option value="XXL">XXL</option>
          <option value="XL">XL</option>
          <option value="Large">Large</option>
          <option value="Medius">Medium</option>
          <option value="Small">Small</option>
        </select>
        <input name="jumlahBarang" type="number" value="1" required />
        <button style="border: 1px solid black;" name="btn" href="" class="btn">Add to Cart</button>
    
        </form>
        <h3>Product Details<i class="fa fa-indent"></i></h3>
        <br />
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit nemo
          nam magnam rerum sunt explicabo! Distinctio ipsam doloremque nostrum
          ipsum?
        </p>
      </div>
    </div>
  </div>

  <!-- Title -->
  <div class="small-container">
    <div class="row row-2">
      <h2>Related Products</h2>
      <p>View More</p>
    </div>
  </div>

  <!-- Similar Products -->

  <div class="small-container">
    <div class="row">
    <?php foreach($_SESSION["data"] as $key => $post ):?>
    <div class="col-4">
      <a href="product-details.php?id=<?= $key ;?>">
        <img src="<?= $post["img"];?>" alt="" />
      </a>
      <h4><?= $post["nama"]; ?></h4> <!-- Memperbaiki untuk menampilkan nama produk -->
      <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star-o"></i>
      </div>
      <p>Rp <?= $post["harga"];?></p>
    </div>
<?php endforeach ;?>
    </div>
  </div>
  

  <!-- Footer -->
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="footer-col-1">
          <h3>Download Our App</h3>
          <p>
            Download App for Android <br />
            and ios mobile phone
          </p>
          <div class="app-logo">
            <img src="./assets/images/play-store.png" alt="" />
            <img src="./assets/images/app-store.png" alt="" />
          </div>
        </div>
        <div class="footer-col-2">
          <img src="./assets/images/logo-white.png" alt="" />
          <p>
            Lorem, ipsum dolor sit amet consectetur <br />adipisicing elit.
            Porro, eum?
          </p>
        </div>
        <div class="footer-col-3">
          <h3>Useful Links</h3>
          <ul>
            <li>Coupons</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
          </ul>
        </div>

        <div class="footer-col-4">
          <h3>Follow us</h3>
          <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
          </ul>
        </div>
      </div>
      <hr />
      <p class="copyright" id="copyright-text">Copyright 2020 - introidx</p>
    </div>
  </div>

  <!-- scripts -->
  <script src="./assets/js/gallery.js"></script>
  <!-- JS for Toggle menu -->
  <script src="./assets/js/toggleMenu.js"></script>
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